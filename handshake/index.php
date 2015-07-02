<?php
$handle = fopen("input.txt", "r");
$cases = (int)fgets($handle);


for($i=1; $i <= $cases; $i++) { 
	$n = (int)fgets($handle);
	echo shake($n)."\n";
}

function shake($n){
	if($n == 1) return 0;
	if($n == 2)
		return 1;
	// if($n == 3)
	// 	return 3;
	$m = $n - 1;
	$odd = $m%2;
	$even = round($m/2,0,PHP_ROUND_HALF_DOWN);
			
	$re = $even*$n;

	if($odd == 0){
		return $re;
	}
	if($odd == 1){
		$r = $even + 1;
		return $re+$r;
	}
}