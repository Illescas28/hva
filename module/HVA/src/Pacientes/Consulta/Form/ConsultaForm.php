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
            'name' => 'consulta_fecha',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha de consulta',
            ),
            'attributes' => array(
                'id' => 'consulta_fecha'
            )
        ));
        $this->add(array(
            'name' => 'consulta_hora',
            'type' => 'Text',
            'options' => array(
                'label' => 'Hora de consulta',
            ),
            'attributes' => array(
                'id' => 'consulta_hora'
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
                'label' => 'Status',
                'empty_option' => 'Seleccione su status',
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
        $this->add(array(
            'name' => 'consulta_tipodepago',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo de pago',
                'empty_option' => 'Seleccione tipo de pago',
                'value_options' => array('efectivo', 'tarjeta debito','tarjeta credito','cheque','no identificado'),
            ),
            'attributes' => array(
                'id' => 'consulta_tipodepago'
            )
        ));
        $this->add(array(
            'name' => 'consulta_referenciapago',
            'type' => 'Text',
            'options' => array(
                'label' => 'Referencia de pago (4 últimos dígitos)',
            ),
            'attributes' => array(
                'id' => 'consulta_referenciapago'
            )
        ));
        $this->add(array(
            'name' => 'consulta_facturada',
            'type' => 'Text',
            'options' => array(
                'label' => '¿Facturada?',
            ),
            'attributes' => array(
                'id' => 'consulta_facturada'
            )
        ));
        $this->add(array(
            'name' => 'consulta_registrada',
            'type' => 'Text',
            'options' => array(
                'label' => '¿Registrada?',
            ),
            'attributes' => array(
                'id' => 'consulta_registrada'
            )
        ));
    }
}