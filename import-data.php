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
    for($int = 1; $int < $size; $int++) //Sets each field equal to an easy to read variable
    {
      $fName = $rows[$int][0];
      $mName = $rows[$int][1];
      $lName = $rows[$int][2];
      $gender = $rows[$int][3];
      $ssn = $rows[$int][4];
      $genQual = $rows[$int][5];
      $birthday = $rows[$int][6]; 
      $race = $rows[$int][7]; 
      $isHispanic = $rows[$int][8];
      $email = $rows[$int][9];
      $mStreet = $rows[$int][10]; 
      $mStreet2 = $rows[$int][11];
      $mCity = $rows[$int][12]; 
      $mState = $rows[$int][13];
      $mZip = $rows[$int][14];
      $pStreet = $rows[$int][15];
      $pStreet2 = $rows[$int][16]; 
      $pCity = $rows[$int][17]; 
      $pState = $rows[$int][18];
      $pZip = $rows[$int][19];
      $isCitizen = $rows[$int][20]; 
      $ged = $rows[$int][21]; 
      $volunteer = $rows[$int][22]; 
      $admissionStatus = $rows[$int][23]; 
      $schoolWithdrawDate = $rows[$int][24];
      $unemployed = $rows[$int][25]; 
      $underemployed = $rows[$int][26];
      $workplace = $rows[$int][27];
      $wage = $rows[$int][28]; 
      $hoursWorking =  $rows[$int][29];
      $accomplish1 = $rows[$int][30]; 
      $accomplish2 = $rows[$int][31];
      $recBy = $rows[$int][31]; 
      $recNum = $rows[$int][32]; 
      $gradeCompleted = $rows[$int][33]; 
      $hairColor = $rows[$int][34]; 
      $eyeColor = $rows[$int][35]; 
      $height = $rows[$int][36]; 
      $weight = $rows[$int][37]; 
      $personsInHouse = $rows[$int][38]; 
      $houseIncome = $rows[$int][39];
      $gaResident = $rows[$int][40]; 
      $preferredComm = $rows[$int][41];
      $db->createRecord("INSERT INTO cadets (fName, mName, lName, gender, ssn, genQual, birthday, race, isHispanic, email, mStreet, mStreet2, City, mState,  mZip,  pStreet, pStreet2, pCity, pState, pZip, isCitizen, ged, volunteer, admissionStatus, schoolWithdrawDate, unemployed, underemployed, workplace, wage, hoursWorking, accomplish1, accomplish2, recBy, recNum,  gradeCompleted, hairColor, eyeColor, height, weight, personsInHouse, houseIncome, gaResident, preferredComm, campusLocation
) VALUES ('$fName', '$mName', '$lName', '$gender', '$ssn', '$genQual', '$birthday', '$race', '$isHispanic', '$email', '$mStreet', '$mStreet2', '$City', '$mState',  '$mZip',  '$pStreet', '$pStreet2', '$pCity', '$pState', '$pZip', '$isCitizen', '$ged', '$volunteer', '$admissionStatus', '$schoolWithdrawDate', '$unemployed', '$underemployed', '$workplace', '$wage', '$hoursWorking', '$accomplish1', '$accomplish2', '$recBy', '$recNum',  '$gradeCompleted', '$hairColor', '$eyeColor', '$height', '$weight', '$personsInHouse', '$houseIncome', '$gaResident', '$preferredComm', '$campusLocation')"); //Pushes each record
    }
    header("Location:allCadetView.php"); //Redirects to allCadetView page.
	?>
</html>