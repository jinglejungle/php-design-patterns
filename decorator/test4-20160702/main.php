<?php

require 'class/DecorateurInterface.php';
require 'class/Decorateur.class.php';
require 'class/DecorateurBold.class.php';
require 'class/DecorateurH.class.php';
require 'class/VueVehicule.class.php';

$vueVehicule =   new decorateurH ( new DecorateurBold(new VueVehicule));
$vueVehicule->affiche();





