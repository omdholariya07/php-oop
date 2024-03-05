<?php
// abstact class contain atleast 1 abstract function
//abstract function : declare but not implement
//abstract class could not create object
//abstract class : child class must contain abstract function

abstract class bank{
    abstract function id_proof();
    function xyz(){

    }
}

class hdfc extends bank{
    function id_proof(){
       
    }
}

class axis extends bank{
    function id_proof(){
       
    }
}
?>