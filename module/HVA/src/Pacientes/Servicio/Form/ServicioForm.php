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
        ));
        $this->add(array(
            'name' => 'servicio_descripcion',
            'type' => 'Text',
            'options' => array(
                'label' => 'Descripción',
            ),
        ));
        $this->add(array(
            'name' => 'servicio_costo',
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
                'label' => 'Costo'
            )
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
            )
        ));
        $this->add(array(
            'name' => 'servicio_iva',
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
                'label' => 'IVA'
            )
        ));
    }
}