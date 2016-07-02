<?php


class Vendeur {

    protected $email;
    protected $adresse;
    protected $nom ;
    
    //static empeche d'acceder via une instance a une variable ou une fonction
    protected static $instance = null; 
     private function __construct() {
        
    }   
    public function setEmail($email){
        $this->email =$email;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setNom($nom){
        $this->nom =$nom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }    
    public function getAdresse(){
        return $this->adresse ;
    }
    

    
    public static function instance(){
        
        if ( !isset(Vendeur::$instance) ){
          Vendeur::$instance = new Vendeur();   
        }
        return Vendeur::$instance;
    }
}
