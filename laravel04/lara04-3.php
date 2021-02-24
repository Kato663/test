<?php
function answer($arr){
	$test = 1;
	foreach($arr as $exam){
		$test *= $exam;
		}
	return $test;
	}
echo answer(array(1,3,5,7,9));
?>