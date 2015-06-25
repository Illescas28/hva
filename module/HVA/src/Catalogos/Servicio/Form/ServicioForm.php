<?php

namespace Catalogos\Servicio\Form;

use Zend\Form\Form;

class ServicioForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('ServicioForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'servicio_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre',
            ),
        ));
        $this->add(array(
            'name' => 'servicio_descripcion',
            'type' => 'textarea',
            'options' => array(
                'label' => 'Descripcion',
            ),
        ));
        
        $this->add(array(
            'name' => 'servicio_costo',
            'type' => 'Text',
            'options' => array(
                'label' => 'Costo',
            ),
        ));
        
        $this->add(array(
            'name' => 'servicio_precio',
            'type' => 'Text',
            'options' => array(
                'label' => 'Precio',
            ),
        ));
        
        $this->add(array(
            'name' => 'servicio_iva',
            'type' => 'Text',
            'options' => array(
                'label' => 'IVA',
            ),
        ));
        


    }
}