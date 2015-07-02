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
echo '<meta charset="utf-8"><pre>';
print_r($matrix);
exit;

foreach ($matrix as $key => $value) {
	
	if(count($value) <2) continue;
	$even = 0;
	foreach ($value as $k => $v) {
		if($v%2==0){
			$even++;
		}
	}
	if($even>1){
		$cut+=count($value)-1;
	}
	
}

print_r($cut);
 ?>
