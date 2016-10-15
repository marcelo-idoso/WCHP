<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator\ClassMethods;

/**
 * Painel
 *
 * @ORM\Table(name="painel")
 * @ORM\Entity
 */
class Painel {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="logo_ico", type="string", length=255, nullable=false)
     */
    private $logoIco;

    /**
     * @var string
     *
     * @ORM\Column(name="mimi_descr_empre", type="text", length=65535, nullable=false)
     */
    private $mimiDescrEmpre;

    public function __construct(array $data) {
        $hydrator = new ClassMethods();
        $object = $this;
        $hydrator->hydrate($data, $object);
    }
    
    public function toArray() {
        $hydrator = new ClassMethods();
        $object = $this;
        $hydrator->extract($object);
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setLogoIco($logoIco) {
        $this->logoIco = $logoIco;
        return $this;
    }

    public function getLogoIco() {
        return $this->logoIco;
    }

    public function getMimiDescrEmpre() {
        return $this->mimiDescrEmpre;
    }

    public function setMimiDescrEmpre($mimiDescrEmpre) {
        $this->mimiDescrEmpre = $mimiDescrEmpre;
        return $this;
    }

}
