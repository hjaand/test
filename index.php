<?php

require("config.php"); 


$sql = new Sql(); 
$myConnect = $sql->connect(); 
var_dump($myConnect); 


$user = new Users("Lars Yngve", "lars@larsson.com", "lasseletarskjorta"); 
$myUser = $user->getUserinfo(); 
var_dump($myUser);

  


// $object = new Users("Mats", "Mats@falk.dk", "hemligt"); 
// $user = $object->getUserinfo(); 
// //var_dump($user); 

// $myFile = new Files(); 

// $myFile->saveNewUser($user['userName'], $user['email'], $user['password']); 
// // echo "<hr>".$myFile->checkUser('Mats@falk.dk'); 

// $userinfo = $myFile->checkUser('Mats@falk.dk', 'hemligt'); 
// var_dump($userinfo); 


?>