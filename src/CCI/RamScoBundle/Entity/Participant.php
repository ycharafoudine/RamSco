<?php

namespace CCI\RamScoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 *
 * @ORM\Table(name="participant")
 * @ORM\Entity(repositoryClass="CCI\RamScoBundle\Repository\ParticipantRepository")
 */
class Participant
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
    * @ORM\OneToOne(targetEntity="CCI\RamScoBundle\Entity\Personne", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false, unique=false)
  */

  private $Personne;
  
  /**
    * @ORM\OneToOne(targetEntity="CCI\RamScoBundle\Entity\Role", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false, unique=false)
   */

  private $Role;
  
  /**
    * @ORM\OneToOne(targetEntity="CCI\RamScoBundle\Entity\Activite", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false, unique=false)
   */

  private $Activite;


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
     * Set Personne
     *
     * @param \CCI\RamScoBundle\Entity\Personne $personne
     * @return Participant
     */
    public function setPersonne(\CCI\RamScoBundle\Entity\Personne $personne)
    {
        $this->Personne = $personne;

        return $this;
    }

    /**
     * Get Personne
     *
     * @return \CCI\RamScoBundle\Entity\Personne 
     */
    public function getPersonne()
    {
        return $this->Personne;
    }

    /**
     * Set Role
     *
     * @param \CCI\RamScoBundle\Entity\Role $role
     * @return Participant
     */
    public function setRole(\CCI\RamScoBundle\Entity\Role $role)
    {
        $this->Role = $role;

        return $this;
    }

    /**
     * Get Role
     *
     * @return \CCI\RamScoBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * Set Activite
     *
     * @param \CCI\RamScoBundle\Entity\Activite $activite
     * @return Participant
     */
    public function setActivite(\CCI\RamScoBundle\Entity\Activite $activite)
    {
        $this->Activite = $activite;

        return $this;
    }

    /**
     * Get Activite
     *
     * @return \CCI\RamScoBundle\Entity\Activite 
     */
    public function getActivite()
    {
        return $this->Activite;
    }
}
