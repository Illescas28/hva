<?php
namespace Pacientes\Paciente\Form;

use Zend\Form\Form;

class CargoadmisionForm extends Form
{
    public function __construct(array $medico = null, array $cuarto = null)
    {
        // we want to ignore the name passed
        parent::__construct('CargoadmisionForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idadmision',
            'type' => 'Text',
        ));
        $this->add(array(
            'name' => 'idlugarinventario',
            'type' => 'Text',
        ));
        $this->add(array(
            'name' => 'idservicio',
            'type' => 'Text',
        ));
        $this->add(array(
            'name' => 'cargoadmision_tipo',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Seleccione su estado civil',
                'value_options' => array('articulo' => 'articulo','servicio' => 'servicio'),
            ),
        ));
        $this->add(array(
            'name' => 'cargoadmision_fecha',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha',
            ),
            'attributes' => array(
                'id' => 'fecha'
            )
        ));
        $this->add(array(
            'name' => 'cargoadmision_cantidad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Cantidad',
            ),
        ));
        $this->add(array(
            'name' => 'cargoadmision_monto',
            'type' => 'Text',
            'options' => array(
                'label' => 'Monto',
            ),
        ));
    }
}