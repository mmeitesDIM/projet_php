<?php

// Nous créons une classe « Eleve».
error_reporting(E_ALL);
ini_set("display_errors",1);
include_once("./Eleve.php");
include_once("./Database.php");

/*$eleve1 = new Eleve("Servettaz", "Laurent", 20, 12);

//$eleve1->afficher();
echo "l'élève1 se nomme " . $eleve1->getPrenom() . " " . $eleve1->getNom() . "<br />";
echo 'Il a ' . $eleve1->getAge() . " ans <br />";*/

$db = new Database();
$eleves  = $db->getEleves();
foreach ($eleves  as $eleve )
{
//    /**
//     * @var $eleve Eleve
//     *
//     */
    if (!$eleve instanceof Eleve)
        continue;

    print( $eleve->getNom());
}
//print_r ($eleves) ;