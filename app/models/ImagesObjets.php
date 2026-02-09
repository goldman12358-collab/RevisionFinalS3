<?php
namespace app\models;

use Flight;

class ImagesObjets
{
    private $id;
    private $idObjets;
    private $libelle;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdObjets(){
        return $this->idObjets;
    }
    public function setIdObjets($idObjets)
    {
        $this->idObjets = $idObjets;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    } 
}