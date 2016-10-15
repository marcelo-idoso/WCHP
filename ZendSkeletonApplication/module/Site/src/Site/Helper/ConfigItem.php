<?php
namespace Site\Helper;
use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceManager;

class ConfigItem extends AbstractHelper{
    /**
     * Service Locator
     * @var ServiceManager
     */
    protected $serviceLocator;

    /**
     * __invoke
     *
     * @access public
     * @param  string
     * @return String
     */
    public function __invoke($value)
    {
        $config = array('logo' => 'teste');
        if(isset($config[$value])) {

            return $config[$value];
        }

        return NULL;
        // we could return a default value, or throw exception etc here
    }

    /**
     * Setter for $serviceLocator
     * @param ServiceManager $serviceLocator
     */
    public function setServiceLocator(ServiceManager $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }
}