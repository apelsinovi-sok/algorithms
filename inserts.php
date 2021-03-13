<?php
function inserts($list){
	for ($i=0; $i < count($list); $i++) { 
        $val = $list[$i];
        $j = $i-1;
		while ($j>=0 and $list[$j]>$val) {
			$list[$j+1] = $list[$j];
			$j--;
		}
		$list[$j+1] = $val;
	}
	return $list;
}

$list = [22,3,10,4,15,159,62];

echo "<pre>";
var_dump(inserts($list));
echo "</pre>";
