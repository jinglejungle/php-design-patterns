<?php

require "class/Client.class.php";
require "class/ClientComptant.class.php";
require "class/ClientCredit.class.php";
require "class/Commande.class.php";
require "class/CommandeComptant.class.php";
require "class/CommandeCredit.class.php";

$clientCredit = new ClientComptant;
$clientCredit->nouvelleCommande("3500");
$clientCredit->nouvelleCommande("1500");
$clientCredit->nouvelleCommande("10000");
var_dump($clientCredit);

$clientComptant = new ClientCredit;
$clientComptant->nouvelleCommande("2220");
$clientComptant->nouvelleCommande("3333");
$clientComptant->nouvelleCommande("999");
var_dump($clientComptant);


