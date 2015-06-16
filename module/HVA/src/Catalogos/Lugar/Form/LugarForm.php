<?php

namespace Catalogos\Lugar\Form;

use Zend\Form\Form;

class LugarForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('LugarForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'lugar_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre *',
            ),
        ));
        $this->add(array(
            'name' => 'lugar_descripcion',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'Descripcion',
            ),
        ));
        

    }
}