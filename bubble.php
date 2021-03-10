<?php

$list = ['3','4','67','32','-3','234'];

for ($i=0; $i < count($list)-1; $i++) { 
	for ($j=0; $j < count($list)-1-$i; $j++) { 

		if($list[$j]>$list[$j+1]){

			$bridge = $list[$j+1];
			$list[$j+1] = $list[$j];
			$list[$j] = $bridge;

		}
	}
}

var_dump($list);
?> 