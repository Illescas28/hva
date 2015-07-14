<?php

namespace Empleados\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class RolesController extends AbstractActionController
{
    public function listarAction()
    {
        $rolCollection = \RolQuery::create()->find();
        $rolTable = array();
        $r = new \Rolmodulo();        
        foreach ($rolCollection as $rol){
            $tmp['id'] = $rol->getIdRol();
            $tmp['nombre'] = $rol->getRolNombre();
            $tmp['descripcion'] = $rol->getRolDescripcion();
            $tmp['modulos'] = '';
            $moduloCollection = $rol->getRolmodulos();
            $moduloCount = count($moduloCollection->toArray()); $count = 1;
            foreach ($moduloCollection as $modulo){
                $tmp['modulos'].= $modulo->getModulo()->getModuloNombre();
                if($count<$moduloCount){
                    $tmp['modulos'].=' - ';
                }
                $count ++;
            }
            $rolTable[] = $tmp;
        }
        
        return new ViewModel(array(
            'roles'         => $rolTable,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }
    
    public function nuevoAction(){
        
        $form = new \Empleados\Form\RolForm();
        
        //Modulos disponibles
        $modulosCollection = \ModuloQuery::create()->find();
        $modulos = array();
        foreach ($modulosCollection as $modulo){
            $modulos[$modulo->getIdmodulo()] = $modulo->getModuloNombre();
        }
        
        $request = $this->getRequest();
        
        if ($request->isPost()) { //Si hicieron POST
            
            $post_data = $request->getPost();

            //filtro
            $filer = new \Empleados\Filter\RolFilter();
            
            $form->setInputFilter($filer->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $form->setData($request->getPost());
            
            //Validamos nuestro formulario de articulo
            if($form->isValid()){ 
                
                $rol = new \Rol();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Articulo
                foreach ($form->getData() as $key => $value){
                    $rol->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                
                $rol->save();

                if(!$rol->isPrimaryKeyNull()){ //Ya se guardo y por lo tanto tiene un pk
                    
                 //Si asignaron modulos
                    if(isset($post_data["modulos"])){
                        
                        foreach ($post_data["modulos"] as $idmodulo ){
                            $rolmodulo = new \Rolmodulo();
                            $rolmodulo->setIdrol($rol->getIdrol());
                            $rolmodulo->setIdmodulo($idmodulo);
                            $rolmodulo->save();
                        }
                        
                    }
                    
                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Rol guardado exitosamente!');
                
                    //Redireccionamos a nuestro list
                    $this->redirect()->toRoute('empleados-roles');
                    
                    
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
        if(!\RolQuery::create()->filterByIdrol($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('empleados-roles');
        }
        

            //Instanciamos nuestro articulo
            $articulo = \RolQuery::create()->findPk($id);
            
            $articulo->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Rol eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('empleados-roles');

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
            return $this->redirect()->toRoute('empleados-roles', array(
                'action' => 'nuevo'
            ));
        }
        
         $request = $this->getRequest();
         
         $rol = \RolQuery::create()->findPk($id);
         
         //Modulos disponibles
         $modulosCollection = \ModuloQuery::create()->find();
         $all_modulos = array();
         foreach ($modulosCollection as $modulo){
            $all_modulos[$modulo->getIdmodulo()] = $modulo->getModuloNombre();
         }
         
         $modulos = $rol->getRolmodulos()->toArray();
         
         $form = new \Empleados\Form\RolForm();
         
         //Le ponemos los datos de nuestro articulo a nuestro formulario
         $form->setData($rol->toArray(\BasePeer::TYPE_FIELDNAME));
         
         if ($request->isPost()) { //Si hicieron POST
             
             $post_data = $request->getPost();
             
             $filter = new \Empleados\Filter\RolFilter();
             
             $form->setInputFilter($filter->getInputFilter());
             
             //Le ponemos los datos a nuestro formulario
             $form->setData($request->getPost());
             
             //Validamos nuestro formulario de articulo
             if($form->isValid()){
                 
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Articulo
                foreach ($form->getData() as $key => $value){
                    $rol->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);                      
                }
                
                $rol->save();
                
                //Los modulos los eliminamos
                foreach ($modulos as $modulo){
                    $rolmodulo = \RolmoduloQuery::create()->findPk($modulo['Idrolmodulo']);
                    $rolmodulo->delete();
                }
                
                if(isset($post_data["modulos"])){
                        
                    foreach ($post_data["modulos"] as $idmodulo ){
                        $rolmodulo = new \Rolmodulo();
                        $rolmodulo->setIdrol($rol->getIdrol());
                        $rolmodulo->setIdmodulo($idmodulo);
                        $rolmodulo->save();
                    }
                        
                }
                    
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Rol modifcado exitosamente!');

                //Redireccionamos a nuestro list
                $this->redirect()->toRoute('empleados-roles');

             }
             
             
         }
         
         
         return new ViewModel(array(
            'id'  => $id,
            'form' => $form,
            'modulos' => json_encode($modulos),
            'all_modulos' => $all_modulos,
        ));
         
         
         
         
        
        
        
    }
}
