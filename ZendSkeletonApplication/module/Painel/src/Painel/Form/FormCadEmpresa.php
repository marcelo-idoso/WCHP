<?php
namespace Painel\Form;

use Zend\Form\Form;
use Painel\Filter\FilterCadEmpresa;

class FormCadEmpresa extends Form{
    
    public function __construct() {
        parent::__construct();
        
        $filter = new FilterCadEmpresa();
        $this->setAttribute('method', 'POST');
        $this->setInputFilter($filter->getInputFilter());
        $id = array(
            'name'  => 'id',
            'type'  => 'Hidden'
        );
        
        $logo = array(
            'name'      => 'logo',
            'type'      => 'Text',
            'options'   => array(
                'label' => 'Logo'
            )
        );
        
        $logo_Ico = array(
            'name'      => "logo_ico",
            'type'      => "Text",
            'options'   => array(
                'label' => "Icone Logo"
            )
        );
        $mimi_Descr_Empre = array(
            'name'      => 'mimi_descr_empre',
            'type'      => 'TextArea',
            'options'   => array(
                'label' => 'Pesquina Desquição da empresa'
            )
        );
        $this->add($id);
        $this->add($logo);
        $this->add($logo_Ico);
        $this->add($mimi_Descr_Empre);
        $this->add(array(
            'name' => 'submit',
            'type' => 'submit',
            'attributes'    => array(
                'value' => 'Salvar',
                'id'    => 'submitButton'
            )
        ));
    }
}
