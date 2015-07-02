<?php 
$handle = fopen("input.txt", "r");

$cases = (int)fgets($handle);

for($case = 1; $case<=$cases; $case++)
{
	$num = (int)fgets($handle);
	$str = fgets($handle);
	$arr = explode(' ', $str);
	

	if($num==1){
		echo trim($arr[0]).' '.trim($arr[0]).'<br>';
		continue;
	}

	$start = null;
	$cont = array();
	$totals = array();
	$end = null;
	$total = 0;
	$max = null;


	for($i=0; $i<count($arr); $i++){

		if($i==0){
			$start = $i;
			$end =$i;
			$total += $arr[$i];
			$cont[$i] = array('s'=>$start, 't'=>$total);
			$max = $total;
			continue;
		}
		else{
			$total += $arr[$i];
			if($max < $total){
				$max = $total;
				$cont = array();
				$cont[$i] = array('s'=>$start, 't'=>$total);
				$end =$i;
				
			}
		}

	}
	
	if(empty($cont)){
		$cont[$i-1] = array('s'=>$start, 't'=>$total);
	}
	
	$sub = array_slice($arr, $cont[$end]['s'], $end+1);
	$positive = array_filter($sub, function ($v) {
	  return $v > 0;
	});

	$sum= array_sum($sub);
	foreach ($sub as $key => $value) {
		if($sum<$value) $sum=$value;
	}
	if($sum>0)
		$spos = array_sum($positive);
	else $spos = $sum;
	echo $sum.' '.$spos.'<br/>';
	
}











 ?>
