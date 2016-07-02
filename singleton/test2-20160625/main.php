<?php

require "class/Vendeur.class.php" ;

$vendeur = Vendeur::instance();
$vendeur->setName("sam");
$vendeur->setAdresse("Paris");
$vendeur->setEmail("test@gmail.com");
var_dump($vendeur);
$vendeur = Vendeur::instance();
$vendeur->setName("alain");
var_dump($vendeur);




