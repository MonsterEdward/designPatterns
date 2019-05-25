<?php
/*$arr = [
	['id'=>1, 'title' => 'G', 'pub' => 8],
	['id'=>2, 'title' => 'E', 'pub' => 2],
	['id'=>3, 'title' => 'F', 'pub' => 9],
	['id'=>4, 'title' => 'E', 'pub' => 2],
	['id'=>5, 'title' => 'G', 'pub' => 3]
];
//二维array按title，pub去重
function index($a, $k1, $k2) {
	$tmp_key = [];
	foreach ($a as $key => $val) {
		//print_r($val[$k1].$val[$k2].'<br>');
		if(in_array($val[$k1].$val[$k2], $tmp_key)) {
			
			unset($a[$key]);
		}else{
			$tmp_key[] = $val[$k1].$val[$k2];
		}
	}
	return $a;
}

echo '<pre>';
var_dump(index($arr, 'title', 'pub'));
echo '</pre>';
*/

/*$arr1 = ['U', 'z', 9, true, '100', null, '', 0.01, 'false', 9, 'z'];

echo '<pre>';
var_dump($arr1);
echo '</pre>';
echo '<br>';

echo '<pre>';
var_dump(array_filter($arr1));
echo '</pre>';
echo '<br>';

echo '<pre>';
var_dump(array_unique(array_filter($arr1)));
echo '</pre>';
echo '<br>';

echo '<pre>';
var_dump(array_values(rsort(array_unique(array_filter($arr1)))));
echo '</pre>';
*/

/*
$arr2 = [1, 2, 3, 4];

function f($arr, $num) {
	$tmp = array_filter(explode(',', str_repeat(implode(',', $arr).',', $num)));
	return $tmp;
}

echo '<pre>';
print_r(f($arr2, 3));
echo '</pre>';
*/

/*function monkey($m, $n) {
	$arr = range(1, $m);
	$i = 0;
	while(count($arr) > 1) {
		if(($i+1)%$n == 0) {
			unset($arr[$i]);
		}else{
			$arr[] = $arr[$i];
			unset($arr[$i]);
		}
		$i++;
	}
	return $arr[$i];
}
echo monkey(19, 100);
*/

/*
$arr = [2, 90, 3, 5, 100];
for($i=1;$i<count($arr);$i++) {
	for($j=0;$j<count($arr)-$i;$j++) {
		if($arr[$j] < $arr[$j+1]) {
			list($arr[$j+1], $arr[$j]) = [$arr[$j], $arr[$j+1]];
		}
	}
}

echo '<pre>';
var_dump($arr);
echo '</pre>';

$arr1 = [2, 90, 3, 5, 100];
for($i=0;$i<count($arr1);$i++) {
	//
}
*/

$arr = ['a', 'c', 'r', 't', 'x'];
list($z, $p, $m, $q, $w) = $arr;
var_dump($z, $p, $m, $q, $w);
