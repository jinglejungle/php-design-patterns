<?php

require "class/Catalogue.class.php";
require "class/Iterateur.class.php";
require "class/Element.class.php";
require "class/Vehicule.class.php";

$catalogue = new Catalogue;
$catalogue->ajouter(new Vehicule("peugeot moto"));
$catalogue->ajouter(new Vehicule("fiat velo"));
$catalogue->ajouter(new Vehicule("peugeot voiture"));
$catalogue->ajouter(new Vehicule("renault voiteur"));
$iterateur = $catalogue->rechercher("peugeot");

$iterateur->premier();
$vehicule = $iterateur->item();

while(isset($vehicule)){
   $vehicule->affiche();
   
   $iterateur->suivant(); 
   $vehicule = $iterateur->item();
}


