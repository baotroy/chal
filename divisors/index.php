<?php
$handle = fopen("input.txt", "r");

$t = (int)fgets($handle);

$str ="1,   2,   4,   5,   8,   10,   16,   20,   25,   32,   40,   50,   64,   80,   100,   125,   128,   160,   200,    250,   256,   320,   400,   500,   512,   625,   640,   800,   1000,   1250,   1280,   1600,   2000,    2500,   2560,   3125,   3200,   4000,   5000,   6250,   6400,   8000,   10000,   12500,   12800,    15625,   16000,   20000,   25000,   31250,   32000,   40000,   50000,   62500,   64000,   78125,    80000,   100000,   125000,   156250,   160000,   200000,   250000,   312500,   320000,   390625,    400000,   500000,   625000,   781250,   800000,   1000000,   1250000,   1562500,   1600000,    1953125,   2000000,   2500000,   3125000,   3906250,   4000000,   5000000,   6250000,    7812500,   8000000,   10000000,   12500000,   15625000,   20000000,   25000000,   31250000,    40000000,   50000000,   62500000,   100000000,   125000000,   200000000,   250000000,    500000000,   1000000000 ";
$s=explode(",   ", $str);
$n=array();
foreach ($s as $value) {
	if($value%2==0)
		$n[]=$value;
}
		// echo '<pre>';
		// print_r($n);
		//exit;
		// var_dump(is_int(1111111/3));
		// exit;
function proccess($org){
	$divisors = array();
	if($org%2 != 0) return $divisors;
	$input = sqrt($org);
 	for($i=2; $i <= $input; $i++) {
 		if($i%2==0){
		   if ($org % $i == 0) {
		   		$divisors[]=$i;
		   		$in = $org/$i;
				if(is_int($in) && !in_array($in, $divisors) && $in%2==0){
		   			$divisors[]= $in;
		   		}   		
		   }
		}else{
			$t=$org/$i;
			if(is_int($t) && ($t)%2==0){
	   				$divisors[]= $t;
	   		}
	   	}
	}
	$divisors[]=$org;
	return $divisors;
 }
 function findAll($input){
 	$divisors = proccess($input);
 			echo '<pre>';
 			// print_r($divisors);
 			// exit;
 	for($i=0; $i<count($divisors); $i++){
 		for($j=0; $j<count($divisors); $j++){
 			$v = $divisors[$i]*$divisors[$j];
 			if($input % $v == 0 && !in_array($v, $divisors)){
 			//if(!in_array($v, $divisors)){
 				$divisors[]=$v;
 			}
 		}
 	}
 	return $divisors;
 }


 class Divisors {
  public $factor = array();

  public function __construct($num) {
    $this->num = $num;
  }

  // count number of divisors of a number
  public function countDivisors() {
    if ($this->num == 1) return 1;

    $this->_primefactors();

    $array_primes = array_count_values($this->factor);
    $divisors = 1;
    foreach($array_primes as $power) {
      $divisors *= ++$power;
    }
    $count_odd=0;
    foreach ($this->factor as $key => $value) {
    	if($value % 2 !=0){
    		$count_odd++;
    	}
    }
    if($count_odd) $count_odd++;
    return $divisors - $count_odd;
  }

  // prime factors decomposer
  private function _primefactors() {
    $this->factor = array();
    $run = true;
    while($run && @$this->factor[0] != $this->num) {
      $run = $this->_getFactors();
    }
  }

  // get all factors of the number
  private function _getFactors() {
    if($this->num == 1) {
      return ;
    }
    $root = ceil(sqrt($this->num)) + 1;
    $i = 2;
    while($i <= $root) {
      if($this->num % $i == 0) {
        $this->factor[] = $i;
        $this->num = $this->num / $i;
        return true;
      }
      $i++;
    }
    $this->factor[] = $this->num;
    return false;
  }
} // our class ends here

		echo '<pre>';
		
 for($i = 1; $i <= $t; $i++){
	$input =(int)fgets($handle);
	// $example = new Divisors($input );
	// echo $example->countDivisors()."\n";
	$proc =proccess($input);
	echo count($proc)."\n";
			// echo '<pre>';
			// print_r($proc);
			
	//print_r(quick_sort(proccess($input)))."\n";
}