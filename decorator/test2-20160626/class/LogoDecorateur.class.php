<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogoDecorateur
 *
 * @author sam
 */
class LogoDecorateur extends Decorateur {
    //put your code here
    
    function __construct(InterfaceDecorateur $element ) {
        parent::__construct($element);
    }
    
    function affiche(){
        echo "<b>";
        parent::affiche();
        echo "</b>";
    }
}
