<?php
class Users
{
	private $userName; 
	private	$email; 
	private $password; 
 	private $userArr; 
	
	public function __construct($name, $email, $password)
	{
		$this->userName = $name; 
		$this->email = $email;
		$this->password = $password = password_hash($password,PASSWORD_DEFAULT);  	

		$this->userArr['userName']= $this->userName; 
		$this->userArr['email']= $this->email; 
		$this->userArr['password']= $this->password; 
	}
	
	public function getUserinfo()
	{
			return $this->userArr;
	}
	
	
	// public function setUserName($name)
	// {
		// $this->userName = $name; 
	// }
	
	
	
	
	
}//classifinito






?>