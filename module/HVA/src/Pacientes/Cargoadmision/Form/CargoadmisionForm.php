<?php
namespace Pacientes\Cargoadmision\Form;

use Zend\Form\Form;

class CargoadmisionForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('CargoadmisionForm');
        $this->setAttribute('method', 'post');

        // Inicio columnas adicionales
        // busquedaArticulo
        $this->add(array(
            'name' => 'busquedaAdmisionArticulo',
            'type' => 'Text',
            'options' => array(
                'label' => 'busqueda Articulo',
            ),
            'attributes' => array(
                'id' => 'busquedaAdmisionArticulo'
            )
        ));
        // busquedaServicio
        $this->add(array(
            'name' => 'busquedaAdmisionServicio',
            'type' => 'Text',
            'options' => array(
                'label' => 'busqueda Servicio',
            ),
            'attributes' => array(
                'id' => 'busquedaAdmisionServicio'
            )
        ));
        $this->add(array(
            'name' => 'cargoadmisionarticulo_by',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Buscar por',
                'value_options' => array('nombre' => 'nombre', 'código de barras' => 'código de barras', 'proveedor' => 'proveedor'),
            ),
            'attributes' => array(
                'id' => 'cargoadmisionarticulo_by'
            )
        ));
        $this->add(array(
            'name' => 'cargoadmisionservicio_by',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Buscar por',
                'value_options' => array('nombre' => 'nombre'),
            ),
            'attributes' => array(
                'id' => 'cargoadmisionservicio_by'
            )
        ));
        // Fin columnas adicionales
        $this->add(array(
            'name' => 'idadmision',
            'type' => 'Text',
            'options' => array(
                'label' => 'Admision',
            ),
            'attributes' => array(
                'id' => 'idadmision'
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
            'name' => 'cargoadmision_tipo',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Seleccione el tipo de gasto',
                'value_options' => array('articulo' => 'articulo', 'servicio' => 'servicio'),
            ),
            'attributes' => array(
                'id' => 'cargoadmision_tipo'
            )
        ));
        $this->add(array(
            'name' => 'cargoadmision_fecha',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha',
            ),
            'attributes' => array(
                'id' => 'cargoadmision_fecha'
            )
        ));
        $this->add(array(
            'name' => 'cargoadmision_cantidad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Cantidad',
            ),
            'attributes' => array(
                'id' => 'cargoadmision_cantidad'
            )
        ));
        $this->add(array(
            'name' => 'cargoadmision_monto',
            'type' => 'Text',
            'options' => array(
                'label' => 'Monto',
            ),
            'attributes' => array(
                'id' => 'cargoadmision_monto'
            )
        ));
    }
}