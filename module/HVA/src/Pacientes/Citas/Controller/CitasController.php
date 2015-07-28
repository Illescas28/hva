<?php

namespace Pacientes\Citas\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Pacientes\Citas\Form\CitasForm;

class CitasController extends AbstractActionController
{
    public function listarAction()
    {

        $collection = \CitaQuery::create()->joinMedico()
                                          ->withColumn('medico_nombre')
                                          ->withColumn('medico_apellidopaterno')
                                          ->withColumn('medico_apellidomaterno')
                                          ->joinPaciente()
                                          ->withColumn('paciente_nombre')
                                          ->withColumn('paciente_ap')
                                          ->withColumn('paciente_am')
                                          ->orderBy('idcita', 'desc')
                                          ->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
      
        return new ViewModel(array(
            'collection'   => $collection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }
    
    public function nuevoAction()
    {
        
        $medicos = \MedicoQuery::create()->find();
        $medicos_array = array();
        if(!empty($medicos)){
            foreach ($medicos as $medico){
                $idmedico = $medico->getIdmedico();
                $tmp[$idmedico] = $medico->getMedicoNombre().' '.$medico->getMedicoApellidopaterno().' '.$medico->getMedicoApellidomaterno(); 
                $medicos_array[] = $tmp;
            }
        }
        //Instanciamos nuestro fomrulario
        $form = new CitasForm($medicos_array);
        
        
        $collection = \PacienteQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        return new ViewModel(array(
            'form'   => $form,
        ));
        
        
    }
    
    public function editarAction()
    {
        
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!\CitaQuery::create()->filterByIdcita($id)->exists()){
            $id =0;
        }   
        
        //Instanciamos cita
        $entity = \CitaQuery::create()->findPk($id);
        
        $medicos = \MedicoQuery::create()->find();
        $medicos_array = array();
        if(!empty($medicos)){
            foreach ($medicos as $medico){
                $idmedico = $medico->getIdmedico();
                $medicos_array[$idmedico] = $medico->getMedicoNombre().' '.$medico->getMedicoApellidopaterno().' '.$medico->getMedicoApellidomaterno(); 
            }
        }
        
        //Instanciamos nuestro formulario
        $form = new CitasForm($medicos_array);
        
        $cita_array = $entity->toArray(\BasePeer::TYPE_FIELDNAME);
        $cita_fecha = new \DateTime($cita_array['cita_fecha']);
        $time_in_12_hour_format  = date("g:i A", strtotime($cita_array['cita_hora']));
        
        $cita_array['cita_fecha'] = $cita_fecha->format('d-m-Y');
        $cita_array['cita_hora'] = $time_in_12_hour_format;
        
        //Le ponemos los datos de nuestro lugar a nuestro formulario
        $form->setData($cita_array);
        
        $paciente = $entity->getPaciente()->toArray(\BasePeer::TYPE_FIELDNAME);
        
        if ($request->isPost()) { //Si hicieron POST
             $post_data = $request->getPost();
             
             $cita_hora = date("H:i",strtotime($post_data['cita_hora']));
             
             $entity
                 ->setIdpaciente($post_data['idpaciente'])
                 ->setCitaFecha($post_data['cita_fecha_submit'])
                 ->setCitaHora($cita_hora)
                 ->setCitaDescripcion($post_data['cita_descripcion']);
             
            
             if(!empty($post_data['idmedico'])){
                  $entity->setIdmedico($post_data['idmedico']);
                if( $entity->isColumnModified(\CitaPeer::CITA_FECHA) || $entity->isColumnModified(\CitaPeer::CITA_HORA)){
                    
                    $citasCollection = \CitaQuery::create()->filterByIdmedico($post_data['idmedico'])->filterByCitaFecha($post_data['cita_fecha_submit'])->filterByIdcita($id, \Criteria::NOT_EQUAL)->find();
                    
                    $disponibilidad = true;
                    foreach ($citasCollection as $citaEntity){
                         $time = strtotime($citaEntity->getCitaHora());
                         $endTime = date("H:i", strtotime('+10 minutes', $time));
                         if(strtotime($cita_hora) >= $time && strtotime($cita_hora) <= strtotime('+10 minutes', $time)){
                             $disponibilidad = false;
                            
                         }
                    }
                    if(!$disponibilidad){
                        //Agregamos un mensaje
                        $medico = \MedicoQuery::create()->findPk($post_data['idmedico']);
                        $this->flashMessenger()->addMessage('Los sentimos, pero el medico '.$medico->getMedicoNombre().' '.$medico->getMedicoApellidopaterno().' '.$medico->getMedicoApellidomaterno().' no tiene disponibilidad para la fecha y hora seleccionada');
                        return $this->redirect()->toUrl('/pacientes/citas/editar/'.$id);
                    }else{
                        $entity->save();

                        //Agregamos un mensaje
                        $this->flashMessenger()->addMessage('Cita modificada exitosamente!');

                        //Redireccionamos a nuestro list
                        return $this->redirect()->toRoute('citas');
                    } 
                }else{
                    $entity->save();

                        //Agregamos un mensaje
                        $this->flashMessenger()->addMessage('Cita modificada exitosamente!');

                        //Redireccionamos a nuestro list
                        return $this->redirect()->toRoute('citas');
                }             
            }else{
                $entity->setIdmedico(NULL);
                $entity->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Cita modificada exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('citas');
                
            }
        }
        
        return new ViewModel(array(
            'id'  => $id,
            'form' => $form,
            'paciente' => $paciente,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        

       
    }
    
    
    public function eliminarAction()
    {
        
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!\CitaQuery::create()->filterByIdcita($id)->exists()){
            $id =0;
        }
        
            //Instanciamos nuestro lugar
            $entity = \CitaQuery::create()->findPk($id);
            
            $entity->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Cita eliminada exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('citas');

    }
  
}
