<?php

namespace CCI\RamScoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite")
 * @ORM\Entity(repositoryClass="CCI\RamScoBundle\Repository\ActiviteRepository")
 */
class Activite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_activite", type="string", length=255, nullable=true)
     */
    private $titreActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=100, nullable=true)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=100, nullable=true)
     */
    private $lieu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_activite", type="datetime", nullable=true)
     */
    private $dateActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="fournitures", type="string", length=255, nullable=true)
     */
    private $fournitures;

    /**
     * @var int
     *
     * @ORM\Column(name="cout", type="integer", nullable=true)
     */
    private $cout;


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
     * Set titreActivite
     *
     * @param string $titreActivite
     * @return Activite
     */
    public function setTitreActivite($titreActivite)
    {
        $this->titreActivite = $titreActivite;

        return $this;
    }

    /**
     * Get titreActivite
     *
     * @return string 
     */
    public function getTitreActivite()
    {
        return $this->titreActivite;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return Activite
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Activite
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set dateActivite
     *
     * @param \DateTime $dateActivite
     * @return Activite
     */
    public function setDateActivite($dateActivite)
    {
        $this->dateActivite = $dateActivite;

        return $this;
    }

    /**
     * Get dateActivite
     *
     * @return \DateTime 
     */
    public function getDateActivite()
    {
        return $this->dateActivite;
    }

    /**
     * Set fournitures
     *
     * @param string $fournitures
     * @return Activite
     */
    public function setFournitures($fournitures)
    {
        $this->fournitures = $fournitures;

        return $this;
    }

    /**
     * Get fournitures
     *
     * @return string 
     */
    public function getFournitures()
    {
        return $this->fournitures;
    }

    /**
     * Set cout
     *
     * @param integer $cout
     * @return Activite
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return integer 
     */
    public function getCout()
    {
        return $this->cout;
    }
}
