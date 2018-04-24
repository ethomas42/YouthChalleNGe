<!DOCTYPE html>
<html>
	<?php
		require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;
    include_once "dbcontroller.php";
	  $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
		$reader->setReadDataOnly(TRUE);
    $fileName = $_POST['importFile'];
		$spreadsheet = $reader->load($fileName);
    $sheet = $spreadsheet->getActiveSheet();
    $db = new DBController();

    $rows = [];
    foreach ($sheet->getRowIterator() AS $row) 
    {
      $cellIterator = $row->getCellIterator();
      $cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,
      $cells = [];
      foreach ($cellIterator as $cell) 
      {
        $cells[] = $cell->getValue();
      }
      $rows[] = $cells;
    }
    $size = count($rows);
    for($int = 1; $int < $size; $int++)
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
) VALUES ('$fName', '$mName', '$lName', '$gender', '$ssn', '$genQual', '$birthday', '$race', '$isHispanic', '$email', '$mStreet', '$mStreet2', '$City', '$mState',  '$mZip',  '$pStreet', '$pStreet2', '$pCity', '$pState', '$pZip', '$isCitizen', '$ged', '$volunteer', '$admissionStatus', '$schoolWithdrawDate', '$unemployed', '$underemployed', '$workplace', '$wage', '$hoursWorking', '$accomplish1', '$accomplish2', '$recBy', '$recNum',  '$gradeCompleted', '$hairColor', '$eyeColor', '$height', '$weight', '$personsInHouse', '$houseIncome', '$gaResident', '$preferredComm', '$campusLocation')");
    }
    header("Location:allCadetView.php"); //Redirects to allCadetView page.
	?>
</html>