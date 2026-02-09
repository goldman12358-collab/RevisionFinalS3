<?php
namespace app\models;

use Flight;

class Comptes
{
    private $id;
    private $idUser;
    private $dateCreate;
    private $motdepasse;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdUser()
    {
        return $this->idUser;
    }
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    public function getDateCreate()
    {
        return $this->dateCreate;
    }
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;
    }

    public function getMotdepasse()
    {
        return $this->motdepasse;
    }
    public function setMotdepasse($motdepasse)
    {        
        $this->motdepasse = $motdepasse;
    }
}