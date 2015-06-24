<?php

namespace Empleados\Form;

use Zend\Form\Form;

class RolForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('RolForm');
        $this->setAttribute('method', 'POST');

        $this->add(array(
            'name' => 'rol_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre *',
            ),
        ));
        $this->add(array(
            'name' => 'rol_descripcion',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'Descripción',
            ),
            'attributes' => array(
                'class' => 'materialize-textarea',
            ),
        ));
        
    }
}