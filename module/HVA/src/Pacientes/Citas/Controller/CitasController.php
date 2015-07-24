<?php

namespace Pacientes\Citas\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Pacientes\Citas\Form\CitasForm;

class CitasController extends AbstractActionController
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
  
}
