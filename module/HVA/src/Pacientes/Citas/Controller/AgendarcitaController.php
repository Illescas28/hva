<?php

namespace Pacientes\Citas\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Pacientes\Citas\Form\CitasForm;

class AgendarcitaController extends AbstractActionController
{
    public function listarAction()
    {
       
        $collection = \PacienteQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        return new ViewModel(array(
            'collection'   => $collection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }
    
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();

            $cita_hora = date("H:i",strtotime($post_data['cita_hora']));
            
            $cita = new \Cita();
            $cita
                 ->setIdpaciente($post_data['idpaciente'])
                 ->setCitaFecha($post_data['cita_fecha_submit'])
                 ->setCitaHora($cita_hora)
                 ->setCitaDescripcion($post_data['cita_descripcion']);
            
            if(!empty($post_data['idmedico'])){

                $cita->setIdmedico($post_data['idmedico']);
                
                
                $citasCollection = \CitaQuery::create()->filterByIdmedico($post_data['idmedico'])->filterByCitaFecha($post_data['cita_fecha_submit'])->find();
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
                    return $this->redirect()->toUrl('/pacientes/agendarcita/nuevo/'.$post_data['idpaciente']);
                }else{
                    $cita->save();
                    
                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Cita Agendada exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('citas');
                } 
            }else{
                $cita->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Cita Agendada exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('citas');
                
            }
  
        }
   
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        $paciente = \PacienteQuery::create()->findPk($id)->toArray(\BasePeer::TYPE_FIELDNAME);
        $medicos = \MedicoQuery::create()->find();
        $medicos_array = array();
        if(!empty($medicos)){
            foreach ($medicos as $medico){
                $idmedico = $medico->getIdmedico();
                $medicos_array[$idmedico] = $medico->getMedicoNombre().' '.$medico->getMedicoApellidopaterno().' '.$medico->getMedicoApellidomaterno(); 
            }
        }

        //Instanciamos nuestro fomrulario
        $form = new CitasForm($medicos_array);
        
        $form->get('idpaciente')->setValue($id);

        $collection = \PacienteQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        return new ViewModel(array(
            'paciente' => $paciente,
            'form'   => $form,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));

    }
  
}
