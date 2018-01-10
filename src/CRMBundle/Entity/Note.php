<?php
/**
 * Created by PhpStorm.
 * User: remig
 * Date: 05/01/2018
 * Time: 14:41
 */

namespace CRMBundle;


class Note
{
private $id ;
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
    public function getTextenote()
    {
        return $this->textenote;
    }

    /**
     * @param mixed $textenote
     */
    public function setTextenote($textenote)
    {
        $this->textenote = $textenote;
    }

}