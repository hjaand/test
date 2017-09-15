<?php

require("config.php"); 
  
if(isset($_POST['email']) && $_POST['email']!=null && isset($_POST['password']) && $_POST['password']!=null)
{
	if(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL))
	{
		$email = $_POST['email']; 
	}
	
	else 
	{
		header("Location:loginform.php?mes=auth denied"); 
	}
	$password = $_POST['password'];
	$password = filter_var($password, FILTER_SANITIZE_STRING); 
	$myFile = new Files();
	$userinfo = $myFile->getUserFromFile($email);

	if($userinfo != false)
	{	
		$auth = new Auth(); 
		$loginCheck = $auth->checkUser($password, $userinfo->password);  
		
		if (!$loginCheck)
		{
			header("Location:loginform.php?mes=auth denied"); 
		}
	}
	else 
	{
		header("Location:loginform.php?mes=auth denied"); 
	}
}