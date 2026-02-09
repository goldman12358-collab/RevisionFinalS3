<?php
namespace app\models;

use Flight;

class PropositionsEchange
{
    private $id;
    private $idUserSource;
    private $idUserDestinataire;
    private $idObjetSource;
    private $idObjetDesiree;
    private $statusEchange;
    private $dateProposition;

    public function getId()
    {
        return $this->id;
    }
    public function setTd($id)
    {
        $this->id = $id;
    }

    public function getIdUserSource()
    {
        return $this->idUserSource;
    }
    public function setIdUserSource($idUserSource)
    {
        $this->idUserSource = $idUserSource;
    }

    public function getIdUserDestinataire()
    {
        return $this->idUserDestinataire;
    }
    public function setIdUserDestinataire($idUserDestinataire)
    {
        $this->idUserDestinataire = $idUserDestinataire;
    }

    public function getIdObjetSource()
    {
        return $this->idObjetSource;
    }
    public function setIdObjetSource($idObjetSource)
    {
        $this->idObjetSource = $idObjetSource;
    }

    public function getIdObjetDesiree()
    {
        return $this->idObjetDesiree;
    }
    public function setIdObjetDesiree($idObjetDesiree)
    {
        $this->idObjetDesiree = $idObjetDesiree;
    }

    public function getStatusEchange()
    {
        return $this->statusEchange;
    }
    public function setStatusEchange($statusEchange)
    {
        $this->statusEchange = $statusEchange; 
    }

    public function getDateProposition()
    {
        return $this->dateProposition;
    }
    public function setDateProposition($dateProposition)
    {        
        $this->dateProposition = $dateProposition;
    }
}