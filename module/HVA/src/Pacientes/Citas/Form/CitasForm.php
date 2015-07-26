<?php

namespace Pacientes\Citas\Form;

use Zend\Form\Form;

class CitasForm extends Form
{
    public function __construct(array $medicos)
    {
        // we want to ignore the name passed
        parent::__construct('EmpleadoForm');
        $this->setAttribute('method', 'POST');
        
        $this->add(array(
            'name' => 'idpaciente',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'type' => 'Select',
            'name' => 'idmedico',
            'options' => array(
                'label' => 'Medico',
                'empty_option' => 'Seleccione medico',
                'value_options' => $medicos
            ),
        ));

        $this->add(array(
            'name' => 'cita_fecha',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha *',
            ),
        ));
        
        $this->add(array(
            'name' => 'cita_hora',
            'type' => 'Text',
            'options' => array(
                'label' => 'Hora *',
            ),
        ));
        
        $this->add(array(
            'name' => 'cita_descripcion',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'Nota *',
            ),
            'attributes' => array(
                'class' => 'materialize-textarea',
            ),
        ));
 
    }
}