<?php
namespace Painel;

use Zend\Mvc\ModuleRouteListener;
use Painel\Service\CadEmpresaService; 

class Module
{
   public function onBootstrap($e)
    {
        $e->getApplication()->getServiceManager()->get('translator');
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
                                
        $e->getApplication()
                ->getEventManager()
                ->getSharedManager()
                ->attach('Zend\Mvc\Controller\AbstractActionController', 'dispatch', function($e) {
                    $controller      = $e->getTarget();
                    $controllerClass = get_class($controller);
                    $moduleNamespace = substr($controllerClass, 0, strpos($controllerClass, '\\'));
                    $config          = $e->getApplication()->getServiceManager()->get('config');
                    if (isset($config['module_layout'][$moduleNamespace])) {
                        $controller->layout($config['module_layout'][$moduleNamespace]);
                    }
                }, 100);
                
        //Aqui eu declaro o Helper Manager
         $sm = $e->getApplication()->getServiceManager();
         $sm->get('viewhelpermanager')->setFactory('ConfigItem', function ($sm) use ($e) {
                    return new ConfigItem($e, $sm);
         });
 
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    //Helper
    public function getViewHelperConfig() {
        return array(
            'invokables' => array(
                'configItem' => 'Site\Helper\ConfigItem',
                'render_form'   => 'Base\Helper\FormBoostrap',
               
            )
        );
    }
    public function getServiceConfig() {
        return array(
            'factories' => array(
                'Painel\Service\CadEmpresaService' => function ($em){
                    return new CadEmpresaService($em->get('Doctrine\ORM\EntityManager'));
                    }
                )
        );
    }
}
