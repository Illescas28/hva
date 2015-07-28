<?php

namespace Empleados\Filter;

// Add these import statements
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class EmpleadoFilter implements InputFilterAwareInterface
{
    protected $inputFilter;                       // <-- Add this variable

    // Add content to these methods:
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }

    public function getInputFilter()
    {

        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();
            
            $inputFilter->add(array(
                'name'     => 'empleado_nombre',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));

            $inputFilter->add(array(
                'name'     => 'empleado_apellidopaterno',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            
            $inputFilter->add(array(
                'name'     => 'empleado_apellidomaterno',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            
            $inputFilter->add(array(
                'name'     => 'empleado_email',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            
            $inputFilter->add(array(
                'name'     => 'empleado_nombreusuario',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));

            
            $inputFilter->add(array(
                'name'     => 'empleado_password',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            
            $this->inputFilter = $inputFilter;
        }

        return $this->inputFilter;
    }
}
