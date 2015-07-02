<?php
$handle = fopen("input.txt", "r");
$cases = (int)fgets($handle);

for($i=1; $i <= $cases; $i++) {
	$ip = explode(" ", fgets($handle));
	$n =  $ip[0];
	$div = (int)$ip[1];
	$lim = 10000000;
	var_dump($n);
			echo '<meta charset="utf-8"><pre>';
			print_r(opt($n));
			exit;
	$sep = array();
			echo '<meta charset="utf-8"><pre>';
			print_r($n/$lim);
			exit;
	if($n > $lim){
		
		while ($n/$lim > 0) {
			$remind = $n % $lim;
			$n = $n/$lim;
			$sep[] = $lim;
		};
		if($remind > 0){
			$sep[] = $remind;
		}
	}
			echo '<meta charset="utf-8"><pre>';
			print_r($sep);
			exit;
	//$ones= str_repeat(1, );
			echo '<meta charset="utf-8"><pre>';
			print_r(strlen($ones));
			exit;
	echo $ones%$div."\n";
}

function opt($n){
	$r = array();
	if(strlen($n) > 7){
		$r[] = substr($n, 0, 7);
	}
	$r[] = substr($n, 7);
	return $r;
}