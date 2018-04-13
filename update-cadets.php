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
    
    if(isset($_POST['inputHair']))
    {
        $hairColor = filter_input(INPUT_POST,"inputHair"); 
        $connection->runQuery("UPDATE cadets SET hairColor = '$firstName' WHERE ssn = '$key'"); 
    }
    
    if(isset($_POST['inputEye']))
    {
        $eyeColor = filter_input(INPUT_POST,"inputEye"); 
        $connection->runQuery("UPDATE cadets SET eyeColor = '$eyeColor' WHERE ssn = '$key'"); 
    }
    
    if(isset($_POST['inputWeight']))
    {
        $weight= filter_input(INPUT_POST,"inputWeight"); 
        $connection->runQuery("UPDATE cadets SET weight = '$weight' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputHeight']))
    {
        $height = filter_input(INPUT_POST, "inputHeight"); 
        $connection->runQuery("UPDATE cadets SET height = '$height' WHERE ssn = '$key'"); 
    }
     
     if(isset($_POST['inputGender']))
    {
        $gender = filter_input(INPUT_POST,"inputGender"); 
        $connection->runQuery("UPDATE cadets SET gender = '$gender' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputEmail']))
    {
        $email = filter_input(INPUT_POST,"inputEmail",FILTER_VALIDATE_EMAIL); 
        $connection->runQuery("UPDATE cadets SET email = '$email' WHERE ssn = '$key'");
    }
    
    if(isset($_POST["inputAdmission"]))
    {
        $admission = filter_input(INPUT_POST,"inputAdmission"); 
        $connection->runQuery("UPDATE cadets SET admissionStatus = '$admission' WHERE ssn = '$key'"); 
    }
     if(isset($_POST['inputAdmission']))
    {
        $admission = filter_input(INPUT_POST,"inputAdmission"); 
        $connection->runQuery("UPDATE cadets SET admissionStatus = '$admission' WHERE ssn = '$key'"); 
    }
    
    if(isset($_POST['inputLocation']))
    {
        $location = filter_input(INPUT_POST, "inputLocation");
        $connection->runQuery("UPDATE cadets set campusLocation = '$location' WHERE ssn = '$key'"); 
    }
    if(isset($_POST["inputGAResident"]))
    {
        $gaResident = filter_input(INPUT_POST, "inputGAResident"); 
        $connection->runQuery("UPDATE cadets set gaResident = '$gaResident' WHERE ssn = '$key'"); 
        
    }
    
    if (isset($_POST['inputMailStreet'])) {
        $mailStreet = filter_input(INPUT_POST, "inputMailStreet"); 
        $connection->runQuery("UPDATE cadets set mStreet = '$mailStreet' WHERE ssn = '$key'"); 
        
    }
    if(isset($_POST['inputStreet2']))
    {
        $mailStreet2 = filter_input(INPUT_POST, "inputStreet2"); 
        $connection->runQuery("UPDATE cadets set mStreet2 = '$mailStreet2' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputMailStreet']))
    {
        $mailCity = filter_input(INPUT_POST, "inputMailStreet");
        $connection->runQuery("UPDATE cadets set mCity = '$mailCity' WHERE ssn = '$key'");
    }
    if(isset($_POST['inputMailState']))
    {
        $state = filter_input(INPUT_POST, "inputMailState"); 
        $connection->runQuery("UPDATE cadets set  mState = '$state' WHERE ssn='$key'"); 
    }
    if(isset($_POST['inputMailZip']))
    {
        $zipcode = filter_input(INPUT_POST, "inputMailZip"); 
        $connection->runQuery("UPDATE cadets set mZip = '$zipcode' WHERE ssn='$key'"); 
    }
    if(isset($_POST['inputPhysicalStreet']))
    {
        $pStreet = filter_input(INPUT_POST, "inputPhysicalStreet"); 
        $connection->runQuery("UPDATE cadets SET pStreet = '$pStreet' WHERE ssn = '$key'");    
    }
    if(isset($_POST['inputPhysicalStreet2']))
    {
        $pStreet = filter_input(INPUT_POST, "inputPhysicalStreet2"); 
        $connection->runQuery("UPDATE cadets SET pStreet2 = '$pStreet' WHERE ssn = '$key'");    
    }
    if(isset($_POST['inputPhysicalCity']))
    {
        $pCity = filter_input(INPUT_POST, "inputPhysicalStreet"); 
        $connection->runQuery("UPDATE cadets SET pCity = '$pCity' WHERE ssn = '$key'");    
    }
    if(isset($_POST['inputPhysicalState']))
    {
        $state = filter_input(INPUT_POST, "inputPhysicalState"); 
        $connection->runQuery("UPDATE cadets SET pState = '$state' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputPhysicalZip']))
    {
        $pZipcode = filter_input(INPUT_POST, "inputPhysicalZip");
        $connection->runQuery("UPDATE cadets SET pZip = '$pZipcode' WHERE ssn = '$key'"); 
    }

    if(isset($_POST['inputGFirstName']))
    {
        $guardianName = filter_input(INPUT_POST, 'inputGFirstName'); 
        $connection->runQuery("UPDATE guardians SET fName = '$guardianName' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputMiddleName']))
    {
        $guardianName = filter_input(INPUT_POST, 'inputMiddleName'); 
        $connection->runQuery("UPDATE guardians SET mName = '$guardianName' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputGLastName']))
    {
        $guardianName = filter_input(INPUT_POST, 'inputGLastName'); 
        $connection->runQuery("UPDATE guardians SET lName = '$guardianName' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputGuardianStreet']))
    {
        $address = filter_input(INPUT_POST, "inputGuardianStreet"); 
        $connection->runQuery("UPDATE guardians SET street1 = '$address' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputGuardianStreet2']))
    {
        $address2 = filter_input(INPUT_POST, "inputGuardianStreet2"); 
        $connection->runQuery("UPDATE guardians SET street2 = '$address2' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputGuardianCity']))
    {
        $city = filter_input(INPUT_POST, "inputGuardianCity"); 
        $connection->runQuery("UPDATE guardians SET city = '$city' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputGuardianState']))
    {
        $state = filter_input(INPUT_POST, "inputGuardianState"); 
        $connection->runQuery("UPDATE guardians SET `state` = '$state' WHERE ssn = '$key'"); 
    }

    if(isset($_POST['inputGuardianZip']))
    {
        $zipcode = filter_input(INPUT_POST, "inpuGuardianZip"); 
        $connection->runQuery("UPDATE guardians SET zip = '$zipcode' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputGuardianHomePhone']))
    {
        $homephone = filter_input(INPUT_POST, 'inputGuardianHomePhone'); 
        $connection->runQuery("UPDATE guardians SET work = '$homephone' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputGuardianEmail']))
    {
        $email = filter_input(INPUT_POST, 'inputGuardianEmail', FILTER_VALIDATE_EMAIL); 
        $connection->runQuery("UPDATE guardians SET email = '$email' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputGuardianCell']))
    {
        $homephone = filter_input(INPUT_POST, 'inputGuardianCell'); 
        $connection->runQuery("UPDATE guardians SET cell = '$homephone' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputDrugName']))
    {
        $drugName = filter_input(INPUT_POST, "inputDrugName"); 
        $connection->runQuery("UPDATE substanceabuse SET drugName = '$drugName' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputDrugType']))
    {
        $drugName = filter_input(INPUT_POST, "inputDrugType"); 
        $connection->runQuery("UPDATE substanceabuse SET results = '$drugName' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputStartDate']))
    {
        $drugName = filter_input(INPUT_POST, "inputStartDate"); 
        $connection->runQuery("UPDATE substanceabuse SET testDate = '$drugName' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputDrugFrequency']))
    {
        $notes = filter_input(INPUT_POST, "inputDrugFrequency"); 
        $connection->runQuery("UPDATE substanceabuse SET notes = '$notes' WHERE ssn = '$key'"); 
    }



    echo '<script> alert("Cadet has been Updated!"); </script>';
    header("refresh:2;url=allCadetView.php"); 
    
    //echo "Button is pushed"
}
if(isset($_POST['saveUser']))
{
    $email = filter_input(INPUT_POST, "email"); 
    
    if(isset($_POST["inputFirstName"]))
       {
           $fName = filter_input(INPUT_POST, "inputFirstName"); 
           $connection->runQuery("UPDATE users SET fName = '$fName' WHERE email = '$email'");  
       }
       
      if(isset($_POST["inputLastName"]))
       {
           $lName = filter_input(INPUT_POST, "inputLastName"); 
           $connection->runQuery("UPDATE users SET lName = '$lName' WHERE email = '$email'");  
       }
         
       if(isset($_POST["inputUsername"]))
       {
           $username = filter_input(INPUT_POST, "inputLastName"); 
           $connection->runQuery("UPDATE users SET username = '$username' WHERE email = '$email'");  
       }
          
       if(isset($_POST["inputPassword"]))
          {
              $password = filter_input(INPUT_POST, "inputPassword"); 
              $connection->runQuery("UPDATE users SET password = '$password' WHERE email = '$email'"); 
          }
          
}
?>
