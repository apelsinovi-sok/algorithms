<?php
$list = [
	'a' => array(
		'0' => 'apple',
		'1'  => 'car'),

	'b' => 'plane',

	'c' => array(

		'0' => array(
		   'a0' => 'cat',
		   'b1'  => 'dog'),

		'1'  => 'tank'),

	'd' => 'orange'
];

	
function recursion($list){
	$new_list = array();
	foreach ($list as $key => $value) {
		static $new_list;
		if (is_array($value)) {
			recursion($value);
		}else{
			
		 $new_list[] = $value;
			
		}

	}
	return $new_list;


}
echo "<pre>";
print_r(recursion($list));
echo "</pre>";
