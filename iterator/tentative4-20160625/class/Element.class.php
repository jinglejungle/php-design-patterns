<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class element{
    protected $description;
    
    function __construct($description) {
        $this->description = $description;
    }
    
    function trouverRecherche($rechercher){
        return strstr($this->description, $rechercher)!==FALSE;
    }
}
