<?php


class Files
{

	public function saveNewUser($userName, $email, $password)
	{
		$fileName = "users/".$email.".txt";
		
		$myFile = fopen($fileName, "w"); 
		
		//$txt = "{'userName': '".$userName."', ' email': '".$email."', ' password': '".$password"'}"; 
		$txt = '{"userName": "'.$userName.'","email": "'.$email.'", "password": "'.$password.'"}'; 
		
		fwrite($myFile, $txt); 
		fclose($myFile);  
		
	}
	
	public function getUserFromFile($email)
	{
		$fileName = "users/".$email.".txt";
		if ($myFile = fopen($fileName, 'r') )
		{
			
			$userinfo = json_decode(fread($myFile, filesize($fileName)));
			fclose($myFile); 
			return $userinfo; 
		}
		
		else 
		{
			return false;  
		}
		
	}

	
	
}	

	




?>