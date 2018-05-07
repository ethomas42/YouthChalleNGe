<!DOCTYPE html>
<html>
	<?php
  /*
  Created by: The A-Team (James Harrison, Charles Ramsey, Evan Thomas, and Colton Thompson)
  The purpose of this file is to take an Excel file where the first row is the names of the fields and each row below it is a cadets entries for those fields. All of the records in this file will then be pushed to the server.
  */
		require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;
    include_once "dbcontroller.php";
	  $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
		$reader->setReadDataOnly(TRUE); 
	
    
    $fileName = $_POST['importFile']; //Name of the file chosen by the user on allCadetView.php
    move_uploaded_file($_FILES['importFile']['tmp_name'], $filename); //Move file to the database
    $spreadsheet = $reader->load($fileName);
    $sheet = $spreadsheet->getActiveSheet();
    $db = new DBController();

    $rows = [];
    foreach ($sheet->getRowIterator() AS $row) //Loops through each row and stores the values 
    {
      $cellIterator = $row->getCellIterator();
      $cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,
      $cells = [];
      foreach ($cellIterator as $cell) 
      {
        $cells[] = $cell->getValue(); //Makes an array of each entry
      }
      $rows[] = $cells; //Makes an array of entries that holds an array of fields for each record
    }
    $size = count($rows);
    for($index = 1; $index < $size; $index++) //Sets each field equal to an easy to read variable
    {
      $fName = $rows[$index][0];
      $mName = $rows[$index][1];
      $lName = $rows[$index][2];
      $gender = $rows[$index][3];
      $ssn = $rows[$index][4];
      $genQual = $rows[$index][5];
      $birthday = $rows[$index][6]; 
      $race = $rows[$index][7]; 
      $isHispanic = $rows[$index][8];
      $email = $rows[$index][9];
      $mStreet = $rows[$index][10]; 
      $mStreet2 = $rows[$index][11];
      $mCity = $rows[$index][12]; 
      $mState = $rows[$index][13];
      $mZip = $rows[$index][14];
      $pStreet = $rows[$index][15];
      $pStreet2 = $rows[$index][16]; 
      $pCity = $rows[$index][17]; 
      $pState = $rows[$index][18];
      $pZip = $rows[$index][19];
      $isCitizen = $rows[$index][20]; 
      $ged = $rows[$index][21]; 
      $volunteer = $rows[$index][22]; 
      $admissionStatus = $rows[$index][23]; 
      $schoolWithdrawDate = $rows[$index][24];
      $unemployed = $rows[$index][25]; 
      $underemployed = $rows[$index][26];
      $workplace = $rows[$index][27];
      $wage = $rows[$index][28]; 
      $hoursWorking =  $rows[$index][29];
      $accomplish1 = $rows[$index][30]; 
      $accomplish2 = $rows[$index][31];
      $recBy = $rows[$index][31]; 
      $recNum = $rows[$index][32]; 
      $gradeCompleted = $rows[$index][33]; 
      $hairColor = $rows[$index][34]; 
      $eyeColor = $rows[$index][35]; 
      $height = $rows[$index][36]; 
      $weight = $rows[$index][37]; 
      $personsInHouse = $rows[$index][38]; 
      $houseIncome = $rows[$index][39];
      $gaResident = $rows[$index][40]; 
      $preferredComm = $rows[$index][41];
      $db->createRecord("INSERT INTO cadets (fName, mName, lName, gender, ssn, genQual, birthday, race, isHispanic, email, mStreet, mStreet2, mCity, mState,  mZip,  pStreet, pStreet2, pCity, pState, pZip, isCitizen, ged, volunteer, admissionStatus, schoolWithdrawDate, unemployed, underemployed, workplace, wage, hoursWorking, accomplish1, accomplish2, recBy, recNum,  gradeCompleted, hairColor, eyeColor, height, weight, personsInHouse, houseIncome, gaResident, preferredComm, campusLocation
) VALUES ('$fName', '$mName', '$lName', '$gender', '$ssn', '$genQual', '$birthday', '$race', '$isHispanic', '$email', '$mStreet', '$mStreet2', '$City', '$mState',  '$mZip',  '$pStreet', '$pStreet2', '$pCity', '$pState', '$pZip', '$isCitizen', '$ged', '$volunteer', '$admissionStatus', '$schoolWithdrawDate', '$unemployed', '$underemployed', '$workplace', '$wage', '$hoursWorking', '$accomplish1', '$accomplish2', '$recBy', '$recNum',  '$gradeCompleted', '$hairColor', '$eyeColor', '$height', '$weight', '$personsInHouse', '$houseIncome', '$gaResident', '$preferredComm', '$campusLocation')"); //Pushes each record
    }
	unlink($filename); //Removes input file from server 
    header("Location:allCadetView.php"); //Redirects to allCadetView page.
	?>
</html>
