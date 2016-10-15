<?php

namespace Application\Form;

use Zend\Form\Form;
use Application\Entity\Painel as PainelEntity;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject;
use Zend\InputFilter\InputFilter;

class testeForm extends Form {

    public function __construct($name = null, $options = array()) {
        parent::__construct($name, $options);

        $id = array(
            'type' => 'hidden',
            'name' => 'id');
        

        
        $logo = array(
            'type' => 'text',
            'name' => 'logo',
            'options' => array(
                'label' => "Logo"
            ),
            'attributes' => array(
                'class' => 'form-control input-sm'
            )
        );
        $logoFilter = Array(
            'name'     => 'logo',
            'required' => FALSE
        );
        
        $logoIcon = array(
            'type' => 'text',
            'name' => 'logo_ico',
            'options' => array(
                'label' => "Logo Icon"
            ),
            'attributes' => array(
                'class' => 'form-control input-sm'
            )
        );
        
        $logoIconFilter = Array(
            'name'     => 'logo_ico',
            'required' => FALSE
        );
        
        
        $mimiDescrEmpre = array(
            'type' => 'text',
            'name' => 'logo_ico',
            'options' => array(
                'label' => "Descrição da empresa"
            ),
            'attributes' => array(
                'class' => 'form-control input-sm'
            )
        );

        $mimiDescrEmpreFilter = array(
            'name'     => 'mimi_descr_empre',
            'required' => FALSE
        );
          
        
        $objectManager = $options['om'];
        $this->setObject(new PainelEntity())
        ->setHydrator(new DoctrineObject($objectManager))
        ->add($id)
        ->add($logo)
        ->add($logoIcon)
        ->add($mimiDescrEmpre);
        
        $filter = new InputFilter();
        $filter->add($mimiDescrEmpreFilter)
               ->add($logoFilter)
               ->add($logoIconFilter);
        
       $this->setInputFilter($filter);
                
    }

}
