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


                    $writer = new Xlsx($spreadsheet);
                    $writer->save('Test.xlsx');

                    
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

/*
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');

$writer = new Xlsx($spreadsheet);
$writer->save('Test.xlsx');

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'save':
        import();
        break;
    }
}*/

?>
</html>