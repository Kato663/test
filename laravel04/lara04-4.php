<?php
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
	if($max_number <$a){
		$max_number =$a;
	}
 }
 return $max_number;
 }
 echo max_array(array(120,4569,1,5656));
?>