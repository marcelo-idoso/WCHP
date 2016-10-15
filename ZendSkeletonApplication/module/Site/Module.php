<?php
namespace Site;

use Site\Helper\ConfigItem;

class Module {

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getViewHelperConfig() {
        return array(
            'factories' => array(
                'configItem' => function ($helperPluginManager) {
                    $serviceLocator = $helperPluginManager->getServiceLocator();
                    $viewHelper = new ConfigItem();
                    $viewHelper-> setServiceLocator($serviceLocator);

                    return $viewHelper;
                }
            ),
        );
    }

}
