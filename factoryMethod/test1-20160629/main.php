<?php

abstract class fabriqueAnimal{
    abstract function fabriquer();
   
}

class fabriqueLion extends fabriqueAnimal{
    function fabriquer(){
        $class= "lion";
        if(class_exists($class)){
            return(new $class);
        }
    }
}


class fabriqueElephant extends fabriqueAnimal{
    function fabriquer(){
        $class= "elephant";
        if(class_exists($class)){
            return(new $class);
        }
    }
}

class fabriqueZebre extends fabriqueAnimal{
    function fabriquer(){
        $class= "zebre";
        if(class_exists($class)){
            return(new $class);
        }
    }
}


class lion{ 
    protected $animal ="lion";
};

class zebre{ 
    protected $animal ="zebre";
};

class elephant{ 
    protected $animal ="elephant";
};

class zoo{
    protected $contenu = array();
    
    function __construct(){
       $lion = new fabriqueLion;
       $this->ajouter($lion->fabriquer());
       $zebre = new fabriqueZebre;
       $this->ajouter($zebre->fabriquer());
       $elephant = new fabriqueElephant;
       $this->ajouter($elephant->fabriquer());
    }
    
    function ajouter($contenu){
      $this->contenu[] = $contenu ;   
    }
}

$zoo = new zoo();
var_dump($zoo);




