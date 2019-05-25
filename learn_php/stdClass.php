<?php
//stdClass可作为基类使用,其最大特点是,其派生类可自动添加成员变量,无需在定义时说明
//避免了需先声明class a{}再实例化,再添成员变量
$a = [];
$a = (object)$a;
$a->a = 1;
$a->b = false;
$a->c = 'C';
var_dump($a);
echo '<br>';

//取代数组
$b = new stdClass();
$b->name = 'Mike';
$b->age = 29;
var_dump($b);
echo '<br>';

$c = ['A' => 1, 'B' => 'b'];
$c = (object)$c;
$c->id = 101;
$c->name = 'Jane';
var_dump($c);
echo '<br>';

$d = ['A' => 1, 'B' => 'b'];
$d = (object)$d;
$d = new stdClass();
$d->id = 101;
$d->name = 'Jane';
var_dump($d);
/*
1.返回特定数据类型时,使用stdClass,如:$person->name = 'John';$person->sex = 'male';$person->age = 28;
2.返回同数据类型时,使用array,如:$persons = ['Maria', 'Jerry', 'Tom'];
3.返回特定类型的列表时,stdClass与array并用,如:$person[0]->name = 'Sam';$person[0]->sex = 'male';$person[0]->age = 29;
$person[1]->name = 'Alice';$person[1]->sex = 'female';$person[1]->age = 30;
*/