<?php
/**
 * Created by PhpStorm.
 * User: remig
 * Date: 05/01/2018
 * Time: 14:14
 */

namespace CRMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Client
 * @ORM\Entity
 * @package CRMBundle\Entity*Class Client
 */

class Client
{
    /**
     * @ORM\Column(name="idClient",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idClient;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nom ;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom ;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email ;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $societe ;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel ;
    /**
     * @ORM\Column(type="string", length=10)
     */
    private $ville ;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $departement ;

    /**
     * @return integer
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param integer $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * @param string $societe
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;
    }

    /**
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param string $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * @param string $departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }



}