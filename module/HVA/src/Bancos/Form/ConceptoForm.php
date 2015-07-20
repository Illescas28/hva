<?php

namespace Bancos\Form;

use Zend\Form\Form;

class ConceptoForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('ConceptoForm');
        $this->setAttribute('method', 'POST');
        
        $this->add(array(
            'name' => 'bancotransaccion_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre *',
            ),
        ));
        
        $this->add(array(
            'name' => 'bancotransaccion_descripcion',
            'type' => 'Text',
            'options' => array(
                'label' => 'Descripción ',
            ),
        ));

    }
}