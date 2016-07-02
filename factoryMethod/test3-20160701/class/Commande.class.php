<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Commande
 *
 * @author sam
 */
abstract class Commande {
   protected $montant;
   
   function __construct($montant) {
       $this->montant = $montant;
   }
   abstract function paye();
   abstract function valide();
}
