<?php
$handle = fopen("input.txt", "r");

$cases = (int)fgets($handle);

for($i=1; $i <= $cases; $i++) { 
	$num = fgets($handle);
	for ($j=0; $j < strlen($num)-1; $j++) { 
		for ($k=$j+1; $k <strlen($num) ; $k++) { 
			$n1=(int)($num[$j].$num[$k]);
			$n2=(int)($num[$k].$num[$j]);
			if($n1%8==0 || $ $n2%8==0){
				echo 'YES'."\n";
			}
		}
	}
}