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
 * Class Tache
 * @ORM\Entity
 * @package CRMBundle\Entity*Class Note
 */
class Tache
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTache;
    /**
     * @ORM\Column(type="text",length=1000)
     */
    private $textTache;
    /**
     * @ORM\Column(type="date")
     */
    private $date;
    /**
     * @ORM\Column(type="boolean")
     */
    private $fait;
    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="taches")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="idClient")
     */
    private $client;

    /**
     * Tache constructor.
     * @param $idTache
     * @param $textTache
     * @param $date
     * @param $fait
     */
    public function __construct()
    {

    }
    public function __construct1($idTache, $textTache, $date, $fait)
    {
        $this->idTache = $idTache;
        $this->textTache = $textTache;
        $this->date = $date;
        $this->fait = $fait;
    }

    /**
     * @return integer
     */
    public function getIdTache()
    {
        return $this->idTache;
    }

    /**
     * @param integer $idTache
     */
    public function setIdTache($idTache)
    {
        $this->idTache = $idTache;
    }

    /**
     * @return string
     */
    public function getTextTache()
    {
        return $this->textTache;
    }

    /**
     * @param string $textTache
     */
    public function setTextTache($textTache)
    {
        $this->textTache = $textTache;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return boolean
     */
    public function getFait()
    {
        return $this->fait;
    }

    /**
     * @param boolean $Fait
     */
    public function setFait($Fait)
    {
        $this->fait = $Fait;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }


}