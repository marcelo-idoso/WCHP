<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\PainelForm;

class IndexController extends AbstractActionController {

    public function indexAction() {
        return new ViewModel();
    }

    public function adicionarAction() {
        $form = new PainelForm('painel', array(
            'om' => $this->getServiceLocator()->get('Doctrine\ORM\EntityManager')
        ));
        
        if($this->getRequest()->isPost()){
            $form->setData(array_merge_recursive($this->getRequest()
                    ->get));
                    
        }
        return new ViewModel(
                array(
                    'form' => $form
                )
            );
    }

}
