<?php
function factorial($val){
	$valA = $val-1;
	if($valA>1){
		$valA = factorial($valA);
	}
	return $valA * $val;

}

echo factorial(3);