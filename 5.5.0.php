<?php

function bcrypt( $cost , $salt , $password )  {

	$algorithm = PASSWORD_BCRYPT;
	
	$options = array(
		'cost' => $cost,
		'salt' => $salt,
	);

	return password_hash( $password , $algorithm , $options );

}

?>