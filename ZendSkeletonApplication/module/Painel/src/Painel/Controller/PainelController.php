<?php

namespace Painel\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Painel\Form\FormCadEmpresa;
use Painel\Filter\FilterCadEmpresa;

class PainelController extends AbstractActionController
{

    protected $em;

    public function getEm() {
        if ($this->em === null) {
            $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }
        return $this->em;
    }
    
    public function indexAction()
    {
        return new ViewModel();
    }

    public function addAction()
    {
        $form = new FormCadEmpresa();
        $form->get('submit')->setValue('Adiconar');
        $entityManager = $this->getEm();
        $request = $this->getRequest();
        if ($request->isPost()) {
            $cadEmpresa = new FilterCadEmpresa();
            $form->setInputFilter($cadEmpresa->getInputFilter());
            $form->setData($request->getPost());
            
            if ($form->isValid()) {
               $cadEmpresa->exchangeArray($form->getData());
               $this->em()->getEm()->persist($cadEmpresa);
               $this->em()->flush();
               // Redirect to List of Albumns
               return $this->redirect()->toRoute('painel');
            }
            
        }
        
        return new ViewModel(array(
            'form'  => $form
        ));
    }

    public function editAction()
    {
        return new ViewModel();
    }

    public function deleteAction()
    {
        return new ViewModel();
    }


}

