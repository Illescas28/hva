<?php

namespace Pacientes\Servicio\Form;

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
            'attributes' => array(
                'required' => 'required',
            ),
        ));
        $this->add(array(
            'name' => 'servicio_descripcion',
            'type' => 'Text',
            'options' => array(
                'label' => 'Descripción',
            ),
            'attributes' => array(
                'required' => 'required',
            ),
        ));
        $this->add(array(
            'name' => 'servicio_precio',
            'required' => true,
            'validators' => array(
                array(
                    'name' => 'Float',
                    'options' => array(
                        'min' => 0,
                        'locale' => 'es_MX',
                    ),
                ),
            ),
            'options' => array(
                'label' => 'Precio'
            ),
            'attributes' => array(
                'required' => 'required',
            ),
        ));
        $this->add(array(
            'name' => 'servicio_iva',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Status',
                'empty_option' => 'Seleccione impuesto',
                'value_options' => array('0' => '0','16' => '16'),
            ),
            'attributes' => array(
                'id' => 'servicio_iva',
                 'required' => 'required',
            )
        ));
    }
}