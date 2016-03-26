<?php

namespace CCI\RamScoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="CCI\RamScoBundle\Repository\RoleRepository")
 */
class Role
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
     * @ORM\Column(name="type_role", type="string", length=40, nullable=true)
     */
    private $typeRole;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="text", nullable=true)
     */
    private $fonction;


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
     * Set typeRole
     *
     * @param string $typeRole
     * @return Role
     */
    public function setTypeRole($typeRole)
    {
        $this->typeRole = $typeRole;

        return $this;
    }

    /**
     * Get typeRole
     *
     * @return string 
     */
    public function getTypeRole()
    {
        return $this->typeRole;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return Role
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->fonction;
    }
}
