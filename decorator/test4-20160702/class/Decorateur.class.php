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
class Decorateur implements DecorateurInterface {
    protected $element;
    
    function __construct($element) {
        $this->element = $element;
    }
    
    function affiche(){
        $this->element->affiche();
    }
    
}
