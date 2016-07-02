<?php

// creer un client qui possede un tableau de commandes
//nouvelle commande

require("class/Client.class.php");
require("class/ClientComptant.class.php");
require("class/ClientCredit.class.php");
require("class/Commande.class.php");
require("class/CommandeComptant.class.php");
require("class/CommandeCredit.class.php");


$clientComptant = new ClientComptant;
$clientComptant->nouvelleCommande("457");
$clientComptant->nouvelleCommande("600");
$clientComptant->nouvelleCommande("700");
var_dump($clientComptant);

$clientCredit = new ClientCredit;
$clientCredit->nouvelleCommande("300");
$clientCredit->nouvelleCommande("1500");
$clientCredit->nouvelleCommande("4500");
$clientCredit->nouvelleCommande("6500");

var_dump($clientCredit);


