<?php

/* 
 * Sign in 
 */
require_once 'dbcontroller.php'; 
session_start(); 
$connection = new DBController(); 
$username = filter_input(INPUT_POST, "inputUsername");
$password = $_POST['password']; 


//$rowCount = $connection->numRows("SELECT * FROM users WHERE username = '$username' AND password = '$password'"); 
$rowCount = $connection->numRows("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
if($rowCount)
{
     $record = $connection->runQuery("SELECT * FROM users WHERE username = '$username' AND password = '$password'")[0];
     $_SESSION["loggedIn"] = true; 
     
     setcookie("username", $record['username'], time() + 86400, "/"); 
     header("Location: allCadetView.php?");    
}




?>