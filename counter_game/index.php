<?php
$handle = fopen("input.txt", "r");
$cases = (int)fgets($handle);
//$num =18446744073709551616;
//var_dump(pow(2,5));
for($i=1; $i <= $cases; $i++) {
	$num = (int)fgets($handle);
	if($num == 1){
		echo "Louise\n";
	}else{
		$step = 0;
		while($num > 1){
				echo $num. '    '.$step. "<br>";
			if(isPowOfTwo($num)){
				$num = $num/2;
				$step++;
			}else{
				$num = $num - findMinPow($num);
				$step++;
			}
		
			if($num == 1){
					
				if($step%2==0){
					echo $step."    ".$num."   Louise\n"; 
				}else{
					echo $step."    ".$num."   Richard\n"; 
				}
				continue;
			}
			//else
			
		}
		// if($step%2==0){
		// 	echo "Louise\n"; 
		// }else{
		// 	echo "Richard\n"; 
		// }
	}
}

function isPowOfTwo($n, &$i=0){
	while($n > 2){
		if($n%2 == 0){
			$n = $n / 2;
		}
		else{
			return false;
		}
	};
	if($n==2) return true;

	
	return false;
}

function findMinPow($n){
	$i = 0;
	$re=0;
	while($re=pow(2, $i) < $n){
		$i ++;
	};
	return pow(2, --$i);
}