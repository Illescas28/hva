<?php

namespace Pacientes\Consultorio\Form;

use Zend\Form\Form;

class ConsultorioForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('ConsultorioForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'consultorio_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre *',
            ),
            'attributes' => array(
                'required' => 'required'
            ),
        ));
        $this->add(array(
            'name' => 'consultorio_descripcion',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'Descripción',
            ),
        ));
        
   
        $this->add(array(
            'name' => 'consultorio_extension',
            'type' => 'text',
            'options' => array(
                'label' => 'Extensión',
            ),
        ));

    }
}