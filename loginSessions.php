<?php

/* 
 * Sign in 
 */
require_once 'dbcontroller.php'; 
session_start(); 
$connection = new DBController(); 
$email = filter_input(INPUT_POST, 'email');
$email = $_POST['email'];
$password = $_POST['password']; 

//echo $email;
//echo $password;
//$rowCount = $connection->numRows("SELECT * FROM users WHERE email = '$email' AND password = '$password'"); 
$rowCount = $connection->numRows("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
//echo $rowCount;
if($rowCount)
{
     $record = $connection->runQuery("SELECT * FROM users WHERE email = '$email' AND password = '$password'")[0];
	 $role = $record['role'];
     $_SESSION["loggedIn"] = true;
	 $_SESSION["permissions"] = $connection->runQuery("SELECT * FROM roles WHERE role = '$role'")[0];
     
     setcookie("email", $record['email'], time() + 86400, "/"); 
     header("Location: allCadetView.php?");    
}
else
	header("Location: index.php");



?>
