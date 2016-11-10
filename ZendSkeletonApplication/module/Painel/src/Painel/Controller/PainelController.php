<?php

namespace Painel\Controller;


use Base\Controller\AbstractController;
use Zend\View\Model\ViewModel;

class PainelController extends AbstractController
{
   
    public function __construct() {
        $this->form         = 'Painel\Form\FormCadEmpresa';
        $this->controller   = 'painel';
        $this->route        = 'painel/default';
        $this->service      = 'Painel\Service\CadEmpresaService';
        $this->entity       = 'Painel\Entity\CadEmpresa' ;
    }
    
    public function LoginAction() {
        $view_params = array(
            
        );
        $viewModel = new ViewModel($view_params);
        $viewModel->setTerminal(TRUE); // Desabilitando a Renderização do Layout
        return $viewModel;
    }
    
   
}

