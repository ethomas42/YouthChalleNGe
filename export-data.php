<!DOCTYPE html>
<html>

<?php
                require 'vendor/autoload.php';
                use PhpOffice\PhpSpreadsheet\Spreadsheet;
                use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
                include_once "dbcontroller.php";
                $spreadsheet = new Spreadsheet();
                $sheet = $spreadsheet->getActiveSheet();
                $db = new DBController();

                if ($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, ssn, birthday, race, isHispanic, email, mStreet, mStreet2, mCity, mState, mZip, pStreet, pStreet2, pCity, pState, pZip, isCitizen, ged, volunteer, admissionStatus, schoolWithdrawDate, unemployed, underemployed, workplace, wage, hoursWorking, accomplish1, accomplish2, recBy, recNum,  gradeCompleted, hairColor, eyeColor, height, weight, personsInHouse, houseIncome, gaResident, preferredComm, campusLocation FROM cadets"))
                {
                  $results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, ssn, birthday, race, isHispanic, email, mStreet, mStreet2, mCity, mState, mZip FROM cadets");
                    $sheet->setCellValue('A1', 'fName');
                    $sheet->setCellValue('B1', 'mName');
                    $sheet->setCellValue('C1', 'lName');
                    $sheet->setCellValue('F1', 'genQual');
                    $sheet->setCellValue('D1', 'gender');
                    $sheet->setCellValue('E1', 'ssn');
                    $sheet->setCellValue('G1', 'birthday');
                    $sheet->setCellValue('H1', 'race');
                    $sheet->setCellValue('I1', 'isHispanic');
                    $sheet->setCellValue('J1', 'email');
                    $sheet->setCellValue('K1', 'mStreet');
                    $sheet->setCellValue('L1', 'mStreet2');
                    $sheet->setCellValue('M1', 'mCity');
                    $sheet->setCellValue('N1', 'mState');
                    $sheet->setCellValue('O1', 'mZip');
                    $int = 2;
	                  foreach($results as $row)
	                  {
	                    $sheet->setCellValue('A' . $int, $row['fName']);
	                    $sheet->setCellValue('B' . $int, $row['mName']);
	                    $sheet->setCellValue('C' . $int, $row['lName']);
	                    $sheet->setCellValue('F' . $int, $row['genQual']);
	                    $sheet->setCellValue('D' . $int, $row['gender']);
	                    $sheet->setCellValue('E' . $int, $row['ssn']);
	                    $sheet->setCellValue('G' . $int, $row['birthday']);
	                    $sheet->setCellValue('H' . $int, $row['race']);
	                    $sheet->setCellValue('I' . $int, $row['isHispanic']);
	                    $sheet->setCellValue('J' . $int, $row['email']);
	                    $sheet->setCellValue('K' . $int, $row['mStreet']);
	                    $sheet->setCellValue('L' . $int, $row['mStreet2']);
	                    $sheet->setCellValue('M' . $int, $row['mCity']);
	                    $sheet->setCellValue('N' . $int, $row['mState']);
	                    $sheet->setCellValue('O' . $int, $row['mZip']);
						$sheet->setCellValue('P' . $int, $row['pStreet']);
						$sheet->setCellValue('Q' . $int, $row['pStreet2']);
						$sheet->setCellValue('R' . $int, $row['pCity']);
						$sheet->setCellValue('S' . $int, $row['pState']);
						$sheet->setCellValue('T' . $int, $row['pZip']);
						$sheet->setCellValue('U' . $int, $row['isCitizen']);
						$sheet->setCellValue('V' . $int, $row['ged']);
						$sheet->setCellValue('W' . $int, $row['volunteer']);
						$sheet->setCellValue('X' . $int, $row['admissionStatus']);
						$sheet->setCellValue('Y' . $int, $row['schoolWithdrawDate']);
						$sheet->setCellValue('Z' . $int, $row['unemployed']);
						$sheet->setCellValue('AA' . $int, $row['underemployed']);
						$sheet->setCellValue('AB' . $int, $row['workplace']);
						$sheet->setCellValue('AC' . $int, $row['wage']);
						$sheet->setCellValue('AD' . $int, $row['hoursWorking']);
						$sheet->setCellValue('AP' . $int, $row['accomplish1']);
						$sheet->setCellValue('AF' . $int, $row['accomplish2']);
						$sheet->setCellValue('AG' . $int, $row['recBy']);
						$sheet->setCellValue('AH' . $int, $row['recNum']);
						$sheet->setCellValue('AI' . $int, $row['  gradeCompleted']);
						$sheet->setCellValue('AJ' . $int, $row['hairColor']);
						$sheet->setCellValue('AK' . $int, $row['eyeColor']);
						$sheet->setCellValue('AL' . $int, $row['height']);
						$sheet->setCellValue('AM' . $int, $row['weight']);
						$sheet->setCellValue('AN' . $int, $row['personsInHouse']);
						$sheet->setCellValue('AO' . $int, $row['houseIncome']);
						$sheet->setCellValue('AP' . $int, $row['gaResident']);
						$sheet->setCellValue('AQ' . $int, $row['preferredComm']);
						$sheet->setCellValue('AR' . $int, $row['campusLocation']);


	                    $writer = new Xlsx($spreadsheet);
	                    $writer->save('CadetExport.xlsx'); //Name selection for export

	                    
	                    if (isset($_POST['action'])) { 
	                        switch ($_POST['action']) {
	                            case 'save':
	                            import();
	                            break;
	                        }
	                    }
                    	$int++;
                  		}
                }
                header("Location:allCadetView.php"); //Redirects to allCadetView page.
?>
</html>