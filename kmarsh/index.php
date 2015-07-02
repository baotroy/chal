<?php
$handle = fopen("input.txt", "r");

$mn = explode(" ", fgets($handle));

$m = (int)$mn[0];
$n = (int)$mn[1];

$x=$n;
$y =$m;
$a=array();
for($i = 1; $i<= $m; $i++){
	$r = fgets($handle);
	if($i==1 || $i==$m){
		if(strpos($r,"x") !== FALSE ){
			$y--;
		}
	}
	if(strpos($r,"x") === 0 || strrpos($r,"x") === ($n-1)){
		$x--;
	}

}
if($x < 2 || $y < 2){
	echo 'impossible';
}else
{
	echo (2*($x-1) + 2*($y-1));
}
