<?php

namespace Catalogos\Especialidad\Form;

use Zend\Form\Form;

class EspecialidadForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('EspecialidadForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'especialidad_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre *',
            ),
        ));
        $this->add(array(
            'name' => 'especialidad_descripcion',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'Descripcion',
            ),
        ));

    }
}