<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\Paginator\Paginator;

abstract class AbstractActionController extends AbstractActionController {

    protected $em;

    public function getEm($entity = NULL) {

        if ($this->em === null) {
            $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }
        if ($entity !== NULL) {
            return $this->em->getRepository($entity);
        }
    }

    public function paginator($list, $page, $itensPorPagina = 10) {
        $paginator = new Paginator(new ArrayAdapter($list));
        $paginator->setCurrentPageNumber($page)
                  ->setDefaultItemCountPerPage($itensPorPagina);

        return $paginator;
    }

}
