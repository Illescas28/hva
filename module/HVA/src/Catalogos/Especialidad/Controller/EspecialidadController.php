<?php

namespace Catalogos\Especialidad\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Especialidad\Form\EspecialidadForm;

//// Filter ////
use Catalogos\Especialidad\Filter\EspecialidadFilter;

//// Propel ////
use Especialidad;
use EspecialidadQuery;
use BasePeer;


class EspecialidadController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Intanciamos nuestro formulario
        $especialidadForm = new EspecialidadForm();
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro
            $especialidadFilter = new EspecialidadFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $especialidadForm->setInputFilter($especialidadFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $especialidadForm->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($especialidadForm->isValid()){
   
                //Instanciamos un nuevo objeto de nuestro objeto especialidad
                $especialidad = new Especialidad();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Especialidad
                foreach ($especialidadForm->getData() as $especialidadKey => $especialidadValue){
                    $especialidad->setByName($especialidadKey, $especialidadValue, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos
                $especialidad->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Especialidad guardada exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('especialidad');
                
            }else{
                
            }
        }
        
        return new ViewModel(array(
            'especialidadForm' => $especialidadForm,
        ));

    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario especialidadForm
        $especialidadForm = new EspecialidadForm();

        $especialidadQuery = new EspecialidadQuery();

        $result = $especialidadQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();
        

        return new ViewModel(array(
            'especialidades' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }

    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id especialidad que se quiere modificar exista
        if(!EspecialidadQuery::create()->filterByIdespecialidad($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('especialidad', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro especialidad
            $especialidad = especialidadQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $especialidadForm = new EspecialidadForm();
            
            //Le ponemos los datos de nuestro especialidad a nuestro formulario
            $especialidadForm->setData($especialidad->toArray(BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
               
                //Instanciamos nuestro filtro
                $especialidadFilter = new EspecialidadFilter();

                //Le ponemos nuestro filtro a nuesto fromulario
                $especialidadForm->setInputFilter($especialidadFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $especialidadForm->setData($request->getPost());
                
                //Validamos nuestro formulario
                if($especialidadForm->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Especialidad
                    foreach ($especialidadForm->getData() as $especialidadKey => $especialidadValue){
                        $especialidad->setByName($especialidadKey, $especialidadValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //Guardamos en nuestra base de datos
                    $especialidad->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Especialidad guardada exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('especialidad');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'especialidadForm' => $especialidadForm,
            ));
        

    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id especialidad que se quiere eliminar exista
        if(!EspecialidadQuery::create()->filterByIdespecialidad($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('especialidad');
        }
        
        
            
            //Instanciamos nuestro especialidad
            $especialidad = EspecialidadQuery::create()->findPk($id);
            
            $especialidad->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Especialidad eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('especialidad');
            
        

    }
}