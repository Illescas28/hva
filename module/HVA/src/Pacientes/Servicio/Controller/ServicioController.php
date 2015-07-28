<?php

namespace Pacientes\Servicio\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Pacientes\Servicio\Form\ServicioForm;

//// Filter ////
use Pacientes\Servicio\Filter\ServicioFilter;

//// Propel ////
use Servicio;
use ServicioQuery;
use BasePeer;

class ServicioController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();

        //Intanciamos nuestro formulario
        $servicioForm = new ServicioForm();
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro
            $servicioFilter = new ServicioFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $servicioForm->setInputFilter($servicioFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $servicioForm->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($servicioForm->isValid()){
                
                //Instanciamos un nuevo objeto de nuestro objeto Servicio
                $servicio = new Servicio();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Servicio
                foreach ($servicioForm->getData() as $servicioKey => $servicioValue){
                    $servicio->setByName($servicioKey, $servicioValue, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos
                $servicio->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Servicio guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('servicio');
                
            }
        }
        
        return new ViewModel(array(
            'servicioForm' => $servicioForm,
        ));

    }

    public function listarAction()
    {
        $servicioQuery = new ServicioQuery();

        $result = $servicioQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();
        

        return new ViewModel(array(
            'servicios' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }

    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id servicio que se quiere modificar exista
        if(!ServicioQuery::create()->filterByIdservicio($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('servicio', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro servicio
            $servicio = ServicioQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $servicioForm = new ServicioForm();
            
            //Le ponemos los datos de nuestro servicio a nuestro formulario
            $servicioForm->setData($servicio->toArray(BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
               
                //Instanciamos nuestro filtro
                $servicioFilter = new ServicioFilter();

                //Le ponemos nuestro filtro a nuesto fromulario
                $servicioForm->setInputFilter($servicioFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $servicioForm->setData($request->getPost());
                
                //Validamos nuestro formulario
                if($servicioForm->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Servicio
                    foreach ($servicioForm->getData() as $servicioKey => $servicioValue){
                        $servicio->setByName($servicioKey, $servicioValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //Guardamos en nuestra base de datos
                    $servicio->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Servicio guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('servicio');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'servicioForm' => $servicioForm,
            ));

    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id servicio que se quiere eliminar exista
        if(!ServicioQuery::create()->filterByIdservicio($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('servicio');
        }

            //Instanciamos nuestro servicio
            $servicio = ServicioQuery::create()->findPk($id);
            
            $servicio->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Servicio eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('servicio');
    }
}