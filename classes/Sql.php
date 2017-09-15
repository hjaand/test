<?php



class Sql
{
	const url = "localhost"; 
	const username = "te14hjan_hjalmar"; 
	const password = "skeaik7813"; 
	const db = "te14hjan_cars"; 
	private $con; 
	
	public function connect()
	{
		this->con = new mysqli(self::url,self::username,self::password,self::db); 
		
		if (this->con->connect_errno > 0)
		{
			die('Unable to connect to database'); 
		}
		else
		{
			return "Connection succeeded"; 
		}
	}
	
	public function insertUser($user)
	{
		$query ="INSERT INTO USERS (name, email, password) VALUES ('".user['userName']."', '".user['email']."', '".user['password']."')"
		
	}
	
	
	
	
	
	
	
}