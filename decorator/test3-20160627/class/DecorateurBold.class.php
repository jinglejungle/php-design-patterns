<?php
namespace Decorateur3; 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DecorateurBold
 *
 * @author sam
 */
class DecorateurBold extends Decorateur{
    function __construct($contenu){
        parent::__construct($contenu);
    }
    
    function affiche(){
        echo "<b>";
        parent::affiche();
        echo "</b>";
    }
}
