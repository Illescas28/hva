<?php
namespace Venta\Cargoventa\Form;

use Zend\Form\Form;

class CargoventaForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('CargoventaForm');
        $this->setAttribute('method', 'post');

        // Inicio columnas adicionales
        // busquedaArticulo
        $this->add(array(
            'name' => 'busquedaArticulo',
            'type' => 'Text',
            'options' => array(
                'label' => 'busqueda Articulo',
            ),
            'attributes' => array(
                'id' => 'busquedaArticulo'
            )
        ));
        // busquedaServicio
        $this->add(array(
            'name' => 'busquedaServicio',
            'type' => 'Text',
            'options' => array(
                'label' => 'busqueda Servicio',
            ),
            'attributes' => array(
                'id' => 'busquedaServicio'
            )
        ));
        $this->add(array(
            'name' => 'cargoventaarticulo_by',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Buscar por',
                'value_options' => array('nombre' => 'nombre', 'código de barras' => 'código de barras', 'proveedor' => 'proveedor'),
            ),
            'attributes' => array(
                'id' => 'cargoventaarticulo_by'
            )
        ));
        $this->add(array(
            'name' => 'cargoventaservicio_by',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Buscar por',
                'value_options' => array('nombre' => 'nombre'),
            ),
            'attributes' => array(
                'id' => 'cargoventaservicio_by'
            )
        ));
        // Fin columnas adicionales

        $this->add(array(
            'name' => 'idventa',
            'type' => 'Text',
            'options' => array(
                'label' => 'Venta',
            ),
            'attributes' => array(
                'id' => 'idventa'
            )
        ));
        $this->add(array(
            'name' => 'idlugarinventario',
            'type' => 'Text',
            'options' => array(
                'label' => 'Lugar Inventario',
            ),
            'attributes' => array(
                'id' => 'idlugarinventario'
            )
        ));
        $this->add(array(
            'name' => 'idservicio',
            'type' => 'Text',
            'options' => array(
                'label' => 'Servicio',
            ),
            'attributes' => array(
                'id' => 'idservicio'
            )
        ));
        $this->add(array(
            'name' => 'cargoventa_tipo',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Seleccione el tipo de gasto',
                'value_options' => array('articulo' => 'articulo', 'servicio' => 'servicio'),
            ),
            'attributes' => array(
                'id' => 'cargoventa_tipo'
            )
        ));
        $this->add(array(
            'name' => 'cargoventa_fecha',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha',
            ),
            'attributes' => array(
                'id' => 'cargoventa_fecha'
            )
        ));
        $this->add(array(
            'name' => 'cantidad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Cantidad',
            ),
            'attributes' => array(
                'id' => 'cantidad'
            )
        ));
        $this->add(array(
            'name' => 'monto',
            'type' => 'Text',
            'options' => array(
                'label' => 'Monto',
            ),
            'attributes' => array(
                'id' => 'monto'
            )
        ));
    }
}