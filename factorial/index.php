<?php
$handle = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
function factorial($number){
    if ($number < 2) { 
        return 1; 
    } else { 
        return ($number * factorial($number - 1)); 
    }
}
$lim=10000000000000000;
$cases = (int)fgets($handle);

		echo '<pre>';
		// print_r(number_format(factorial(30), 0, '', ''));
		// exit;
for($i=1; $i <= $cases; $i++) { 
	$n = (int)fgets($handle);
	for($j=1; $j <= $lim; $j++){
		$f= factorial($j);
		$f= number_format($f, 0, '', '');
		if(strlen($f) <= $n){
			continue;
		}

		$tail = substr($f, strlen($f) - $n);
		
		if(substr_count($tail, '0') == $n){
			echo $j."\n";
			break;
		}
	}
}
?>