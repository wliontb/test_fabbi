<?php 
$input = array(1,5,4,7,9,0,-10,13,93,14,15);
//sort input
rsort($input);
$length = count($input)-1;
//tim kiem kc min
$min = $input[1]-$input[2];
for ($i=0; $i <$length ; $i++) { 
	$k = $input[$i]-$input[$i+1];
	if(($k<$min)&&$k>0)
		$min = $k;
}
sort($input);
$output = array();
for($i=0;$i<$length;$i++){
	if($input[$i]+$min==$input[$i+1]){
		$output[] = array($input[$i],$input[$i+1]);
	}
}
var_dump($output);

 ?>