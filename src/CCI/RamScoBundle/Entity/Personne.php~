<?php

namespace CCI\RamScoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity(repositoryClass="CCI\RamScoBundle\Repository\PersonneRepository")
 */
class Personne extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="num_adherent", type="integer", nullable=true, unique=true)
     */
    private $numAdherent;

    /**
     * 
     * @ORM\Column(name="date_inscription", type="datetime", nullable=true)
     */
    private $dateInscription;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=40, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=40, nullable=true)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var bool
     *
     * @ORM\Column(name="enfants", type="boolean", nullable=true)
     */
    private $enfants;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=30, nullable=true)
     */
    private $telephone;

    /**
     * @var bool
     *
     * @ORM\Column(name="permis", type="boolean", nullable=true)
     */
    private $permis;

    /**
     * @var int
     *
     * @ORM\Column(name="cotisation", type="integer", nullable=true)
     */
    private $cotisation;

    /**
     * @var int
     *
     * @ORM\Column(name="reduction", type="integer", nullable=true)
     */
    private $reduction;

    /**
     * @var int
     *
     * @ORM\Column(name="don", type="integer", nullable=true)
     */
    private $don;

	public function __construct()
    {
        parent::__construct();
        $this->dateInscription = new \Datetime();
        // your own logic
    }


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
     * Set numAdherent
     *
     * @param integer $numAdherent
     * @return Personne
     */
    public function setNumAdherent($numAdherent)
    {
        $this->numAdherent = $numAdherent;

        return $this;
    }

    /**
     * Get numAdherent
     *
     * @return integer 
     */
    public function getNumAdherent()
    {
        return $this->numAdherent;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Personne
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set enfants
     *
     * @param boolean $enfants
     * @return Personne
     */
    public function setEnfants($enfants)
    {
        $this->enfants = $enfants;

        return $this;
    }

    /**
     * Get enfants
     *
     * @return boolean 
     */
    public function getEnfants()
    {
        return $this->enfants;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Personne
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Personne
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set permis
     *
     * @param boolean $permis
     * @return Personne
     */
    public function setPermis($permis)
    {
        $this->permis = $permis;

        return $this;
    }

    /**
     * Get permis
     *
     * @return boolean 
     */
    public function getPermis()
    {
        return $this->permis;
    }

    /**
     * Set cotisation
     *
     * @param integer $cotisation
     * @return Personne
     */
    public function setCotisation($cotisation)
    {
        $this->cotisation = $cotisation;

        return $this;
    }

    /**
     * Get cotisation
     *
     * @return integer 
     */
    public function getCotisation()
    {
        return $this->cotisation;
    }

    /**
     * Set reduction
     *
     * @param integer $reduction
     * @return Personne
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;

        return $this;
    }

    /**
     * Get reduction
     *
     * @return integer 
     */
    public function getReduction()
    {
        return $this->reduction;
    }

    /**
     * Set don
     *
     * @param integer $don
     * @return Personne
     */
    public function setDon($don)
    {
        $this->don = $don;

        return $this;
    }

    /**
     * Get don
     *
     * @return integer 
     */
    public function getDon()
    {
        return $this->don;
    }
}
