<?php

/* 
 * Sign in 
 */
require_once 'dbcontroller.php'; 
session_start(); 
$connection = new DBController(); 
//$username = $_POST[]; 
//$password = $_POST[]; 


//$rowCount = $connection->numRows("SELECT * FROM users WHERE username = '$username' AND password = '$password'"); 
$rowCount = $connection->numRows("SELECT * FROM users WHERE 1");
if($rowCount)
{
     $record = $connection->runQuery("SELECT * FROM users WHERE 1")[0];
     $_SESSION["loggedIn"] = true; 
     setcookie("username", $record['username'], time() + 86400, "/"); 
     header("Location: allCadetView.php?");
     
           
}




?>