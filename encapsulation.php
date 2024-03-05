<?php

class class1{
    protected $num;

    function __construct(){
        $this->num=1;
    }
    function getnum(){
        return $this->num;
    }
}

$obj = new class1;
echo $obj->getnum();
?>
