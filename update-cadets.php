<?php
require_once 'phpFunctions.php'; 
require_once 'dbcontroller.php';
$connection = new DBController(); 
if(isset($_POST['saveCadet']))
{
    
    $key = $_POST['ssnKey']; 
    if(isset($_POST['attachments']))
    { 
        importFile("cadet","saveCadet","attachment", $_POST['ssnKey']);
    }
    
    if(isset($_POST['inputCommMethod']))
    {
        $preferredCommunication = filter_input(INPUT_POST, "inputCommMethod"); 
        $connection->runQuery("UPDATE cadets SET preferredComm = '$preferredCommunication'");
    }
    
    if(isset($_POST['ssn']))
    {
        $ssn = $_POST['ssn']; 
        $connection->runQuery("UPDATE cadets SET ssn = '$ssn' WHERE ssn = '$key'");
    }
    
    if(isset($_POST['inputFirstName']))
    {
        $firstName = $_POST['inputFirstName']; 
        $connection->runQuery("UPDATE cadets SET fName = '$firstName' WHERE ssn = '$key'"); 
        
    }
    if(isset($_POST['inputMiddleName']))
    {
        $firstName = $_POST['inputMiddleName']; 
        $connection->runQuery("UPDATE cadets SET mName = '$firstName' WHERE ssn = '$key'"); 
        
    }
    if(isset($_POST['inputLastName']))
    {
        $firstName = $_POST['inputLastName']; 
        $connection->runQuery("UPDATE cadets SET lName = '$firstName' WHERE ssn = '$key'"); 
        
    }
    if(isset($_POST['inputGenQual']))
    {
        $firstName = $_POST['inputGenQual']; 
        $connection->runQuery("UPDATE cadets SET genQual = '$firstName' WHERE ssn = '$key'"); 
        
    }
    if(isset(filter_input(INPUT_POST, "inputHair")))
    {
        $hairColor = filter_input(INPUT_POST,"inputHair"); 
        $connection->runQuery("UPDATE cadets SET hairColor = '$firstName' WHERE ssn = '$key'"); 
    }
    
    if(isset(filter_input(INPUT_POST, "inputEye")))
    {
        $eyeColor = filter_input(INPUT_POST,"inputEye"); 
        $connection->runQuery("UPDATE cadets SET eyeColor = '$eyeColor' WHERE ssn = '$key'"); 
    }
    
    if(isset(filter_input(INPUT_POST, "inputWeight")))
    {
        $weight= filter_input(INPUT_POST,"inputWeight"); 
        $connection->runQuery("UPDATE cadets SET weight = '$weight' WHERE ssn = '$key'"); 
    }
     if(isset(filter_input(INPUT_POST, "inputEye")))
    {
        $eyeColor = filter_input(INPUT_POST,"inputEye"); 
        $connection->runQuery("UPDATE cadets SET eyeColor = '$eyeColor' WHERE ssn = '$key'"); 
    }
     if(isset(filter_input(INPUT_POST, "inputGender")))
    {
        $gender = filter_input(INPUT_POST,"inputGender"); 
        $connection->runQuery("UPDATE cadets SET gender = '$gender' WHERE ssn = '$key'"); 
    }
    
    if(isset(filter_input(INPUT_POST, "inputEmail")))
    {
        $email = filter_input(INPUT_POST,"inputEmail",FILTER_VALIDATE_EMAIL); 
        $connection->runQuery("UPDATE cadets SET email = '$email' WHERE ssn = '$key'"); 
    }
    if(isset(filter_input(INPUT_POST, "inputAdmission")))
    {
        $admission = filter_input(INPUT_POST,"inputAdmission"); 
        $connection->runQuery("UPDATE cadets SET admissionStatus = '$admission' WHERE ssn = '$key'"); 
    }
     if(isset(filter_input(INPUT_POST, "inputAdmission")))
    {
        $admission = filter_input(INPUT_POST,"inputAdmission"); 
        $connection->runQuery("UPDATE cadets SET admissionStatus = '$admission' WHERE ssn = '$key'"); 
    }
    
    if(isset(filter_input(INPUT_POST, "inputLocation")))
    {
        $location = filter_input(INPUT_POST, "inputLocation");
        $connection->runQuery("UPDATE cadets set campusLocation = '$location' WHERE ssn = '$key'"); 
    }
    if(isset(filter_input(INPUT_POST, "inputGAResident")))
    {
        $gaResident = filter_input(INPUT_POST, "inputGAResident"); 
        $connection->runQuery("UPDATE cadets set gaResident = '$gaResident' WHERE ssn = '$key'"); 
        
    }
    
    if (isset(filter_input(INPUT_POST, ""))) {
        
    }
    echo '<script> alert("Cadet has been Updated!"); </script>';
    header("refresh:2;url=allCadetView.php"); 
    
    //echo "Button is pushed"
}
if(isset($_POST['saveUser']))
{
    $email = filter_input(INPUT_POST, "email"); 
    if(isset(filter_input(INPUT_POST, "inputFirstName"))
       {
           $fName = filter_input(INPUT_POST, "inputFirstName"); 
           $connection->runQuery("UPDATE users SET fName = '$fName' WHERE email = '$email'");  
       }
       
      if(isset(filter_input(INPUT_POST, "inputLastName"))
       {
           $lName = filter_input(INPUT_POST, "inputLastName"); 
           $connection->runQuery("UPDATE users SET lName = '$lName' WHERE email = '$email'");  
       }
         
       if(isset(filter_input(INPUT_POST, "inputUsername"))
       {
           $username = filter_input(INPUT_POST, "inputLastName"); 
           $connection->runQuery("UPDATE users SET username = '$username' WHERE email = '$email'");  
       }
          
       if(isset(filter_input(INPUT_POST, "inputPassword"))
          {
              $password = filter_input(INPUT_POST, "inputPassword"); 
              $connection->runQuery("UPDATE users SET password = '$password' WHERE email = '$email'"); 
          }
}
?>
