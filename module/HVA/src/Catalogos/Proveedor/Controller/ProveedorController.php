<?php

namespace Catalogos\Proveedor\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Proveedor\Form\ProveedorForm;

//// Filter ////
use Catalogos\Proveedor\Filter\ProveedorFilter;

//// Propel ////
use Proveedor;
use ProveedorQuery;
use BasePeer;


class ProveedorController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Intanciamos nuestro formulario
        $proveedorForm = new ProveedorForm();
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro
            $proveedorFilter = new ProveedorFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $proveedorForm->setInputFilter($proveedorFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $proveedorForm->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($proveedorForm->isValid()){
   
                //Instanciamos un nuevo objeto de nuestro objeto proveedor
                $proveedor = new Proveedor();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Proveedor
                foreach ($proveedorForm->getData() as $proveedorKey => $proveedorValue){
                    $proveedor->setByName($proveedorKey, $proveedorValue, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos
                $proveedor->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Proveedor guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('proveedor');
                
            }else{
                var_dump($proveedorForm->getMessages());   
            }
        }
        
        return new ViewModel(array(
            'proveedorForm' => $proveedorForm,
        ));

    }

    public function listarAction()
    {
        $dataCollection = \ProveedorQuery::create()->filterByIdproveedor(1,\Criteria::NOT_EQUAL)->find();
        
        return new ViewModel(array(
            'proveedores' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }

    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id proveedor que se quiere modificar exista
        if(!ProveedorQuery::create()->filterByIdproveedor($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('proveedor', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro proveedor
            $proveedor = proveedorQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $proveedorForm = new ProveedorForm();
            
            //Le ponemos los datos de nuestro proveedor a nuestro formulario
            $proveedorForm->setData($proveedor->toArray(BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
               
                //Instanciamos nuestro filtro
                $proveedorFilter = new ProveedorFilter();

                //Le ponemos nuestro filtro a nuesto fromulario
                $proveedorForm->setInputFilter($proveedorFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $proveedorForm->setData($request->getPost());
                
                //Validamos nuestro formulario
                if($proveedorForm->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Proveedor
                    foreach ($proveedorForm->getData() as $proveedorKey => $proveedorValue){
                        $proveedor->setByName($proveedorKey, $proveedorValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //Guardamos en nuestra base de datos
                    $proveedor->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Proveedor modificado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('proveedor');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'proveedorForm' => $proveedorForm,
            ));
        

    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id proveedor que se quiere eliminar exista
        if(!ProveedorQuery::create()->filterByIdproveedor($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('proveedor');
        }
        
        
            
            //Instanciamos nuestro proveedor
            $proveedor = ProveedorQuery::create()->findPk($id);
            
            $proveedor->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Proveedor eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('proveedor');
            
        

    }
    
    public function getproveedoresAction(){
        
        $collection = \ProveedorQuery::create()->filterByIdproveedor(1,\Criteria::NOT_EQUAL)->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        
        $autcomplete = array();
        
        foreach ($collection as $entity){
            $tmp['value'] = $entity["idproveedor"];
            $tmp['label'] = $entity["proveedor_nombre"];
            $conceptos_autcomplete[] = $tmp;
        }
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($conceptos_autcomplete));
        
        
    }
}

