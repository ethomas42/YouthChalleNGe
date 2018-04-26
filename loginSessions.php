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

echo $email;
echo $password;
//$rowCount = $connection->numRows("SELECT * FROM users WHERE email = '$email' AND password = '$password'"); 
$rowCount = $connection->numRows("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
echo $rowCount;
if($rowCount)
{
     $record = $connection->runQuery("SELECT * FROM users WHERE email = '$email' AND password = '$password'")[0];
     $_SESSION["loggedIn"] = true; 
     
     setcookie("email", $record['email'], time() + 86400, "/"); 
     header("Location: allCadetView.php?");    
}




?>
