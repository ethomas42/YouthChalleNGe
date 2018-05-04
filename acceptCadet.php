<?php
  require_once 'dbcontroller.php';
  $ssn = $_POST['ssnAccept'];
  $connection = new DBController();
  if(isset($_POST['acceptCadet'])) //If the acceptButton is pushed, it changes the admissionStatus to current. 
  {
    $connection->runQuery("UPDATE cadets SET admissionStatus='current' WHERE ssn = '$ssn'"); //Changes applicant into a student
    header("Location:allCadetView.php"); //Redirect to allCadetView
  }
?>
