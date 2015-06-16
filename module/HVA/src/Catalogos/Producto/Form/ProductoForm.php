<?php

namespace Catalogos\Producto\Form;

use Zend\Form\Form;

class ProductoForm extends Form
{
    public function __construct(array $tipos = null)
    {
        // we want to ignore the name passed
        parent::__construct('ProductoForm');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'idarticulo',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'idtipo',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Seleccione un tipo',
                'value_options' => $tipos,
            ),
        ));
        $this->add(array(
            'name' => 'articulo_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre',
            ),
        ));
        $this->add(array(
            'name' => 'articulo_descripcion',
            'type' => 'Text',
            'options' => array(
                'label' => 'Descripción',
            ),
        ));
        $this->add(array(
            'name' => 'articulo_cantidadpresentacion',
            'type' => 'Text',
            'options' => array(
                'label' => 'Cantidad',
            ),
        ));

        $this->add(array(
            'name' => 'propiedad_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Propiedad',
            ),
        ));
        $this->add(array(
            'name' => 'propiedadvalor_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Valor',
            ),
        ));

        $this->add(array(
            'name' => 'minimo',
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
                'label' => 'Cantidad mínima'
            )
        ));
        $this->add(array(
            'name' => 'maximo',
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
                'label' => 'Cantidad máxima'
            )
        ));
        $this->add(array(
            'name' => 'reorden',
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
                'label' => 'Punto de orden'
            )
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => array(
                'value' => 'Guargar',
                'id' => 'submitbutton',
                'class' => 'btn waves-effect waves-light',
            ),
            'options' => array(
                'label' => 'Guardar',
            ),
        ));
    }
}