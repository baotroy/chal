<?php
$handle = fopen("input.txt", "r");

$cases = (int)fgets($handle);

for($i = 1; $i <= $cases; $i++){
	$s1 = fgets($handle);
	$s2 = fgets($handle);

	$a1 = str_split(trim($s1));
	$a2 = str_split(trim($s2));

	$a1= array_unique($a1);
	$a2= array_unique($a2);

	$mer = array_merge($a1, $a2);
	$cv = array_count_values($mer);
	
	$flg= false;
	foreach ($cv as $key => $value) {
		if($value > 1){
			echo 'YES'."\n";
			$flg = true;
			break;
		}
	}
	if(!$flg){
		echo 'NO'."\n"; 
	}
}