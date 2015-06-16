<?php
namespace Pacientes\Consulta\Form;

use Zend\Form\Form;

class ConsultaForm extends Form
{
    public function __construct(array $medico = null, array $consultorio = null)
    {
        // we want to ignore the name passed
        parent::__construct('ConsultaForm');
        $this->setAttribute('method', 'post');

        // medicos
        $this->add(array(
            'name' => 'idmedico',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Medicos',
                'empty_option' => 'Seleccione un medico',
                'value_options' => $medico,
            ),
            'attributes' => array(
                'id' => 'idmedico'
            )
        ));
        // consultorio
        $this->add(array(
            'name' => 'idconsultorio',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Consultorio',
                'empty_option' => 'Seleccione un consultorio',
                'value_options' => $consultorio,
            ),
            'attributes' => array(
                'id' => 'idconsultorio'
            )
        ));
        // paciente
        $this->add(array(
            'name' => 'idpaciente',
            'type' => 'Hidden',
            'attributes' => array(
                'id' => 'idpaciente'
            )
        ));

        $this->add(array(
            'name' => 'consulta_fechaadmision',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha de consulta',
            ),
            'attributes' => array(
                'id' => 'consulta_fechaadmision'
            )
        ));
        $this->add(array(
            'name' => 'consulta_fechasalida',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha de salida',
            ),
            'attributes' => array(
                'id' => 'consulta_fechasalida'
            )
        ));
        $this->add(array(
            'name' => 'consulta_diagnostico',
            'type' => 'Text',
            'options' => array(
                'label' => 'Diagnostico',
            ),
            'attributes' => array(
                'id' => 'consulta_diagnostico'
            )
        ));
        $this->add(array(
            'name' => 'consulta_observaciones',
            'type' => 'Text',
            'options' => array(
                'label' => 'Observaciones',
            ),
            'attributes' => array(
                'id' => 'consulta_observaciones'
            )
        ));
        $this->add(array(
            'name' => 'consulta_status',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Estado Civil',
                'empty_option' => 'Seleccione su estado civil',
                'value_options' => array('pagada' => 'pagada','no pagada' => 'no pagada','pendiente' => 'pendiente'),
            ),
            'attributes' => array(
                'id' => 'consulta_status'
            )
        ));
        $this->add(array(
            'name' => 'consulta_total',
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
                'label' => 'Consulta Total'
            ),
            'attributes' => array(
                'id' => 'consulta_total'
            )
        ));
    }
}