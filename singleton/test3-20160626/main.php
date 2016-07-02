<?php

require "class/Vendeur.class.php";

$vendeur = Vendeur::instance();
$vendeur->setNom("samuel");
$vendeur->setEmail("test@gmail.com");
$vendeur->setAdresse("Paris");
var_dump($vendeur);

$vendeur = Vendeur::instance();
$vendeur->setNom("coco");

var_dump($vendeur);

