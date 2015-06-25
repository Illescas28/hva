<?php

namespace Catalogos\Articulo\Form;

use Zend\Form\Form;

class ArticuloForm extends Form
{
    public function __construct(array $tipos)
    {
        // we want to ignore the name passed
        parent::__construct('ArticuloForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idtipo',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Seleccione el tipo de articulo *',
                'value_options' => $tipos,
            ),
        ));
        $this->add(array(
            'name' => 'articulo_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre *',
            ),
        ));
        $this->add(array(
            'name' => 'articulo_descripcion',
            'type' => 'Text',
            'options' => array(
                'label' => 'Descripción',
            ),
        ));
        
    }
}