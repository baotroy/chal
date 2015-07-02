<?php 
$handle = fopen("input.txt", "r");
$cases =(int)fgets($handle);
for($i = 1; $i <= $cases; $i++){
	$str = trim(fgets($handle));
	$num = (int)$str;
	$a = str_split($str);
	$s = 0;
	foreach ($a as $key => $value) {
		if($value=='0') continue;
		if($num % (int)$value == 0){
			$s++;
		}
	}
	echo $s."\n";
}

 ?>
