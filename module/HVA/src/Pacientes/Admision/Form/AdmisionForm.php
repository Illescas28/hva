<?php
namespace Pacientes\Admision\Form;

use Zend\Form\Form;

class AdmisionForm extends Form
{
    public function __construct(array $medico = null, array $cuarto = null)
    {
        // we want to ignore the name passed
        parent::__construct('AdmisionForm');
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
                'id' => 'idmedicoadmision'
            )
        ));
        // cuarto
        $this->add(array(
            'name' => 'idcuarto',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Cuarto',
                'empty_option' => 'Seleccione un cuarto',
                'value_options' => $cuarto,
            ),
            'attributes' => array(
                'id' => 'idcuarto'
            )
        ));
        // paciente
        $this->add(array(
            'name' => 'idpaciente',
            'type' => 'Text',
            'attributes' => array(
                'id' => 'idpacienteadmision'
            )
        ));

        $this->add(array(
            'name' => 'admision_fechaadmision',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha de admisión',
            ),
            'attributes' => array(
                'id' => 'admision_fechaadmision'
            )
        ));
        $this->add(array(
            'name' => 'admision_fechasalida',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha de salida',
            ),
            'attributes' => array(
                'id' => 'admision_fechasalida'
            )
        ));
        $this->add(array(
            'name' => 'admision_diagnostico',
            'type' => 'Text',
            'options' => array(
                'label' => 'Diagnostico',
            ),
            'attributes' => array(
                'id' => 'admision_diagnostico'
            )
        ));
        $this->add(array(
            'name' => 'admision_observaciones',
            'type' => 'Text',
            'options' => array(
                'label' => 'Observaciones',
            ),
            'attributes' => array(
                'id' => 'admision_observaciones'
            )
        ));
        $this->add(array(
            'name' => 'admision_status',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Status',
                'empty_option' => 'Seleccione su estado civil',
                'value_options' => array('pagada' => 'pagada','no pagada' => 'no pagada','pendiente' => 'pendiente'),
            ),
            'attributes' => array(
                'id' => 'admision_status'
            )
        ));
        $this->add(array(
            'name' => 'admision_total',
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
                'label' => 'Admisión Total'
            ),
            'attributes' => array(
                'id' => 'admision_total'
            )
        ));
        $this->add(array(
            'name' => 'admision_pagadaen',
            'type' => 'Text',
            'options' => array(
                'label' => 'Pagada en',
            ),
            'attributes' => array(
                'id' => 'admision_pagadaen'
            )
        ));
        $this->add(array(
            'name' => 'admision_tipodepago',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo de pago',
                'empty_option' => 'Seleccione tipo de pago',
                'value_options' => array('efectivo', 'tarjeta debito','tarjeta credito','cheque','no identificado'),
            ),
            'attributes' => array(
                'id' => 'admision_tipodepago'
            )
        ));
        $this->add(array(
            'name' => 'admision_referenciapago',
            'type' => 'Text',
            'options' => array(
                'label' => 'Referencia de pago (4 últimos dígitos)',
            ),
            'attributes' => array(
                'id' => 'admision_referenciapago'
            )
        ));
        $this->add(array(
            'name' => 'admision_facturada',
            'type' => 'Text',
            'options' => array(
                'label' => '¿Facturada?',
            ),
            'attributes' => array(
                'id' => 'admision_facturada'
            )
        ));
        $this->add(array(
            'name' => 'admision_registrada',
            'type' => 'Text',
            'options' => array(
                'label' => '¿Registrada?',
            ),
            'attributes' => array(
                'id' => 'admision_registrada'
            )
        ));
    }
}