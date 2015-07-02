<?php 
$handle = fopen("input.txt", "r");

$num = (int)fgets($handle);
$str = fgets($handle);

$a = explode(' ', $str);

//$a = array_unique($a);

$a = quicksort($a);

// $first = $a[0];
// $end = end($a);
// $med = ($first + $end)/2;
$m =0;
$lim = round($num/2,0,PHP_ROUND_HALF_DOWN);
for($i = 0; $i < $lim; $i++){
	// if((int)$a[$i] == $med){
	// 	echo $med;
	// 	break;
	// }
	// if((int)$a[$i] > $med){
	// 	//var_dump((int)$a[$i]);
	// 	$pre = $med - ((int)$a[$i-1]);
	// 	$nex = (int)$a[$i] - $med;
			
	// 	if($pre<$nex)
	// 		echo $pre;
	// 	else echo $nex;
	// 	break;
	// }
	if(!$m){
		$m = ((int)$a[$i] + (int)$a[$num - $i - 1])/2;	
	}
	else{
		$m = (((int)$a[$i] + (int)$a[$num - $i -1])/2 + $m)/2;
	}
	
}
echo (int)$m;

function quicksort( $array ) {
    if( count( $array ) < 2 ) {
        return $array;
    }
    $left = $right = array( );
    reset( $array );
    $pivot_key  = key( $array );
    $pivot  = array_shift( $array );
    foreach( $array as $k => $v ) {
        if( (int)$v < (int)$pivot )
            $left[$k] = $v;
        else
            $right[$k] = $v;
    }
    return array_merge(quicksort($left), array($pivot_key => $pivot), quicksort($right));
}
?>