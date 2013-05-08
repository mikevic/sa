<?php

//Function to protect from SQL Injections
function safe($var){

	$var = trim($var);
	$var = mysql_escape_string($var);
    
    return $var;
}
?>