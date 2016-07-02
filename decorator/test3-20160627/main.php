<?php

namespace Decorateur3; 

//on va creer un element
require("class/InterfaceVehicule.class.php");
require("class/Vehicule.class.php");
require("class/Decorateur.class.php");
require("class/DecorateurBold.class.php");
require("class/DecorateurH.class.php");

// on creer un decorator

$vehicule = new \Decorateur3\Vehicule;
$decorateur = new \Decorateur3\DecorateurH(new \Decorateur3\DecorateurBold($vehicule));
$decorateur->affiche();


