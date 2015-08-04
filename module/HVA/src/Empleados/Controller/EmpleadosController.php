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
            $tmp['rol'] = $empleado->getRol()->getRolNombre();
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
                

                
                //La imagen
                if(!empty($_FILES)){
                    $date = new \DateTime();
                    $upload_folder ='/img/empleados/';
                    $tipo_archivo = $_FILES['empleado_imagen']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];   
                    $nombre_archivo = 'empleado-'.$date->getTimestamp().'.'.$tipo_archivo;
                    $tmp_archivo = $_FILES['empleado_imagen']['tmp_name'];
                    $archivador = $upload_folder.$nombre_archivo;
                    if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                        return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                    }    
                   $empleado->setEmpleadoImagen($archivador);
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
         
         //La imagen del empleado
         $empleado_imagen = $empleado->getEmpleadoImagen();
         if(is_null($empleado_imagen)){
             $empleado_imagen = '/img/empleados/default_profile.jpg';
         }
        
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
                    if($key == 'empleado_password' ){
                        if(!empty($value)){
                             $empleado->setByName($key, md5($value), \BasePeer::TYPE_FIELDNAME);
                        }
                       
                    }else{
                        $empleado->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }                      
                }

                //La imagen
                if(!empty($_FILES["empleado_imagen"]["name"])){

                    $date = new \DateTime();
                    $upload_folder ='/img/empleados/';
                    $tipo_archivo = $_FILES['empleado_imagen']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];   
                    $nombre_archivo = 'empleado-'.$date->getTimestamp().'.'.$tipo_archivo;
                    $tmp_archivo = $_FILES['empleado_imagen']['tmp_name'];
                    $archivador = $upload_folder.$nombre_archivo;
                    if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                        return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                    }
                    
                    //Tiene alguna imagen actualmente?
                    if(!is_null($empleado->getEmpleadoImagen())){
                        $empleado_imagen = $empleado->getEmpleadoImagen();
                        unlink($_SERVER["DOCUMENT_ROOT"].$empleado_imagen);
                    }
                    
                   $empleado->setEmpleadoImagen($archivador);
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
            'empleado_imagen' => $empleado_imagen,
        ));

    }
    
    public function eliminarimagenAction(){
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromQuery('id');
        
        $empleado = \EmpleadoQuery::create()->findPk($id);
        
        if(!is_null($empleado->getEmpleadoImagen())){
            $empleado_imagen = $empleado->getEmpleadoImagen();
            $empleado->setEmpleadoImagen(NULL);
            $empleado->save();
            unlink($_SERVER["DOCUMENT_ROOT"].$empleado_imagen);
            return true;
        }
        
        return false;
        
    }
    
    
}
