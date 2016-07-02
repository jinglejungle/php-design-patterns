<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vendeur
 *
 * @author sam
 */
class Vendeur {
    protected $name;
    protected $adresse;
    protected $email;
    protected static $instance=null;
    
    private function __construct(){
        
    }
    
    function setName($name){
        $this->name= $name;
    }
    
    function getName(){
        return $this->name;
    }
    
    function setAdresse($adresse){
        $this->adresse = $adresse;
    }
    
    function getAdresse(){
        return $this->adresse;
    }
    
    function setEmail($email){
        $this->email = $email;
    }
    
    function getEmail(){
        return $this->email ;
    }
    
    public static function instance(){
        if(!isset(Vendeur::$instance)){
            Vendeur::$instance = new Vendeur();
        }
        return Vendeur::$instance;
    }
}
