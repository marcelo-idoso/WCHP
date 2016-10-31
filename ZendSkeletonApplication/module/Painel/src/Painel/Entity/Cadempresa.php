<?php

namespace Painel\Entity;

use Doctrine\ORM\Mapping as ORM;
use Base\Entity\AbstractEntity;
/**
 * Cadempresa
 *
 * @ORM\Table(name="cadempresa")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Painel\Repository\PainelRepository")
 */
class CadEmpresa extends AbstractEntity
{
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
     * @ORM\Column(name="logo_ico", type="string", length=255, nullable=true)
     */
    private $logo_ico;

    /**
     * @var string
     *
     * @ORM\Column(name="mimi_descr_empre", type="text", length=65535, nullable=true)
     */
    private $mimi_descr_empre;

    /**
     * @var string
     *
     * @ORM\Column(name="googleMaps", type="text", length=65535, nullable=true)
     */
    private $googleMaps;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Cadempresa
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set logoIco
     *
     * @param string $logoIco
     *
     * @return Cadempresa
     */
    public function setLogoIco($logoIco)
    {
        $this->logo_ico = $logoIco;
    
        return $this;
    }

    /**
     * Get logoIco
     *
     * @return string
     */
    public function getLogoIco()
    {
        return $this->logo_ico;
    }

    /**
     * Set mimiDescrEmpre
     *
     * @param string $mimiDescrEmpre
     *
     * @return Cadempresa
     */
    public function setMimiDescrEmpre($mimiDescrEmpre)
    {
        $this->mimi_descr_empre = $mimiDescrEmpre;
    
        return $this;
    }

    /**
     * Get mimiDescrEmpre
     *
     * @return string
     */
    public function getMimiDescrEmpre()
    {
        return $this->mimi_descr_empre;
    }

    /**
     * Set googlemaps
     *
     * @param string $googlemaps
     *
     * @return Cadempresa
     */
    public function setGooglemaps($googlemaps)
    {
        $this->googleMaps = $googlemaps;
    
        return $this;
    }

    /**
     * Get googlemaps
     *
     * @return string
     */
    public function getGooglemaps()
    {
        return $this->googleMaps;
    }
    
    public function exchangeArray() {
        return get_object_vars($this);
    }
    
    public function getArrayCopy() {
        return get_object_vars($this);
    }
}
