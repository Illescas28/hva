<?php

namespace Catalogos\Lugar\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Lugar\Form\LugarForm;

//// Filter ////
use Catalogos\Lugar\Filter\LugarFilter;

//// Propel ////
use Lugar;
use LugarQuery;
use BasePeer;


class LugarController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Intanciamos nuestro formulario
        $lugarForm = new LugarForm();
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro
            $lugarFilter = new LugarFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $lugarForm->setInputFilter($lugarFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $lugarForm->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($lugarForm->isValid()){
   
                //Instanciamos un nuevo objeto de nuestro objeto lugar
                $lugar = new Lugar();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Lugar
                foreach ($lugarForm->getData() as $lugarKey => $lugarValue){
                    $lugar->setByName($lugarKey, $lugarValue, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos
                $lugar->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Área de trabajo guardada exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('lugar');
                
            }else{
                var_dump($lugarForm->getMessages());   
            }
        }
        
        return new ViewModel(array(
            'lugarForm' => $lugarForm,
        ));

    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario lugarForm
        $lugarForm = new LugarForm();

        $lugarQuery = new LugarQuery();

        $result = $lugarQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();
        
        return new ViewModel(array(
            'lugars' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }

    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!LugarQuery::create()->filterByIdlugar($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('lugar', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro lugar
            $lugar = lugarQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $lugarForm = new LugarForm();
            
            //Le ponemos los datos de nuestro lugar a nuestro formulario
            $lugarForm->setData($lugar->toArray(BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
               
                //Instanciamos nuestro filtro
                $lugarFilter = new LugarFilter();

                //Le ponemos nuestro filtro a nuesto fromulario
                $lugarForm->setInputFilter($lugarFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $lugarForm->setData($request->getPost());
                
                //Validamos nuestro formulario
                if($lugarForm->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Lugar
                    foreach ($lugarForm->getData() as $lugarKey => $lugarValue){
                        $lugar->setByName($lugarKey, $lugarValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //Guardamos en nuestra base de datos
                    $lugar->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Área de trabajo modificada exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('lugar');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'lugarForm' => $lugarForm,
            ));
        

    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id lugar que se quiere eliminar exista
        if(!LugarQuery::create()->filterByIdlugar($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('lugar');
        }
        
        
            
            //Instanciamos nuestro lugar
            $lugar = LugarQuery::create()->findPk($id);
            
            $lugar->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Área de trabajo eliminada exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('lugar');
            
        

    }
}

