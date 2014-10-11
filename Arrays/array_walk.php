<?php

/**
 * Example of Array_Walk:
 * 	http://php.net/manual/pt_BR/function.array-walk.php
 */

$arrayName = array("Wellington", "Ribeiro", "Jose", "Joao");

array_walk($arrayName, 
	function(&$value, $index){
		var_dump($value);
	}
);


