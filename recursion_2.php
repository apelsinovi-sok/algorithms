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

class recursion{
static $new_list = array();
	public function recurs($list){
		foreach ($list as $key => $value) {
			if (is_array($value)) {
				self::recurs($value);
			}else{
				array_push(self::$new_list, $value);
			}
		}
		return self::$new_list;
	}
}

$object = new recursion;
echo "<pre>";
print_r($object->recurs($list));
echo "</pre>";
