<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Decorator;

abstract class Decorateur implements ComposantVisuel{
    protected $composant;
    
    function __construct(ComposantVisuel $composant) {
        $this->composant = $composant ;
    }
    
    function affiche() {
        $this->composant->affiche();
    }
}