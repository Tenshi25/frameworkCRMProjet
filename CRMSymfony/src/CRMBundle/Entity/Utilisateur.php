<?php
/**
 * Created by PhpStorm.
 * User: remig
 * Date: 05/01/2018
 * Time: 14:12
 */
namespace CRMBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Client
 * @ORM\Entity
 * @package CRMBundle\Entity*Class Client
 */

class Utilisateur
{

    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
private $id ;
/**
 * @ORM\Column(type="string",length=255)
 */
private $login ;
    /**
     * @ORM\Column(type="string",length=255)
     */
private $mdp ;

    /**
     * Utilisateur constructor.
     * @param $id
     * @param $login
     * @param $mdp
     */
    public function __construct()
    {
    }
    public function __construct1($id, $login, $mdp)
    {
        $this->id = $id;
        $this->login = $login;
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }
}
