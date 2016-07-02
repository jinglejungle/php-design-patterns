<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DecorateurH
 *
 * @author sam
 */
class DecorateurH extends Decorateur{
    
    public function __construct($element) {
        parent::__construct($element);
    }
    
    function affiche(){
        echo "<h1>";
        parent::affiche();
        echo "</h1>";
    }
}
