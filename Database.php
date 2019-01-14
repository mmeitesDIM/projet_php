<?php
/**
 * Created by PhpStorm.
 * User: digital
 * Date: 2019-01-14
 * Time: 13:23
 */

class Database
{
    private $bdd;

    public function __construct()
    {
        try {

//            $this->bdd = new mysqli('localhost', 'root', 'root','projet');

        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * @param PDO $bdd
     */
    public function getEleves(): array
    {
        $this->bdd = new mysqli('localhost', 'root', 'root','projet');

        $request = $this->bdd->query('SELECT ID, NOM, PRENOM, AGE FROM eleve');
        $eleves = [];
        while ($eleve = $request->fetch_assoc()) // Chaque entrée sera récupérée et placée dans un array.
        {
//            echo $eleve['NOM']. ' '. $eleve['PRENOM']. ' '. $eleve['AGE']."<br>";
            $eleve1 = new Eleve($eleve['NOM'], $eleve['PRENOM'], $eleve['AGE']);
            array_push($eleves, $eleve1);
        }
        return $eleves;
    }
}