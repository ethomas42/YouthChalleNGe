<?php
  require_once 'dbcontroller.php';
  $ssn = $_POST['ssnGraduate'];
  $connection = new DBController();
  if(isset($_POST['graduateCadet']))
  {
    $connection->runQuery("UPDATE cadets SET admissionStatus='graduated' WHERE ssn = '$ssn'");
    header("Location:allCadetView.php");
  }
?>
