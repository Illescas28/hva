<?php

namespace Catalogos\Cuarto\Form;

use Zend\Form\Form;

class CuartoForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('CuartoForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'cuarto_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre *',
            ),
            'attributes' => array(
                'required' => 'required'
            ),
        ));
        $this->add(array(
            'name' => 'cuarto_descripcion',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'Descripcion',
            ),
        ));
        
        $this->add(array(
            'name' => 'cuarto_enuso',
            'type' => 'Checkbox',
            'options' => array(
                'label' => '¿En uso?',
            ),
        ));
        
        $this->add(array(
            'name' => 'cuarto_extension',
            'type' => 'text',
            'options' => array(
                'label' => 'Extension',
            ),
        ));

    }
}