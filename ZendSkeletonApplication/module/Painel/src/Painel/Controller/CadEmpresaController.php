<?php

namespace Painel\Controller;

use Base\Controller\AbstractController;

class CadEmpresaController extends AbstractController{

    public function __construct() {
        $this->form         = 'Painel\Form\FormCadEmpresa';
        $this->controller   = 'cadempresa';
        $this->route        = 'cadempresa/default';
        $this->service      = 'Painel\Service\CadEmpresaService';
        $this->entity       = 'Painel\Entity\CadEmpresa' ;
    }

}

