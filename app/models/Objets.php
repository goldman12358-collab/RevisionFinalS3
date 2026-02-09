<?php
namespace app\models;

use Flight;

class Objets
{
    private $id;
    private $nom;
    private $objetdescription;
    private $idUserProprietaire;
    private $idCategorie;
    private $dateMiseEnLigne;
    private $prixEstimatif;
    private $statusObjets;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getObjetdescription()
    {
        return $this->objetdescription;
    }
    public function setObjetdescription($objetdescription)
    {
        $this->objetdescription = $objetdescription;
    }

    public function getIdUserProprietaire()
    {
        return $this->idUserProprietaire;
    }
    public function setIdUserProprietaire($idUserProprietaire)
    {
        $this->idUserProprietaire = $idUserProprietaire;
    }

    public function getIdCategorie()
    {
        return $this->idCategorie;
    }
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;
    }

    public function getDateMisEnligne()
    {
        return $this->dateMiseEnLigne;
    }
    public function setDateMisEnligne($dateMiseEnLigne)
    {
        $this->dateMiseEnLigne = $dateMiseEnLigne;
    }

    public function getPrixEstimatif()
    {
        return $this->prixEstimatif;
    }
    public function setPrixEstimatif($prixEstimatif)
    {
        $this->prixEstimatif = $prixEstimatif;
    }

    public function getStatusObjets()
    {
        return $this->statusObjets;
    }
    public function setStatusObjets($statusObjets)
    {
        $this->statusObjets = $statusObjets;
    }
}