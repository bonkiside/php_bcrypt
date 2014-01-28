<?php

function bcrypt( $cost, $salt, $password ) {

	$prefix = '$2y$';
	
	$option = $prefix. $cost. '$'. $salt;
	
	return crypt( $password, $option );
	
}

?>