<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Iterator
 *
 * @author sam
 */


class Iterateur {
    //put your code here
    
    protected $rechercher;
    protected $contenu = array();
    protected $index ; 
    
    function setRechercher($rechercher, $contenu){
        $this->rechercher = $rechercher;
        $this->contenu = $contenu;
    }
    
    function premier(){
      $this->index =-1;
      $this->suivant();
    }
    
    function suivant(){
        $this->index++;
        if( ($this->index<count($this->contenu))
             && (!$this->contenu[$this->index]->verifTrouver($this->rechercher)) ){
            $this->index++;
        }            
    }
    
    function item(){
        if($this->index< count($this->contenu)){
          return $this->contenu[$this->index] ;   
        }else{
            return NULL;
        }
    }
}
