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

            $conn = mysqli_connect('mysql:host=localhost', 'root', 'root');
            $this->bdd = mysqli_select_db('dbname=projet', $conn );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * @param PDO $bdd
     */
    public function getEleves(): array
    {
        $request = $this->bdd->query('SELECT ID, NOM, PRENOM, AGE, FROM eleve');
        if (!$request)
            return [];
        while ($eleve = $request->fetchAll()) // Chaque entrée sera récupérée et placée dans un array.
        {
            echo $eleve['nom']. ' '. $eleve['prenom']. ' '. $eleve['age'];
        }
        return $request;
    }
}