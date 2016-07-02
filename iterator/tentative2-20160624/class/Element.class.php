<?php


class Element {
    //put your code here
    protected $description ;
    
    function __construct($description) {
        $this->description = $description;
    }
    
    function affiche(){
        echo $this->description."<br>";
    }
    
    function rechercherTrouver($trouver){
        return strstr($this->description,$trouver) !== FALSE;
    }
}
