<?php
  /*
 *Created by: The A-Team (James Harrison, Charles Ramsey, Evan Thomas, and Colton Thompson)
 *The purpose of this file is to reject an applicant.
*/
  require_once 'dbcontroller.php';
  $ssn = $_POST['ssnReject'];
  $connection = new DBController();
  if(isset($_POST['rejectApplicant'])) //If rejectApplicant is pressed reject the applicant
  {
    $connection->runQuery("UPDATE cadets SET admissionStatus='rejected' WHERE ssn = '$ssn'");
    header("Location:allApplicantView.php");
  }
?>
