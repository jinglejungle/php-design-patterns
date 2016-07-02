<?php

class Vendeur {

    protected $email;
    protected $nom;
    protected $adresse;
    
    protected static $instance = null;
    
   
    private function __construct(){
        
    }
    static function instance(){
        if(!isset(Vendeur::$instance)){
            Vendeur::$instance = new Vendeur();
        }
        return Vendeur::$instance;
    }
    
    function getNom() {
        return $this->nom;
    }
    function setNom($nom) {
        $this->nom = $nom;
    }
    
    function getEmail(){
        return $this->email;
    }   
    function setEmail($email){
        $this->email = $email;
    }
    
    function getAdresse() {
        return $this->adresse;
    }
    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }


}
