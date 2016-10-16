<?php

namespace Painel\Entity;

use Doctrine\ORM\Mapping as ORM;
use Base\Entity\AbstractEntity;
/**
 * Painel
 *
 * @ORM\Table(name="painel")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Painel\Repository\PainelRepository")
 */
class Painel extends AbstractEntity
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
     * @ORM\Column(name="logo_ico", type="string", length=255, nullable=false)
     */
    private $logoIco;

    /**
     * @var string
     *
     * @ORM\Column(name="mimi_descr_empre", type="text", length=65535, nullable=false)
     */
    private $mimiDescrEmpre;

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
     * @return Painel
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
     * @return Painel
     */
    public function setLogoIco($logoIco)
    {
        $this->logoIco = $logoIco;

        return $this;
    }

    /**
     * Get logoIco
     *
     * @return string
     */
    public function getLogoIco()
    {
        return $this->logoIco;
    }

    /**
     * Set mimiDescrEmpre
     *
     * @param string $mimiDescrEmpre
     *
     * @return Painel
     */
    public function setMimiDescrEmpre($mimiDescrEmpre)
    {
        $this->mimiDescrEmpre = $mimiDescrEmpre;

        return $this;
    }

    /**
     * Get mimiDescrEmpre
     *
     * @return string
     */
    public function getMimiDescrEmpre()
    {
        return $this->mimiDescrEmpre;
    }
}
