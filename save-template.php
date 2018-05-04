<!DOCTYPE html>
<html>

<?php
    /*
    Created by: A-Team (James Harrison, Charles Ramsey, Evan Thomas, and Colton Thompson)
    The purpose of this file is to save a Report Template that has been Generated and needs to be saved.
    */
    require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    include_once "dbcontroller.php";
    require_once 'phpFunctions.php';
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $db = new DBController();
    $filename = $_POST["inputTemplateName"];
    $keywords = $_POST['fieldNames'];
    $keywords = explode(",",$keywords);
    $keytables = $_POST['tableNames'];
    
    $fieldsnames; 
    $sql = "SELECT ";
    foreach($keywords as $key) {
      $sql.=$key.", ";   
      $fieldnames.=$key;  
    }
    $sql=rtrim($sql, ", ")." ";
    $sql.= "FROM `cadets`"; 

    if ($db->numRows($sql))
    {
      $results = $db->runQuery($sql);
      $alphabet = range('a', 'z');
      for($n = 0; $n < sizeof($keywords); $n++)
      {
        $sheet->setCellValue($alphabet[$n] .'1', $keywords[$n]);
      }
        $i = 0;
        $num = 2;
        foreach($results as $row)
        {
            for($n = 0; $n < sizeof($keywords); $n++)
            {
               $sheet->setCellValue($alphabet[$n] . $num, $row[$keywords[$n]]);
            }

            $writer = new Xlsx($spreadsheet);
            $writer->save('ReportExport.xlsx'); //Name selection for export
        	$num++;
      	}
    }
    header("Location:reportView.php"); //Redirects to Reports page.
    $encode = json_encode($sql); 
    $db->runQuery("INSERT INTO reports (name, fields) VALUES ('$filename', '$encode')"); 
?>
</html>