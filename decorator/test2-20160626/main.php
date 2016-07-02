<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require "class/InterfaceDecorateur.class.php";
require "class/Decorateur.class.php";
require "class/Vendeur.class.php";
require "class/MarqueDecorateur.class.php";
require "class/LogoDecorateur.class.php";


$vendeur = new Vendeur("sam le vendeur");
$decorateur = new MarqueDecorateur(new LogoDecorateur($vendeur));
$decorateur->affiche();


