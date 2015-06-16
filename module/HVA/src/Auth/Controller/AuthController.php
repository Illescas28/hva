<?php

namespace Auth\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Propel ////
use Empleado;
use EmpleadoQuery;
use RolmoduloQuery;

//// Form ////
use Auth\Form\LoginForm;

//// Filter ////
use Auth\Filter\LoginFilter;

//// Session ////
use Shared\Session\SessionManager;

class AuthController extends AbstractActionController
{
        
    public function loginAction()
    {

        //Verficamos si existe ya una session activa
        if(!SessionManager::sessionExist()){
            $this->layout('layout/layout_auth');

            //Almacenamos la ruta redirect
            //$reditect_url = $this->params()->fromRoute('redirect_url') && $this->params()->fromRoute('redirect_url')!='/login   ' ? $this->params()->fromRoute('redirect_url') : '/';

            $message = null;

            //Instanciamos nuestro loginForm
            $loginForm = new LoginForm();

            $request = $this->getRequest();

            if ($request->isPost()){ 
                //Instanciamos nuestro filtro
                $loginFilter = new LoginFilter();

                $loginForm->setInputFilter($loginFilter->getInputFilter());

                $loginForm->setData($request->getPost());

                if($loginForm->isValid()){

                    $empleadoQuery = new EmpleadoQuery();

                    //Si los datos del formulario son correctos ahora hacemos la busqueda a la db
                    $credentialIsValid = $empleadoQuery->filterByEmpleadoNombreusuario($loginForm->get('empleado_nombreusuario')->getValue())
                                   ->filterByEmpleadoPassword(md5($loginForm->get('empleado_password')->getValue()))
                                   ->exists();

                    if($credentialIsValid){

                        //Creamos la sesion
                        //Obtenemos el objeto empleado
                        $empleado = $empleadoQuery->findOneByEmpleadoNombreusuario($loginForm->get('empleado_nombreusuario')->getValue());
                        //El rol
                        $empleado_rol= $empleado->getRol()->getRolNombre();
                        //El Acl
                        $empleado_aclCollection = \RolmoduloQuery::create()->filterByIdrol($empleado->getIdRol())->find();
                        $empleado_acl = array();
                        foreach ($empleado_aclCollection as $modulo){
                            $moduloNombre = \ModuloQuery::create()->findOneByIdmodulo($modulo->getIdModulo())->getModuloNombre();
                            array_push($empleado_acl, $moduloNombre);
                        }

                        $empleadoArray = $empleado->toArray(\BasePeer::TYPE_FIELDNAME);
                        //Removemos idrol y password ya que son datos que no necesitamos en la session
                        unset($empleadoArray['idrol']);
                        unset($empleadoArray['empleado_password']);

                        $empleado_session = array(
                            'empleado_info' => $empleadoArray,
                            'empleado_rol' => $empleado_rol,
                            'empleado_acl' => $empleado_acl,
                        );

                        SessionManager::init($empleado_session);  
                        return $this->redirect()->toUrl('/');
                    }else{
                        $message = "Nombre de usuario y/o contraseña incorrecta";
                    }                 
                }
            }
            
            return new ViewModel(array(
                'form' => $loginForm,
                'message' => $message,
            ));
        }else{
            return $this->redirect()->toUrl('/');
        }  
    }
    
    public function outAction(){
        SessionManager::destroy();
        return $this->redirect()->toRoute('auth');
    }
}