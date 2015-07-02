<?php 
//https://www.hackerrank.com/challenges/sherlock-and-pairs
$handle = fopen("input.txt", "r");

$cases = (int)fgets($handle);
for($k = 1; $k <= $cases; $k++){
	$num = (int)fgets($handle);
	$str = trim(fgets($handle));
	$arr = explode(' ', $str);
	$av = array_count_values($arr);
	$av = quicksort($av);
	$c = count($av) - 1;
	$s=0;
		
	for($i = $c; $i>=0; $i--){
		$v = (int)$av[$i];
		if($v == 1 && $i == $c){
			echo "0\n";
			break;
		}
		else if($v > 1 && $i <= $c){
			$s += shake($v);
		}
		
	}
	if($s)
		echo ($s*2)."\n";
}

function quicksort( $array ) {
    if( count( $array ) < 2 ) {
        return $array;
    }
    $left = $right = array( );
    reset( $array );
    $pivot_key  = key( $array );
    $pivot  = array_shift( $array );
    foreach( $array as $k => $v ) {
        if( $v < $pivot )
            $left[$k] = $v;
        else
            $right[$k] = $v;
    }
    return array_merge(quicksort($left), array($pivot_key => $pivot), quicksort($right));
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
 ?>
