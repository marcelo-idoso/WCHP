<?php
namespace Painel\Filter;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class FilterCadEmpresa implements InputFilterAwareInterface{
    
    public $id;
    public $logo;
    public $logo_Icon;
    public $mimi_Descr_Empre;
    protected $inputFilter ;


    public function exchangeArray($dados) {
        $this->id               = (isset($dados['id'])) ? $dados['id'] : NULL;
        $this->logo             = (isset($dados['logo'])) ? $dados['logo'] : NULL;
        $this->logo_Icon        = (isset($dados['logo_ico'])) ? $dados['logo_ico'] : NULL;
        $this->mimi_Descr_Empre = (isset($dados['mimi_descr_empre'])) ? $dados['mimi_descr_empre'] : NULL;
    }
    // adicionar conteúdo a esses métodos
    public function getInputFilter() {
        if (!$this->inputFilter){
            $inputFilter = new InputFilter();
            
            // Filter ID
            $inputFilter->add(
                    array(
                        'name'      => 'id',
                        'required'  => TRUE,
                        'filters'   => array(
                            array(
                                'name' => 'Int'
                            ),
                        ),
                    ));
            
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
                                    'max'       => '400'
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
