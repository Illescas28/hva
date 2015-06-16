<?php
namespace Pacientes\Paciente\Form;

use Zend\Form\Form;

class AdmisionanticipoForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('AdmisionanticipoForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idconsulta',
            'type' => 'Hidden',
        ));

        $this->add(array(
            'name' => 'admisionanticipo_fecha',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha de anticipo',
            ),
            'attributes' => array(
                'id' => 'fecha'
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
                'label' => 'Cantidad'
            )
        ));
        $this->add(array(
            'name' => 'admisionanticipo_nota',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nota',
            ),
        ));
    }
}