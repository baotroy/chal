<?php
$handle = fopen("input.txt", "r");

$sizeA = (int)fgets($handle);

$as = explode(" ", trim(fgets($handle)));
$asCount = array_count_values($as);

$sizeB = (int)fgets($handle);
$bs = explode(" ", trim(fgets($handle)));
$bsCount = array_count_values($bs);
$ao = array();
foreach ($bsCount as $key => $value) {
	if(isset($asCount[$key])){
		if((int)$value > (int)$asCount[$key]){
			array_push($ao, $key);
		}
	}
	else{
		array_push($ao, $key);
	}
}
function quick_sort($array)
{
	$length = count($array);
	
	if($length <= 1){
		return $array;
	}
	else{
	
		$pivot = $array[0];
		
		$left = $right = array();
		
		for($i = 1; $i < count($array); $i++)
		{
			if($array[$i] < $pivot){
				$left[] = $array[$i];
			}
			else{
				$right[] = $array[$i];
			}
		}
		return array_merge(quick_sort($left), array($pivot), quick_sort($right));
	}
}
$ao = quick_sort($ao);
echo implode(' ', $ao);