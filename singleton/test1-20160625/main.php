<?php

require "class/Vendeur.class.php";

$vendeur =Vendeur::instance();
$vendeur->setNom("sam");
$vendeur->setAdresse("Paris");
$vendeur->setEmail("test@gmail.com");

var_dump($vendeur);

$vendeur =Vendeur::instance();
var_dump($vendeur);



        


