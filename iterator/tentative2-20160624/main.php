<?php

require "class/Element.class.php";
require "class/Vehicule.class.php";
require "class/Catalogue.class.php";
require "class/Iterateur.class.php";

$catalogue = new Catalogue();
$catalogue->ajouter(new Vehicule("vehicule peugeot"));
$catalogue->ajouter(new Vehicule("scooter renaul"));
$catalogue->ajouter(new Vehicule("moto peugeot"));
$catalogue->ajouter(new Vehicule("velo fiat"));

$iterateur = $catalogue->rechercher("peugeot");
$iterateur->premier();
$vehicule = $iterateur->item();
while(isset($vehicule)){
    $vehicule->affiche();
    
    $iterateur->suivant();
   $vehicule = $iterateur->item(); 
}



