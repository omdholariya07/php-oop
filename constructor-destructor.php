<?php
class class1{
    
    function __construct($y){
       // echo "hello";
       $this->x=$y;
    }
    function fun1(){
       // echo "fun1";
       echo $this->x;
    }
    function __destruct(){
       // echo "end";
    }
}

$obj = new class1(20);
$obj->fun1();
?>