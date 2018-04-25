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

                if ($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, ssn, birthday, race, isHispanic, email, mStreet, mStreet2, mCity, mState, mZip FROM cadets"))
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
					$sheet->setCellValue('P1', 'pStreet');
					$sheet->setCellValue('Q1', 'pStreet2');
					$sheet->setCellValue('R1', 'pCity');
					$sheet->setCellValue('S1', 'pState');
					$sheet->setCellValue('T1', 'pZip');
					$sheet->setCellValue('U1', 'isCitizen');
					$sheet->setCellValue('V1', 'ged');
					$sheet->setCellValue('W1', 'volunteer');
					$sheet->setCellValue('X1', 'admissionStatus');
					$sheet->setCellValue('Y1', 'schoolWithdrawDate');
					$sheet->setCellValue('Z1', 'unemployed');
					$sheet->setCellValue('AA1', 'underemployed');
					$sheet->setCellValue('AB1', 'workplace');
					$sheet->setCellValue('AC1', 'wage');
					$sheet->setCellValue('AD1', 'hoursWorking');
					$sheet->setCellValue('AE1', 'accomplish1');
					$sheet->setCellValue('AF1', 'accomplish2');
					$sheet->setCellValue('AG1', 'recBy');
					$sheet->setCellValue('AH1', 'recNum');
					$sheet->setCellValue('AI1', 'gradeCompleted');
					$sheet->setCellValue('AJ1', 'hairColor');
					$sheet->setCellValue('AK1', 'eyeColor');
					$sheet->setCellValue('AL1', 'height');
					$sheet->setCellValue('AM1', 'weight');
					$sheet->setCellValue('AN1', 'personsInHouse');
					$sheet->setCellValue('AO1', 'houseIncome');
					$sheet->setCellValue('AP1', 'gaResident');
					$sheet->setCellValue('AQ1', 'preferredComm');
					$sheet->setCellValue('AR1', 'campusLocation');
					$sheet->setCellValue('AS1', 'company');

                    $num = 2;
	                  foreach($results as $row)
	                  {
	                    $sheet->setCellValue('A' . $num, $row['fName']);
	                    $sheet->setCellValue('B' . $num, $row['mName']);
	                    $sheet->setCellValue('C' . $num, $row['lName']);
	                    $sheet->setCellValue('F' . $num, $row['genQual']);
	                    $sheet->setCellValue('D' . $num, $row['gender']);
	                    $sheet->setCellValue('E' . $num, $row['ssn']);
	                    $sheet->setCellValue('G' . $num, $row['birthday']);
	                    $sheet->setCellValue('H' . $num, $row['race']);
	                    $sheet->setCellValue('I' . $num, $row['isHispanic']);
	                    $sheet->setCellValue('J' . $num, $row['email']);
	                    $sheet->setCellValue('K' . $num, $row['mStreet']);
	                    $sheet->setCellValue('L' . $num, $row['mStreet2']);
	                    $sheet->setCellValue('M' . $num, $row['mCity']);
	                    $sheet->setCellValue('N' . $num, $row['mState']);
	                    $sheet->setCellValue('O' . $num, $row['mZip']);
						$sheet->setCellValue('P' . $num, $row['pStreet']);
						$sheet->setCellValue('Q' . $num, $row['pStreet2']);
						$sheet->setCellValue('R' . $num, $row['pCity']);
						$sheet->setCellValue('S' . $num, $row['pState']);
						$sheet->setCellValue('T' . $num, $row['pZip']);
						$sheet->setCellValue('U' . $num, $row['isCitizen']);
						$sheet->setCellValue('V' . $num, $row['ged']);
						$sheet->setCellValue('W' . $num, $row['volunteer']);
						$sheet->setCellValue('X' . $num, $row['admissionStatus']);
						$sheet->setCellValue('Y' . $num, $row['schoolWithdrawDate']);
						$sheet->setCellValue('Z' . $num, $row['unemployed']);
						$sheet->setCellValue('AA' . $num, $row['underemployed']);
						$sheet->setCellValue('AB' . $num, $row['workplace']);
						$sheet->setCellValue('AC' . $num, $row['wage']);
						$sheet->setCellValue('AD' . $num, $row['hoursWorking']);
						$sheet->setCellValue('AE' . $num, $row['accomplish1']);
						$sheet->setCellValue('AF' . $num, $row['accomplish2']);
						$sheet->setCellValue('AG' . $num, $row['recBy']);
						$sheet->setCellValue('AH' . $num, $row['recNum']);
						$sheet->setCellValue('AI' . $num, $row['gradeCompleted']);
						$sheet->setCellValue('AJ' . $num, $row['hairColor']);
						$sheet->setCellValue('AK' . $num, $row['eyeColor']);
						$sheet->setCellValue('AL' . $num, $row['height']);
						$sheet->setCellValue('AM' . $num, $row['weight']);
						$sheet->setCellValue('AN' . $num, $row['personsInHouse']);
						$sheet->setCellValue('AO' . $num, $row['houseIncome']);
						$sheet->setCellValue('AP' . $num, $row['gaResident']);
						$sheet->setCellValue('AQ' . $num, $row['preferredComm']);
						$sheet->setCellValue('AR' . $num, $row['campusLocation']);
						$sheet->setCellValue('AS' . $num, $row['company']);


	                    $writer = new Xlsx($spreadsheet);
	                    $writer->save('CadetExport.xlsx'); //Name selection for export

	                    
	                    if (isset($_POST['action'])) { 
	                        switch ($_POST['action']) {
	                            case 'save':
	                            import();
	                            break;
	                        }
	                    }
                    	$num++;
                  		}
                }
                header("Location:allCadetView.php"); //Redirects to allCadetView page.
?>
</html>