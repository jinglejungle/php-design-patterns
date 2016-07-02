<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MarqueDecorateur
 *
 * @author sam
 */
namespace Decorator;

class MarqueDecorateur extends Decorateur{
    //put your code here
    function __construct( $composant) {
        parent::__construct($composant);
    }
    function marque(){
        echo "<img src='' title='marque'><br>";
    }
    function affiche(){
        $this->marque();
        parent::affiche();
    }
}
