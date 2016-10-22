<?php
namespace Site\Helper;

use Zend\View\Helper\AbstractHelper;
use Doctrine\ORM\EntityManager;
use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;

class ConfigItem extends AbstractHelper implements ServiceManagerAwareInterface{
    /**
     * Service Locator
     * @var ServiceManager
     */
    protected $serviceLocator;
    /* @var Doctrine\ORM\EntityManager */
    protected $em;
    protected $sm;




    public function __construct($e , $sm) {
        $app = $e->getParam('application');
        $this->sm = $sm;
        $em = $this->getEntityManager();
    }
    /**
     * __invoke
     *
     * @access public
     * @param  string
     * @return String
     */
    public function __invoke()
    {
      $teste = 'getId()';
        $config = $this->getEntityManager()->getRepository('Painel\Entity\Painel')->find(7);
        /* @var $entity \Painel\Entity\Painel */
        
               
        return $config;
        // we could return a default value, or throw exception etc here
        
        // we could return a default value, or throw exception etc here
    }
    /**
     * 
     * @return \Doctrine\ORM\EntityManager 
     */
    public function getEntityManager() {
        
        if (NULL == $this->em){
            $this->em = $this->sm->getServiceLocator()->get('\Doctrine\ORM\EntityManager') ;    
        }
        
        return $this->em;
    }
    
    /**
     * 
     * @param EntityManager $em
     */
    public function setEntityManager(EntityManager $em) {
        $this->em = $em;
    }
    
    /**
     * 
     * @return ServiceManager
     */
    public function getServiceManager() {
        return $this->sm->getServiceLocator() ;
    }

    /**
     * 
     * @param ServiceManager $serviceManager
     */
    public function setServiceManager(ServiceManager $serviceManager) {
        $this->sm = $serviceManager;
    }
    
    public function getRepository() {
        if (NULL === $this->em) {
            $this->em = $this->getEntityManager()->getRepository('Painel\Entity\Painel');
        }
        return $this->em;
    }

}