<?php

namespace Catalogos\UDM\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\UDM\Form\UDMForm;

//// Filter ////
use Catalogos\UDM\Filter\UDMFilter;

//// Propel ////
use UDM;
use UDMQuery;
use BasePeer;

class UDMController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();
               
        //Intanciamos nuestro formulario de UDM
        $udmForm = new UDMForm();
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro de udm
            $udmFilter = new UDMFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $udmForm->setInputFilter($udmFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $udmForm->setData($request->getPost());

            //Validamos nuestro formulario de udm
            if($udmForm->isValid()){ 
                
                //Instanciamos un nuevo objeto de nuestro objeto UDM
                $udm = new \Udm();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto UDM
                foreach ($udmForm->getData() as $udmKey => $udmValue){
                    $udm->setByName($udmKey, $udmValue, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos UDM
                $udm->save();

                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Unidad de medida guardada exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('udm');
                
            }
            
        }
        
        return new ViewModel(array(
            'udmForm' => $udmForm,
        ));

    }

    public function listarAction()
    {
        $udmQuery = new \UdmQuery();

        $result = $udmQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();
        
        //Verificamos si el producto tiene porpiedades
        
        return new ViewModel(array(
            'udms' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }

    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id udm que se quiere modificar exista
        if(!\UdmQuery::create()->filterByIdudm($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('udm', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro udm
            $udm = UdmQuery::create()->findPk($id);

            //Instanciamos nuestro formulario
            $udmForm = new UDMForm();
            
            //Le ponemos los datos de nuestro udm a nuestro formulario
            $udmForm->setData($udm->toArray(BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
               
                //Instanciamos nuestro filtro de udm
                $udmFilter = new UDMFilter();
                
                //Le ponemos nuestro filtro a nuesto fromulario
                $udmForm->setInputFilter($udmFilter->getInputFilter());
                
                //Le ponemos los datos a nuestro formulario
                $udmForm->setData($request->getPost());
                
                //Validamos nuestro formulario de udm
                if($udmForm->isValid()){
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto UDM
                    foreach ($udmForm->getData() as $udmKey => $udmValue){
                        
                        $udm->setByName($udmKey, $udmValue, \BasePeer::TYPE_FIELDNAME);
                       
                    }
                    
                    //Guardamos en nuestra base de datos UDM
                    $udm->save();


                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Unidad de medida modificada exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('udm');
                    
                }else{

                }

            }
            return new ViewModel(array(
                'id'  => $id,
                'udmForm' => $udmForm,
            ));
        

    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id udm que se quiere eliminar exista
        if(!\UdmQuery::create()->filterByIdudm($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('udm');
        }
        

            //Instanciamos nuestro udm
            $udm = UdmQuery::create()->findPk($id);
            
            $udm->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Unidad de medida eliminada exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('udm');

    }
}