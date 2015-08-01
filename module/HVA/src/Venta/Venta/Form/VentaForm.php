<?php
namespace Venta\Venta\Form;

use Zend\Form\Form;

class VentaForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('VentaForm');
        $this->setAttribute('method', 'post');

        // paciente
        $this->add(array(
            'name' => 'idpaciente',
            'type' => 'Hidden',
            'attributes' => array(
                'id' => 'idpaciente'
            )
        ));

        $this->add(array(
            'name' => 'venta_fecha',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha de venta',
            ),
            'attributes' => array(
                'id' => 'venta_fecha'
            )
        ));
        $this->add(array(
            'name' => 'venta_tipodepago',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo de pago',
                'empty_option' => 'Seleccione tipo de pago',
                'value_options' => array('efectivo', 'tarjeta debito','tarjeta credito','cheque','no identificado'),
            ),
            'attributes' => array(
                'id' => 'venta_tipodepago'
            )
        ));
        $this->add(array(
            'name' => 'venta_status',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Status',
                'empty_option' => 'Seleccione un status',
                'value_options' => array('pagada' => 'pagada','no pagada' => 'no pagada','pendiente' => 'pendiente'),
            ),
            'attributes' => array(
                'id' => 'venta_status'
            )
        ));
        $this->add(array(
            'name' => 'venta_facturada',
            'type' => 'Text',
            'options' => array(
                'label' => '¿Facturada?',
            ),
            'attributes' => array(
                'id' => 'venta_facturada'
            )
        ));
        $this->add(array(
            'name' => 'venta_registrada',
            'type' => 'Text',
            'options' => array(
                'label' => '¿Registrada?',
            ),
            'attributes' => array(
                'id' => 'venta_registrada'
            )
        ));
        $this->add(array(
            'name' => 'venta_total',
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
                'label' => 'Venta Total'
            ),
            'attributes' => array(
                'id' => 'venta_total'
            )
        ));
        $this->add(array(
            'name' => 'venta_referenciapago',
            'type' => 'Text',
            'options' => array(
                'label' => 'Referencia de pago (4 últimos dígitos)',
            ),
            'attributes' => array(
                'id' => 'venta_referenciapago'
            )
        ));
    }
}