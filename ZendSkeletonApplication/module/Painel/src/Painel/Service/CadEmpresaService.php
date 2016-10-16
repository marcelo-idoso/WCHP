<?php

namespace Painel\Service;

use Base\Service\AbstractService;
use Doctrine\ORM\EntityManager;

        
class CadEmpresaService extends AbstractService {
    
    public function __construct(EntityManager $em) {
        $this->entity = '\Painel\Entity\Painel';
        parent::__construct($em);
    }
}
