<?php
require_once "dbcontroller.php";

function randomPassword() { //This function generates a random password for new users.
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
if(isset($_POST['saveUser'])) //This checks if the save user button was pressed
{
    $email = $_POST['inputEmail'];
    $firstName = $_POST['inputFirstName']; 
    $lastName = $_POST['inputLastName']; 
    $password = randomPassword();
    $role = $_POST['inputRole'];
	
	if($role == "Create New Role")
	{
		$role = $_POST['inputRoleTitle'];
		$ssnView = $_POST['inputSSNView'];
		if ($_POST['inputMedical'] == 1)
		{
			$medicalView = 1;
			$medicalEdit = 0;
		}
		elseif ($_POST['inputMedical'] == 2)
		{
			$medicalEdit = 1;
			$medicalView = 1;
		}
		else
		{
			$medicalEdit = 0;
			$medicalView = 0;
		}
		$addressEdit = $_POST['inputAddrEdit'];
		$admin = $_POST['inputAdminMenu'];
		$createApplicants = $_POST['inputCreateApplicant'];
		$cadetEdit = $_POST['inputCadetInfo'];
		$miscEdit = $_POST['inputMiscInfo'];
		
		$connection->runQuery("INSERT INTO roles (role,ssnView, medicalView, medicalEdit, addressEdit, admin, createApplicants, cadetEdit, miscEdit, custom) VALUES ('$role', '$ssnView', '$medicalView', '$medicalEdit','$addressEdit','$admin','$createApplicants','$cadetEdit','$miscEdit', 1)"); 
	}
	
	$message = "New account has been created for you in the YouthChalleNGe database. Login using your email address and your password is listed below.\nPassword: '$password'"; 
    $connection->runQuery("INSERT INTO users (fName,lName, password, email, role) VALUES ('$firstName', '$lastName', '$password', '$email','$role')"); 
	mail($email, "New YouthChalleNGe Database Account", $message); 

}
elseif (isset($_POST['updateUser']))
{
	$email = $_POST['inputEmail'];
    $firstName = $_POST['inputFirstName']; 
    $lastName = $_POST['inputLastName']; 
    $password = $_POST['inputPassword'];
    $role = $_POST['inputRole'];
	
	if($role == "Create New Role")
	{
		$role = $_POST['inputRoleTitle'];
		$ssnView = $_POST['inputSSNView'];
		if ($_POST['inputMedical'] == 1)
		{
			$medicalView = 1;
			$medicalEdit = 0;
		}
		elseif ($_POST['inputMedical'] == 2)
		{
			$medicalEdit = 1;
			$medicalView = 1;
		}
		else
		{
			$medicalEdit = 0;
			$medicalView = 0;
		}
		$addressEdit = $_POST['inputAddrEdit'];
		$admin = $_POST['inputAdminMenu'];
		$createApplicants = $_POST['inputCreateApplicant'];
		$cadetEdit = $_POST['inputCadetInfo'];
		$miscEdit = $_POST['inputMiscInfo'];
		
		$connection->runQuery("INSERT INTO roles (role,ssnView, medicalView, medicalEdit, addressEdit, admin, createApplicants, cadetEdit, miscEdit, custom) VALUES ('$role', '$ssnView', '$medicalView', '$medicalEdit','$addressEdit','$admin','$createApplicants','$cadetEdit','$miscEdit', 1)"); 
	} 
    $connection->runQuery("UPDATE users SET fName = '$firstName', lName = '$lastName', password = '$password', email = '$email', role = '$role' WHERE email = '$email'"); 

}
echo "<script>alert('User have been saved');  </script>"; 
header("location: roles.php"); 
?> 