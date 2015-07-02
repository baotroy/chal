<?php
$handle = fopen("input.txt", "r");
$cases = (int)fgets($handle);

for($i = 1; $i <= $cases; $i++){
	$n = gmp_init(fgets($handle));

	$sum = sumT($n);
	echo gmp_intval($sum)."\n";
}

function sumT($n){
	if(gmp_intval($n) == 1)
		return gmp_init(1);
	return gmp_add(gmp_sub(gmp_pow($n, 2), gmp_pow(gmp_init(gmp_intval($n)-1), 2)), sumT(gmp_init(gmp_intval($n)-1)));
	//return gmp_mod(gmp_add(gmp_sub(gmp_mod(gmp_pow($n, 2), '1000000007'), gmp_mod(gmp_pow(gmp_init(gmp_intval($n)-1), 2), '1000000007')), sumT(gmp_init(gmp_intval($n)-1))), '1000000007');
}