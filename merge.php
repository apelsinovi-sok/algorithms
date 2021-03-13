<?php
function merge_sort($list){
	if(count($list)==1) return $list;
	$knife = count($list)/2;
	$left = array_slice($list, 0, $knife);
	$right = array_slice($list,   $knife);
	$left = merge_sort($left);
    $right = merge_sort($right);
    return merge($left, $right);
}

function merge($left, $right){
	$new_list = array();
	while (count($left)>0 and count($right)>0) {
		if ($left[0] > $right[0]) {
			array_push($new_list, array_shift($right));
		}else{
			array_push($new_list, array_shift($left));
		}
		if (count($left)==0) {
			return array_merge($new_list, $right);
		}
		if (count($right)==0) {
			return array_merge($new_list, $left);
		}
	}

}

$list = [2,3,33,9,0,-32,-3,23,2,8];
echo "<pre>";
print_r(merge_sort($list));
echo "</pre>";

