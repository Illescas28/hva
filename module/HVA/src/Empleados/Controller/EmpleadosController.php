<?php

namespace Empleados\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class EmpleadosController extends AbstractActionController
{
    public function listarAction()
    {
        $empleadoCollection = \EmpleadoQuery::create()->find();
        $empleadoTable = array();
        foreach ($empleadoCollection as $empleado){
            $tmp['id'] = $empleado->getIdEmpleado();
            $tmp['nombre'] = $empleado->getEmpleadoNombre(). ' '. $empleado->getEmpleadoApellidopaterno(). ' '. $empleado->getEmpleadoApellidomaterno();
            $tmp['email'] = $empleado->getEmpleadoEmail();
            $tmp['usuario'] = $empleado->getEmpleadoNombreusuario();
            $empleadoTable[] = $tmp;
        }
        
        return new ViewModel(array(
            'empleados'         => $empleadoTable,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }
    
    public function nuevoAction(){
        
        
        //Roles disponibles
        $rolesCollection = \RolQuery::create()->find();
       
        $rolesArray = array();
        foreach ($rolesCollection as $rol){
            $rolesArray[$rol->getIdrol()] = $rol->getRolNombre();
        }
        
        $form = new \Empleados\Form\EmpleadoForm($rolesArray);
        
        $request = $this->getRequest();
        
        if ($request->isPost()) { //Si hicieron POST
            
            $post_data = $request->getPost();

            //filtro
            $filer = new \Empleados\Filter\EmpleadoFilter();
            
            $form->setInputFilter($filer->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $form->setData($request->getPost());
            
            //Validamos nuestro formulario de articulo
            if($form->isValid()){ 
                
                $empleado = new \Empleado();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Articulo
                foreach ($form->getData() as $key => $value){
                    if($key == 'empleado_password'){
                        $empleado->setByName($key, md5($value), \BasePeer::TYPE_FIELDNAME);
                    }else{
                        $empleado->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }
                
                $empleado->save();

                if(!$empleado->isPrimaryKeyNull()){ //Ya se guardo y por lo tanto tiene un pk
          
                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Empleado guardado exitosamente!');
                
                    //Redireccionamos a nuestro list
                    $this->redirect()->toRoute('empleados');
                    
                    
                }
                
                
            }

        }
        
        return new ViewModel(array(
            'form' => $form,
            'modulos' => $modulos,
        ));
    }
    
    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id articulo que se quiere eliminar exista
        if(!\EmpleadoQuery::create()->filterByIdempleado($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('empleados');
        }
        

            //Instanciamos nuestro articulo
            $articulo = \EmpleadoQuery::create()->findPk($id);
            
            $articulo->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Empleado eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('empleados');

    }
    
    public function editarAction(){
       
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id articulo que se quiere modificar exista
        if(!\RolQuery::create()->filterByIdrol($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('empleados', array(
                'action' => 'nuevo'
            ));
        }
        
         $request = $this->getRequest();
         
         $empleado = \EmpleadoQuery::create()->findPk($id);
         
         //Roles disponibles
         $rolesCollection = \RolQuery::create()->find();
       
         $rolesArray = array();
         foreach ($rolesCollection as $rol){
            $rolesArray[$rol->getIdrol()] = $rol->getRolNombre();
         }

         
         $form = new \Empleados\Form\EmpleadoForm($rolesArray);
         
         //Le ponemos los datos de nuestro articulo a nuestro formulario
         $form->setData($empleado->toArray(\BasePeer::TYPE_FIELDNAME));
        
         if ($request->isPost()) { //Si hicieron POST
             
             $post_data = $request->getPost();
             
             $filter = new \Empleados\Filter\EmpleadoFilter();
             
             $form->setInputFilter($filter->getInputFilter());
             
             //Le ponemos los datos a nuestro formulario
             $form->setData($request->getPost());
             
             //Validamos nuestro formulario de articulo
             if($form->isValid()){
                 
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Articulo
                foreach ($form->getData() as $key => $value){
                    $empleado->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);                      
                }
               
                
                $empleado->save();
                
                    
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Empleado modifcado exitosamente!');

                //Redireccionamos a nuestro list
                $this->redirect()->toRoute('empleados');

             }
             
             
         }
         
         
         return new ViewModel(array(
            'id'  => $id,
            'form' => $form,
        ));
         
         
         
         
        
        
        
    }
}
