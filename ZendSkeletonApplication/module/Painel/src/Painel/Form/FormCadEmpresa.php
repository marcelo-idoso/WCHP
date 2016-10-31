<?php
namespace Painel\Form;

use Zend\Form\Form;
use Painel\Filter\FilterCadEmpresa;

class FormCadEmpresa extends Form{
    
    public function __construct() {
        parent::__construct(NULL);
        
        $filter = new FilterCadEmpresa();
        $this->setAttribute('method', 'POST');
        
        $this->setInputFilter($filter->getInputFilter());
        
        $logo = array(
            'name'      => 'logo',
            'type'      => 'Text',
            'options'   => array(
                'label' => 'Logo'
            ),
            'attributes'    => array(
                'class' => 'form-control input-lg'
            )
        );
        
        $logo_Ico = array(
            'name'      => 'logo_ico',
            'type'      => 'Text',
            'options'   => array(
                'label' => 'Icone Logo'
            ),
            'attributes'    => array(
                'class' => 'form-control input-lg'
            )
            
        );
        
        $mimi_Descr_Empre = array(
            'name'      => 'mimi_descr_empre',
            'type'      => 'TextArea',
            'options'   => array(
                'label' => 'Pesquina Desquição da empresa'
            ),
            'attributes'    => array(
                'class' => 'form-control input-lg'
            )
            
        );
        $googleMaps = array(
            'name'      => 'googleMaps',
            'type'      => 'TextArea',
            'options'   => array(
                'label' => 'GoogleMaps'
            ),
            'attributes'    => array(
                'class' => 'form-control input-lg'
            )
            
        );
        $this->add($logo);
        $this->add($logo_Ico);
        $this->add($mimi_Descr_Empre);
        $this->add($googleMaps);
        $this->add(array(
            'name' => 'submit',
            'type' => 'submit',
            'attributes'    => array(
                'value' => 'Salvar',
                'id'    => 'submitButton',
                'class' => 'btn btn-primary glyphicon glyphicon-heart'
            )
        ));
    }
}
