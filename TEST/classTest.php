<?php
class SimpleClass {}

$instance = new SimpleClass();

$assigned = $instance;
$reference =& $instance;

//var_dump($instance, $reference, $assigned);
echo "\n";

$instance->var = 10;
$reference1 =& $instance;
$instance->var++;


var_dump($instance, $reference, $reference1, $assigned);
echo "\n";
$instance = null;
//var_dump($instance, $reference, $assigned);

