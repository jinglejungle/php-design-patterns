<?php

require "class/Element.class.php";
require "class/Vehicule.class.php";
require "class/Catalogue.class.php";
require "class/Iterateur.class.php";

// on cree le catalogue
// on cree 3 vehicule que l'on ajoute au catalogue
// on recupere un objet contenant la collection correspondant à la recherche
// on parcourt la collection

$catalogue = new Catalogue("catalogue de vehicule");
$catalogue->ajouter( new Vehicule("vehicule essence peugeot"));
$catalogue->ajouter( new Vehicule("vehicule electrique peugeot"));
$catalogue->ajouter( new Vehicule("vehicule diesel renaul"));

var_dump($catalogue);

$iterateur = $catalogue->rechercher("peugeot");
$iterateur->premier();
$vehicule = $iterateur->item() ;


while(isset($vehicule)){
    $vehicule->affiche();
    $iterateur->suivant();
    $vehicule = $iterateur->item();
}

        
