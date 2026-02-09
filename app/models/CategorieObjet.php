<?php
namespace app\models;

use Flight;

class CategorieObjet
{
    private $id;
    private $libelle;
    private $descriptionCategories;

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

    public function getDescriptionCategories()
    {
        return $this->descriptionCategories;
    }
    public function setDescriptionCategories($descriptionCategories)
    {
        $this->descriptionCategories = $descriptionCategories;
    }
}