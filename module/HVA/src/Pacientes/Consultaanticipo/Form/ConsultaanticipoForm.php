<?php
namespace Pacientes\Consultaanticipo\Form;

use Zend\Form\Form;

class ConsultaanticipoForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('ConsultaanticipoForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idconsulta',
            'type' => 'Text',
            'attributes' => array(
                'id' => 'idconsulta'
            )
        ));

        $this->add(array(
            'name' => 'consultaanticipo_fecha',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha anticipo',
            ),
            'attributes' => array(
                'id' => 'consultaanticipo_fecha'
            )
        ));
        $this->add(array(
            'name' => 'consultaanticipo_cantidad',
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
                'label' => 'Catidad'
            ),
            'attributes' => array(
                'id' => 'consultaanticipo_cantidad'
            )
        ));
        $this->add(array(
            'name' => 'consultaanticipo_nota',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nota',
            ),
            'attributes' => array(
                'id' => 'consultaanticipo_nota'
            )
        ));
    }
}