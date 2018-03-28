<?php
  require_once 'dbcontroller.php';
  $ssn = $_POST['ssn'];
  $connection = new DBController();
  if(isset($_POST['acceptCadet']))
  {
    $connection->runQuery("UPDATE cadets SET admissionStatus='cadet' WHERE ssn = '$ssn'");
    header("Location:allCadetView.php");
  }
?>
