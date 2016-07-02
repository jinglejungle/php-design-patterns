<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehicule
 *
 * @author sam
 */
class Vehicule extends Element {
    //put your code here
    function __construct($description){
        $this->description = $description ;
    }
    
    function affiche(){
        echo $this->description."<br>";
    }
}
