<?php
// if we can't call constructor but call function than we can use static vriable because static variable has not object , if we can call constructor than we can create object.

// class class1{
//     static public $num1=10;
//     public $num2=20;
//     static function fun1(){
//         echo self::$num1;
//     }
// }
// echo class1::fun1();

class class1{
        static public $num=10;
        static function fun1(){
             self::$num++;
        }
    }

    class1::fun1();
    echo class1::$num;

    class1::fun1();
    echo class1::$num;

    class1::fun1();
    echo class1::$num;
    
?>
