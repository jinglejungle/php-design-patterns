<?php

require "class/Catalogue.class.php" ;
require "class/Element.class.php" ;
require "class/Vehicule.class.php" ;
require "class/Iterateur.class.php" ;


$catalogue = new Catalogue() ;
$catalogue->ajouter(new Vehicule("peugeot scooter") );
$catalogue->ajouter(new Vehicule("renault scooter") );
$catalogue->ajouter(new Vehicule("peugeot moto") );
$catalogue->ajouter(new Vehicule("alfo scooter") );
$iterateur = $catalogue->rechercher("peugeot");

$iterateur->premier();
$vehicule = $iterateur->item();

while(isset($vehicule)){
    $vehicule->affiche();
    
    $iterateur->suivant();
    $vehicule = $iterateur->item();
} 
        


