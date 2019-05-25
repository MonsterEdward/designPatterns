<?php
class MyClass {
    const CONST_VALUE = 'A constant value';
}

$className = 'MyClass';
echo $className::CONST_VALUE, "\n", MyClass::CONST_VALUE;