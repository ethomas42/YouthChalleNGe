<?php
  require_once 'dbcontroller.php';
  $ssn = $_POST['ssnReject'];
  $connection = new DBController();
  if(isset($_POST['rejectApplicant']))
  {
    $connection->runQuery("UPDATE cadets SET admissionStatus='rejected' WHERE ssn = '$ssn'");
    header("Location:allApplicantView.php");
  }
?>
