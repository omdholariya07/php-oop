<?php

class class1{
    function __construct(){
        $this->num=1;
       // echo "constructor1";
    }
    function fun1(){
        echo "fun1";
    }
}

class class2 extends class1{
    function __construct(){
        parent:: __construct();
        echo "constructor2";
        $this->num=2;
    }
    function fun1(){
        parent::fun1();
        echo "fun2";
    }
} 

$obj = new class2;
echo $obj->num;
//$obj->fun1();

?>