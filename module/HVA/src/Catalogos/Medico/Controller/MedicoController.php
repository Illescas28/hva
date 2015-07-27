<?php

namespace Catalogos\Medico\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Medico\Form\MedicoForm;

//// Filter ////
use Catalogos\Medico\Filter\MedicoFilter;

//// Propel ////
use Medico;
use MedicoQuery;
use BasePeer;
use EspecialidadQuery;

class MedicoController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Almacenamos en un arreglo todas las especialidades
        $especialidadCollection = \EspecialidadQuery::create()->find();
        $especialidadArray = array();
        foreach ($especialidadCollection as $especialidad){
            $especialidadArray[$especialidad->getIdespecialidad()] = $especialidad->getEspecialidadNombre();
        }
        
        //Intanciamos nuestro formulario
        $medicoForm = new MedicoForm($especialidadArray);
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro
            $medicoFilter = new MedicoFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $medicoForm->setInputFilter($medicoFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $medicoForm->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($medicoForm->isValid()){
                
                //Instanciamos un nuevo objeto de nuestro objeto Medico
                $medico = new Medico();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Medico
                foreach ($medicoForm->getData() as $medicoKey => $medicoValue){
                    $medico->setByName($medicoKey, $medicoValue, \BasePeer::TYPE_FIELDNAME);
                }
                         
                //Guardamos en nuestra base de datos
                $medico->save();
                
                //Verificamos si el perfil esta competo
                $perfilcompleto = true;
                $excludedColumns = array('medico_perfilcompleto','medico_nointerior','medico_fotografia');
                foreach ($medico->toArray(BasePeer::TYPE_FIELDNAME) as $key => $value){
                    if(empty($value) && !in_array($key, $excludedColumns)){
                        $perfilcompleto = false;
                    }    
                }
                $medico->setMedicoPerfilcompleto($perfilcompleto);
                $medico->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Medico guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('medico');
                
            }
            var_dump($medicoForm->getMessages());
        }
        
        return new ViewModel(array(
            'medicoForm' => $medicoForm,
        ));

    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario medicoForm
        $medicoForm = new MedicoForm();

        $medicoQuery = new MedicoQuery();

        $result = $medicoQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();
        

        return new ViewModel(array(
            'medicos' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }

    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id medico que se quiere modificar exista
        if(!MedicoQuery::create()->filterByIdmedico($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('medico', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro medico
            $medico = MedicoQuery::create()->findPk($id);
            
            //Almacenamos en un arreglo todas las especialidades
            $especialidadCollection = \EspecialidadQuery::create()->find();
            $especialidadArray = array();
            foreach ($especialidadCollection as $especialidad){
                $especialidadArray[$especialidad->getIdespecialidad()] = $especialidad->getEspecialidadNombre();
            }
            
            //Instanciamos nuestro formulario
            $medicoForm = new MedicoForm($especialidadArray);
            
            //Le ponemos los datos de nuestro medico a nuestro formulario
            $medicoForm->setData($medico->toArray(BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
               
                //Instanciamos nuestro filtro
                $medicoFilter = new MedicoFilter();

                //Le ponemos nuestro filtro a nuesto fromulario
                $medicoForm->setInputFilter($medicoFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $medicoForm->setData($request->getPost());
                
                //Validamos nuestro formulario
                if($medicoForm->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Medico
                    foreach ($medicoForm->getData() as $medicoKey => $medicoValue){
                        $medico->setByName($medicoKey, $medicoValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //Guardamos en nuestra base de datos
                    $medico->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Medico guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('medico');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'medicoForm' => $medicoForm,
            ));
        

    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id medico que se quiere eliminar exista
        if(!MedicoQuery::create()->filterByIdmedico($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('medico');
        }
        
        
            
            //Instanciamos nuestro medico
            $medico = MedicoQuery::create()->findPk($id);
            
            $medico->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Medico eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('medico');
    }
    
    public  function getmedicosAction(){
        $collection = MedicoQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        
        $autcomplete = array();
        
        foreach ($collection as $entity){
            $tmp['value'] = $entity["idmedico"];
            $tmp['label'] = $entity["medico_nombre"].' '.$entity['medico_apellidopaterno'].' '.$entity['medico_apellidomaterno'];
            $conceptos_autcomplete[] = $tmp;
        }
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($conceptos_autcomplete));
    }
}