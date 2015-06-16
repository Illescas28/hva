<?php
namespace Pacientes\Cargoconsulta\Form;

use Zend\Form\Form;

class CargoconsultaForm extends Form
{
    public function __construct(array $busqueda = null,array $consulta = null, array $lugarinventario = null)
    {
        // we want to ignore the name passed
        parent::__construct('CargoconsultaForm');
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
            'name' => 'cargoconsultaarticulo_by',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Buscar por',
                'value_options' => array('nombre' => 'nombre', 'código de barras' => 'código de barras', 'proveedor' => 'proveedor'),
            ),
            'attributes' => array(
                'id' => 'cargoconsultaarticulo_by'
            )
        ));
        $this->add(array(
            'name' => 'cargoconsultaservicio_by',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Buscar por',
                'value_options' => array('nombre' => 'nombre'),
            ),
            'attributes' => array(
                'id' => 'cargoconsultaservicio_by'
            )
        ));
        // Fin columnas adicionales


        /*
        // consulta con prarámetros
        $this->add(array(
            'name' => 'idconsulta',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Consultas',
                'empty_option' => 'Seleccione una consulta',
                'value_options' => $consulta,
            ),
            'attributes' => array(
                'id' => 'idconsulta'
            )
        ));
        */

        /*
        // lugarinventario con prarámetros
        $this->add(array(
            'name' => 'idlugarinventario',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Productos',
                'empty_option' => 'Seleccione un producto',
                'value_options' => $lugarinventario,
            ),
            'attributes' => array(
                'id' => 'idlugarinventario'
            )
        ));
        */

        $this->add(array(
            'name' => 'idconsulta',
            'type' => 'Text',
            'options' => array(
                'label' => 'Consulta',
            ),
            'attributes' => array(
                'id' => 'idconsulta'
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
            'name' => 'cargoconsulta_tipo',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Seleccione el tipo de gasto',
                'value_options' => array('articulo' => 'articulo', 'servicio' => 'servicio'),
            ),
            'attributes' => array(
                'id' => 'cargoconsulta_tipo'
            )
        ));
        $this->add(array(
            'name' => 'cargoconsulta_fecha',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha',
            ),
            'attributes' => array(
                'id' => 'cargoconsulta_fecha'
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