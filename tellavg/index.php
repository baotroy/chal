<?php
$handle = fopen("input.txt", "r");
$cases = (int)fgets($handle);

$arr_str = fgets($handle);
$arr = explode(" ", $arr_str);
		// echo '<meta charset="utf-8"><pre>';
		// print_r($arr);
		// exit;
$i=1;
while($i < count($arr)){
	$a = $arr[0];
	$b = $arr[$i];
	$apb = bcadd($a, $b, 1);
	$amb = gmp_strval(gmp_mul($a, $b));
	$arr[0] = bcadd($apb, ($amb));
	$arr[0] = gmp_strval(gmp_mod($arr[0], '1000000007'));
	$i++;
}
echo $arr[0];
//echo gmp_strval(gmp_mod($arr[0], '1000000007'));