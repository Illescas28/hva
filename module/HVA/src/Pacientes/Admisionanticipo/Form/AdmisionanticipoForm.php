<?php
namespace Pacientes\Admisionanticipo\Form;

use Zend\Form\Form;

class AdmisionanticipoForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('AdmisionanticipoForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idadmision',
            'type' => 'Text',
            'attributes' => array(
                'id' => 'idadmision'
            )
        ));

        $this->add(array(
            'name' => 'admisionanticipo_fecha',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha anticipo',
            ),
            'attributes' => array(
                'id' => 'admisionanticipo_fecha'
            )
        ));
        $this->add(array(
            'name' => 'admisionanticipo_cantidad',
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
                'id' => 'admisionanticipo_cantidad'
            )
        ));
        $this->add(array(
            'name' => 'admisionanticipo_nota',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nota',
            ),
            'attributes' => array(
                'id' => 'admisionanticipo_nota'
            )
        ));
        $this->add(array(
            'name' => 'admisionanticipo_tipo',
            'type' => 'Text',
            'options' => array(
                'label' => 'Tipo de pago',
            ),
            'attributes' => array(
                'id' => 'admisionanticipo_tipo'
            )
        ));
    }
}