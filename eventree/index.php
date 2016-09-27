<?php 
$handle = fopen("input.txt", "r");
$str = fgets($handle);
$ex = explode(' ', $str);
$n = (int)$ex[0];
$m = (int)$ex[1];
$matrix = array();
for($i=1;$i<=$m;$i++){
	$str = fgets($handle);
	$ex = explode(' ', $str);
	$matrix[(int)$ex[1]][]=(int)$ex[0];
}
$top = array();
$cut = 0;

foreach ($matrix as $key => $value) {
	
	if(count($value) <2) continue;
	$even = 0;
	foreach ($value as $k => $v) {
		if($v%2==0){
			// $z=isCut($v, $key, $matrix);
			// echo '<meta charset="utf-8"><pre>';
			// print_r($z);
			//exit;
			if($z=isCut($v, $key, $matrix)){
				// echo '<meta charset="utf-8"><pre>';
				// echo '<br>';
				// echo $v;
				// echo '<br>';
				// print_r($z);
				
				// //exit;
				$cut++;	
			}
			
		}
	}
	if($even>1){
		$cut+=count($value)-1;
	}
	
}
echo $cut;
function isCut($top, $root, &$matrix){
	$c=0;
	// echo '<meta charset="utf-8"><pre>';
	// print_r($top);
	// echo '<br>';
	
	// print_r($matrix[$top]);
	// echo '<br>';
	// //print_r($root);
	// exit;
	
	if(isset($matrix[$top])){
		if($top%2==0 && count($matrix[$top])>=2) return 1;
		foreach ($matrix[$top] as $key => $value) {
			if($value!=$root && $value%2==0){
				$c++;
				unset($matrix[$top][$root]);
			}
			if($c==1)
				return $c;
		}
	}
	return false;
}



 ?>
