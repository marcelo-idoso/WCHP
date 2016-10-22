<?php
namespace Base\Entity;

use Zend\Stdlib\Hydrator\ClassMethods;

abstract class AbstractEntity{
    
    /**
     * @param array $options
     */
    public function __construct(Array $options = array()) {
        $hydrator = new ClassMethods();
        $hydrator->hydrate($options, $this);
    }
    /**
     * @return array Description
     */
    public function toArray() {
        $hydrator = new ClassMethods();
        return $hydrator->extract($this);
    }

    /**
     * 
     * @return type
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
    
    public function exchangeArray() {
        return get_object_vars($this);
    }

}
