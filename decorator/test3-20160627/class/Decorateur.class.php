<?php
namespace Decorateur3; 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Decorator
 *
 * @author sam
 */
class Decorateur implements InterfaceVehicule {
    protected $contenu;
    
    function __construct($contenu) {
       $this->contenu =$contenu ;
    }
    
    function affiche(){
        $this->contenu->affiche();
    }
}
