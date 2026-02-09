<?php
namespace app\models;

use Flight;

class ImagesCategorieObjets
{
    private $id;
    private $idCatObjets;
    private $libelle;

     public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdCatObjets()
    {
        return $this->idCatObjets;
    }
    public function setIdCatObjets($idCatObjets)
    {
        $this->idCatObjets = $idCatObjets;
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