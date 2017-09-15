<?php



error_reporting(-1); 
ini_set("display_errors", 1); 

spl_autoload_register(function ($class)
{
	$path = "classes/"."{$class}.php"; 
	if (is_file($path))
	{
		include($path); 
	}
}); 

?>