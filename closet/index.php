<?php
$handle = fopen("input.txt", "r");
$size = (int)fgets($handle);
$str = fgets($handle);
$a = explode(' ', $str);
$a = quicksort($a);

$res = array();
$id = -1;
$min = false;
for($i=0; $i< $size-1; $i++){
	//for($j = ($i+1); $j<count($a); $j++){
		$idx = abs($a[$i] - $a[$i+1]);
		if(empty($res)){

			$id = $idx;
			$res[0] = $a[$i];
			$res[1] = $a[$i+1];

			continue;
		}

		if($idx == $id){
			$res[] = $a[$i];
			$res[] = $a[$i+1];

		} else
		if($idx < $id){

			$id = $idx;
			$res = array();
			$res[0] = $a[$i];
			$res[1] = $a[$i+1];

		}

//	}
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
$res = quicksort($res);
$out ="";
foreach( $res as $k => $v ) {
	$out .= $v." ";
}
echo substr($out, 0, strlen($out)-1);
?>