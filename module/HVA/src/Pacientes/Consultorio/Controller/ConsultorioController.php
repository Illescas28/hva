<?php

namespace Pacientes\Consultorio\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Pacientes\Consultorio\Form\ConsultorioForm;

//// Filter ////
use Pacientes\Consultorio\Filter\ConsultorioFilter;

//// Propel ////
use Consultorio;
use ConsultorioQuery;
use BasePeer;

class ConsultorioController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();

        //Intanciamos nuestro formulario
        $consultorioForm = new ConsultorioForm();
        
        if ($request->isPost()) { //Si hicieron POST
            
            $post_data = $request->getPost();
            
            //Instanciamos nuestro filtro
            $consultorioFilter = new ConsultorioFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $consultorioForm->setInputFilter($consultorioFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $consultorioForm->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($consultorioForm->isValid()){
                
                //Instanciamos un nuevo objeto de nuestro objeto Consultorio
                $consultorio = new Consultorio();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consultorio
                foreach ($consultorioForm->getData() as $consultorioKey => $consultorioValue){
                    $consultorio->setByName($consultorioKey, $consultorioValue, \BasePeer::TYPE_FIELDNAME);
                }
                
                if(isset($post_data["consultorio_enuso"])){
                        $consultorio->setConsultorioEnuso(1);
                    }else{
                        $consultorio->setConsultorioEnuso(0);
                    }
                
                //Guardamos en nuestra base de datos
                $consultorio->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Consultorio guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('consultorio');
                
            }
        }
        
        return new ViewModel(array(
            'consultorioForm' => $consultorioForm,
            
        ));

    }

    public function listarAction()
    {
        $consultorioQuery = new ConsultorioQuery();

        $result = $consultorioQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();
        

        return new ViewModel(array(
            'consultorios' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }

    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id consultorio que se quiere modificar exista
        if(!ConsultorioQuery::create()->filterByIdconsultorio($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('consultorio', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro consultorio
            $consultorio = ConsultorioQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $consultorioForm = new ConsultorioForm();
            
            //Le ponemos los datos de nuestro consultorio a nuestro formulario
            $consultorioForm->setData($consultorio->toArray(BasePeer::TYPE_FIELDNAME));

            if ($request->isPost()) { //Si hicieron POST
                $post_data = $request->getPost();

                //Instanciamos nuestro filtro
                $consultorioFilter = new ConsultorioFilter();

                //Le ponemos nuestro filtro a nuesto fromulario
                $consultorioForm->setInputFilter($consultorioFilter->getInputFilter());
                
                //Le ponemos los datos a nuestro formulario
                $consultorioForm->setData($request->getPost());
                
                //Validamos nuestro formulario
                if($consultorioForm->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consultorio
                    foreach ($consultorioForm->getData() as $consultorioKey => $consultorioValue){
                        $consultorio->setByName($consultorioKey, $consultorioValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    if(isset($post_data["consultorio_enuso"])){
                        $consultorio->setConsultorioEnuso(1);
                    }else{
                        $consultorio->setConsultorioEnuso(0);
                    }
                    

                    //Guardamos en nuestra base de datos
                    $consultorio->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Consultorio guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('consultorio');

                }else{
                   
                    echo '<pre>';var_dump($consultorioForm->getMessages()); echo '<pre>';exit();

                }  
            }

            return new ViewModel(array(
                'id'  => $id,
                'consultorioForm' => $consultorioForm,
                'consultorio_enuso' => $consultorio->getConsultorioEnuso(),
            ));
        

    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id consultorio que se quiere eliminar exista
        if(!ConsultorioQuery::create()->filterByIdconsultorio($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('consultorio');
        }

            //Instanciamos nuestro consultorio
            $consultorio = ConsultorioQuery::create()->findPk($id);
            
            $consultorio->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Consultorio eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('consultorio');
    }
}