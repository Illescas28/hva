<?php

namespace Catalogos\Cuarto\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Cuarto\Form\CuartoForm;

//// Filter ////
use Catalogos\Cuarto\Filter\CuartoFilter;

//// Propel ////
use Cuarto;
use CuartoQuery;
use BasePeer;


class CuartoController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Intanciamos nuestro formulario
        $cuartoForm = new CuartoForm();
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro
            $cuartoFilter = new CuartoFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $cuartoForm->setInputFilter($cuartoFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $cuartoForm->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($cuartoForm->isValid()){
   
                //Instanciamos un nuevo objeto de nuestro objeto cuarto
                $cuarto = new Cuarto();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Cuarto
                foreach ($cuartoForm->getData() as $cuartoKey => $cuartoValue){
                    $cuarto->setByName($cuartoKey, $cuartoValue, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos
                $cuarto->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Cuarto guardada exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('cuarto');
                
            }else{
                var_dump($cuartoForm->getMessages());   
            }
        }
        
        return new ViewModel(array(
            'cuartoForm' => $cuartoForm,
        ));

    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario cuartoForm
        $cuartoForm = new CuartoForm();

        $cuartoQuery = new CuartoQuery();

        $result = $cuartoQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();
        
        return new ViewModel(array(
            'cuartos' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }

    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id cuarto que se quiere modificar exista
        if(!CuartoQuery::create()->filterByIdcuarto($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('cuarto', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro cuarto
            $cuarto = cuartoQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $cuartoForm = new CuartoForm();
            
            //Le ponemos los datos de nuestro cuarto a nuestro formulario
            $cuartoForm->setData($cuarto->toArray(BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
               
                //Instanciamos nuestro filtro
                $cuartoFilter = new CuartoFilter();

                //Le ponemos nuestro filtro a nuesto fromulario
                $cuartoForm->setInputFilter($cuartoFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $cuartoForm->setData($request->getPost());
                
                //Validamos nuestro formulario
                if($cuartoForm->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Cuarto
                    foreach ($cuartoForm->getData() as $cuartoKey => $cuartoValue){
                        $cuarto->setByName($cuartoKey, $cuartoValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //Guardamos en nuestra base de datos
                    $cuarto->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Cuarto guardada exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('cuarto');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'cuartoForm' => $cuartoForm,
            ));
        

    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id cuarto que se quiere eliminar exista
        if(!CuartoQuery::create()->filterByIdcuarto($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('cuarto');
        }
        
        
            
            //Instanciamos nuestro cuarto
            $cuarto = CuartoQuery::create()->findPk($id);
            
            $cuarto->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Cuarto eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('cuarto');
            
        

    }
}

