<?php
/**
 * Created by PhpStorm.
 * User: digital
 * Date: 2019-01-14
 * Time: 11:12
 */

class Eleve
{

    private $nom;

    private $prenom;

    private $age;



    public function __construct($_nom,$_prenom,$_age)
    {
        $this->nom =$_nom;
        $this->prenom =$_prenom;
        $this->age = $_age;
    }

    public function getNom():string
    {
        return $this->nom  ;
    }

    public function getPrenom():string
    {
        return $this->prenom ;
    }

    public function getAge():int
    {
        return $this->age ;
    }

    // Nous déclarons une méthode dont le seul but est d'afficher un texte.
    public function afficher()

    {
        echo 'nom = '. $this->nom.' prenom = '.$this->prenom .' age = '.$this->age;
    }

}