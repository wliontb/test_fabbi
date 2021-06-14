<?php 
$n = 3;
$input = array(11,2,8,10,5,99,1,8,9);

$arr_chunk = array_chunk($input,$n);
//var_dump($arr_chunk);
$output = array();

for($i=0;$i<3;$i++){
	foreach($arr_chunk as $key=>$value){
		if(array_key_exists($i,$value)){
			$output[] = $value[$i];
		}
	}
}
var_dump($output);

 ?>