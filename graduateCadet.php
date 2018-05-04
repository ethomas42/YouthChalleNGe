<?php
	//This file is used for graduating cadets.
  require_once 'dbcontroller.php';
  $ssn = $_POST['ssnGraduate'];
  $connection = new DBController();
  if(isset($_POST['graduateCadet'])) //If graduateCadet button is pressed
  {
    $connection->runQuery("UPDATE cadets SET admissionStatus='graduated' WHERE ssn = '$ssn'"); //Changes cadets admissionStatus to graduated
    header("Location:allCadetView.php"); //Redirects to allCadetView.php
  }
?>
