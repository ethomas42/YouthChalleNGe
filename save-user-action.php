<?php
require_once "dbcontroller.php";

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
$connection  = new DBController(); 
if(isset($_POST['saveUser']))
{
    $email = $_POST['inputEmail'];
    $firstName = $_POST['inputFirstName']; 
    $lastName = $_POST['inputLastName']; 
    $password = randomPassword();
    $role = $_POST['inputRole'];

	
	$message = "New account has been created for you in the YouthChalleNGe database. Login using your email address and your password is listed below.\nPassword: '$password'"; 
    $connection->runQuery("INSERT INTO users (fName,lName, password, email, role) VALUES ('$firstName', '$lastName', '$password', '$email','$role')"); 
	mail($email, "New YouthChalleNGe Database Account", $message); 

}
echo "<script>alert('User have been saved');  </script>"; 
header("location: roles.php"); 
?> 