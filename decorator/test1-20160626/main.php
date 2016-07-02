<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require "class/ComposantVisuel.class.php";
require "class/VueVehicule.class.php";
require "class/Decorateur.class.php";
require "class/MarqueDecorateur.class.php";
require "class/LogoDecorateur.class.php";

$vueVehicule = new \Decorator\VueVehicule();
$decorateur = new \Decorator\LogoDecorateur($vueVehicule);
$decorateur = new \Decorator\MarqueDecorateur($decorateur);

$decorateur->affiche();
var_dump($decorateur);
