<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Log
 *
 * @author sam
 */

namespace Decorator;

class LogoDecorateur extends Decorateur{
    //put your code here
    
    function __construct($composant){
        parent::__construct($composant);
    }
    function logo(){
        echo "<img src='' title='logo'><br>";
    }
    function affiche(){
        $this->logo();
        parent::affiche();

    }
}
