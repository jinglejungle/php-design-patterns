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
    
    //pas bon
    protected $nom;
    protected $email;
    protected static $instance = null ;
     

    
    private function __construct() {
        
    }
       static function instance(){
        if(!isset(Vendeur::$instance)){
            Vendeur::$instance = new Vendeur();
        }
        return Vendeur::$instance;
    }

    public function setNom($nom){
        $this->nom =$nom;   
    }
    
    public function setEmail($email){
        $this->email =$email;
    }
    
    public function getNom(){
        return $this->nom;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
}
