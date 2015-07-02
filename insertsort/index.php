<?php
$handle = fopen("input.txt", "r");
$cases = (int)fgets($handle);

for($i = 1; $i <= $cases; $i++){
	$n = (int)fgets($handle);
	$a = trim(fgets($handle));
	$a = explode(' ', $a);
	$a = insertionSort($a);
	echo $a."\n";
}


function insertionSort($array) {
    $length=count($array);
    $moves = 0;
    for ($i=1;$i<$length;$i++) {
        $element= (int)$array[$i];
        $j=$i;
        while($j>0 && (int)$array[$j-1]>$element) {
            //move value to right and key to previous smaller index
            $array[$j]=$array[$j-1];
            $j=$j-1;
            $moves++;
        }
        //put the element at index $j
        $array[$j]=$element;
    }
    return $moves;
}