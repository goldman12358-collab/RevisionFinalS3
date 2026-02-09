<?php
namespace app\models;

use Flight;

class Echange
{
    private $id;
    private $idProposition;
    private $dateEchangeFait;

    public function getId()
    {
        return $this->id;
    }
    public function setTd($id)
    {
        $this->id = $id;
    }

    public function getIdProposition()
    {
        return $this->idProposition;
    }
    public function setIdProposition($idProposition)
    {
        $this->idProposition = $idProposition;
    }

    public function getDateEchangeFait()
    {
        return $this->dateEchangeFait;
    }
    public function setDateEchangeFait($dateEchangeFait)
    {        
        $this->dateEchangeFait = $dateEchangeFait;
    }
}