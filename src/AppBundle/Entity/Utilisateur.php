<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UtilisateurRepository")
 */
class Utilisateur
{
    
    function __construct() {
        $this->privileges = array("standard");
        
    }

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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="motdepass", type="string", length=255)
     */
    private $motdepass;

    /**
     * @var array
     *
     * @ORM\Column(name="privilege", type="array")
     */
    private $privilege;

    /**
     * Get id
     *
     * @return integer 
     */
    
     /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="actue",mappedBy="auteur")
     * @ORM\JoinColumn(name="fk_actue", referencedColumnName="id")
     */
    
    private $actue;
    
    function getActue() {
        return $this->actue;
    }

    function setActue($actue) {
        $this->actue = $actue;
    }

    
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
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
     * Set email
     *
     * @param string $email
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set motdepass
     *
     * @param string $motdepass
     * @return Utilisateur
     */
    public function setMotdepass($motdepass)
    {
        $this->motdepass = $motdepass;

        return $this;
    }

    /**
     * Get motdepass
     *
     * @return string 
     */
    public function getMotdepass()
    {
        return $this->motdepass;
    }

    /**
     * Set privilege
     *
     * @param array $privilege
     * @return Utilisateur
     */
    public function setPrivilege($privilege)
    {
        $this->privilege = $privilege;

        return $this;
    }

    /**
     * Get privilege
     *
     * @return array 
     */
    public function getPrivilege()
    {
        return $this->privilege;
    }
}
