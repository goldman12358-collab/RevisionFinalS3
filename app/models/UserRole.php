<?php
namespace app\models;

use Flight;

class UserRole
{
    private $id;
    private $libelle;

    public function getId()
    {
        return $this->id;
    }
    public function setTd($id)
    {
        $this->id = $id;
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