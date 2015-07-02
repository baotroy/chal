<?php
$handle = fopen("input.txt", "r");

$str1 = fgets($handle);
$str2 = fgets($handle);
// $str1 ='cde';
// $str2 ='abc';

$a1 = str_split(trim($str1));

$a2 = str_split(trim($str2));

$am = array_merge($a1, $a2);

$count = array_count_values($am);
		// echo '<meta charset="utf-8"><pre>';
		// print_r($am);
		// exit;
$s=0;
foreach($count as $i){
	if($i == 1){
		$s+=1;
	}
}

echo $s;