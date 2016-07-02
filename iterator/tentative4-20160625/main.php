<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require "class/Element.class.php";
require "class/Vehicule.class.php";
require "class/Catalogue.class.php";
require "class/Iterateur.class.php";

// on cree une collection d'objet

$catalogue = new Catalogue();
$catalogue->ajouter(new Vehicule("pistolet beretta"));
$catalogue->ajouter(new Vehicule("pistolet magnum"));
$catalogue->ajouter(new Vehicule("cran d'arret "));
$catalogue->ajouter(new Vehicule("pistolet winchester"));
$iterateur = $catalogue->rechercher("pistolet");



$iterateur->premier();
$vehicule = $iterateur->item();

while(isset($vehicule)){
    $vehicule->affiche();
    $iterateur->suivant();
    $vehicule = $iterateur->item();
}



