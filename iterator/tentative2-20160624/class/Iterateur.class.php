<?php


class Iterateur {
    protected $contenu;
    protected $index;
    protected $rechercher;
    
    function __construct($contenu) {
        $this->contenu = $contenu;
    }
    function premier(){
        $this->index = -1;
        $this->suivant();     
    }
    
    function suivant(){
         $this->index++ ;

         if (($this->index < count($this->contenu)) 
                 &&  ( ! $this->contenu[$this->index]->rechercherTrouver($this->rechercher)))
         {
           $this->suivant();  
         }
    }
    
    function item(){  
        if($this->index <count($this->contenu)){
            return $this->contenu[$this->index];
        }else{
            return null;
        }
    }
    
    function setRechercher($rechercher){
        $this->rechercher = $rechercher;
    }
}
