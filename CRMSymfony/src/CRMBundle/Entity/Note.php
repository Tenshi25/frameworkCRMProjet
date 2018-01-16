<?php
/**
 * Created by PhpStorm.
 * User: remig
 * Date: 05/01/2018
 * Time: 14:41
 */

namespace CRMBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Note
 * @ORM\Entity
 * @package CRMBundle\Entity*Class Note
 */


class Note
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
private $id ;
    /**
     * @ORM\Column(type="text",length=5000)
     */
private $textenote ;


    /**
     * Note constructor.
     * @param $id
     * @param $textenote
     */
    public function __construct($id, $textenote)
    {
        $this->id = $id;
        $this->textenote = $textenote;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTextenote()
    {
        return $this->textenote;
    }

    /**
     * @param string $textenote
     */
    public function setTextenote($textenote)
    {
        $this->textenote = $textenote;
    }

}