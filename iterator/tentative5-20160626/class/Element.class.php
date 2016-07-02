<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Element
 *
 * @author sam
 */



class Element {
    protected $description;

    function __construct($description){
        $this->description =$description;
    }
    
    
    function verifTrouver($rechercher){
        return strstr($this->description,$rechercher) !== FALSE ;
    }
}


