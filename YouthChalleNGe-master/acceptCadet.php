<?php
  require_once 'dbcontroller.php';
  $ssn = $_POST['ssnAccept'];
  $connection = new DBController();
  if(isset($_POST['acceptCadet']))
  {
    $connection->runQuery("UPDATE cadets SET admissionStatus='current' WHERE ssn = '$ssn'");
    header("Location:allCadetView.php");
  }
?>
