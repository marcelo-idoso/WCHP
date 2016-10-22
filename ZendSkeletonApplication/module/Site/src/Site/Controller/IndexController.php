<?php
namespace Site\Controller;


/**
 * Description of IndexController
 * @category Site
 * @package Controller
 * @author Marcelo
 */

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        
        return new ViewModel();
    }
}