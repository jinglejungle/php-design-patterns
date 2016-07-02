<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Decorateur
 *
 * @author sam
 */
class Decorateur implements InterfaceDecorateur{
    protected  $composant;
            
    function __construct($composant) {
        $this->composant = $composant;
    }
    
    function affiche(){
      $this->composant->affiche();
    }
}
