<?php

include("test1.php");
include("test2.php");
// test1\hello();
// echo "<br>";
// test2\hello();

$obj=new test2\abc;
$obj->hello();
?>