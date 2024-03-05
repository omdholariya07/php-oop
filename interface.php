<?php
// interface support multiple inheritence
//interface class could not create object
//it can only contain abstract function
//we can not define variable
//no constructor
//all function must be public

interface class1{
    public function test1();
}
interface class2{
    public function test2();
}

class class3 implements class1,class2{
    public function test1(){
       echo "test11";
    }
    public function test2(){
      echo "test22";
    }
}

$obj = new class3();
echo $obj->test2();
?>