<?php
/**
 * Created by PhpStorm.
 * User: remig
 * Date: 05/01/2018
 * Time: 14:14
 */

namespace CRMBundle;


class Tache
{
    private $idTache;
    private $textTache;
    private $date;

    /**
     * Tache constructor.
     * @param $idTache
     * @param $textTache
     * @param $date
     */
    public function __construct($idTache, $textTache, $date)
    {
        $this->idTache = $idTache;
        $this->textTache = $textTache;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getIdTache()
    {
        return $this->idTache;
    }

    /**
     * @param mixed $idTache
     */
    public function setIdTache($idTache)
    {
        $this->idTache = $idTache;
    }

    /**
     * @return mixed
     */
    public function getTextTache()
    {
        return $this->textTache;
    }

    /**
     * @param mixed $textTache
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


}