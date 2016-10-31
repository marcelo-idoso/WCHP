<?php
namespace Painel\Filter;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class FilterCadEmpresa implements InputFilterAwareInterface{
    
    protected $inputFilter ;


    /**
     * Adicionar conteúdo a esses métodos
     * 
     * @return \Zend\InputFilter\InputFilter
     */
    public function getInputFilter() {
        if (!$this->inputFilter){
            $inputFilter = new InputFilter();
            
            // Filter Logo
            $inputFilter->add(
                    array(
                        'name'      => 'logo',
                        'required'  => FALSE ,
                        'filters'   => array(
                            array(
                                'name' => 'StripTags'
                            ),
                            array(
                                'name' => 'StringTrim'
                            ),
                        ),
                        'validators' => array(
                            array(
                                'name'      => 'StringLength',
                                'options'   => array(
                                    'encoding'  => 'UTF-8',
                                    'min'       => '1',
                                    'max'       => '255'
                                ),
                            ),
                        ),
                    ));
            // Filter Logo Icon
            $inputFilter->add(
                    array(
                        'name'      => 'logo_ico',
                        'required'  => FALSE ,
                        'filters'   => array(
                            array(
                                'name' => 'StripTags'
                            ),
                            array(
                                'name' => 'StringTrim'
                            ),
                        ),
                        'validators' => array(
                            array(
                                'name'      => 'StringLength',
                                'options'   => array(
                                    'encoding'  => 'UTF-8',
                                    'min'       => '1',
                                    'max'       => '255'
                                ),
                            ),
                        ),
                    ));
            // Filter Mini Descrição da Empresa
            $inputFilter->add(
                    array(
                        'name'      => 'mimi_descr_empre',
                        'required'  => FALSE ,
                        'filters'   => array(
                            array(
                                'name' => 'StripTags'
                            ),
                            array(
                                'name' => 'StringTrim'
                            ),
                        ),
                        'validators' => array(
                            array(
                                'name'      => 'StringLength',
                                'options'   => array(
                                    'encoding'  => 'UTF-8',
                                    'min'       => '1',
                                    'max'       => '1000'
                                ),
                            ),
                        ),
                    ));
            // Filter Google Maps
            $inputFilter->add(
                    array(
                        'name'      => 'googleMaps',
                        'required'  => FALSE ,
                        'filters'   => array(
                            array(
                                'name' => 'StripTags'
                            ),
                            array(
                                'name' => 'StringTrim'
                            ),
                        ),
                        'validators' => array(
                            array(
                                'name'      => 'StringLength',
                                'options'   => array(
                                    'encoding'  => 'UTF-8',
                                    'min'       => '1',
                                    'max'       => '1000'
                                ),
                            ),
                        ),
                    ));
            $this->inputFilter = $inputFilter;
        } 
        return $this->inputFilter;
    }
    

    
    public function setInputFilter(InputFilterInterface $inputFilter) {
        throw new \Exception("Não usado");
    }

}
