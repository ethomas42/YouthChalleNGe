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

                //if(isset($_POST['fields'])){
                $keywords = $_REQUEST['fields'];
                //} //else {
                    //$keywords = array("fName", "mName", "lName"); 
                //}
                $inClause = "'".implode("','", $keywords)."'";
                $sql = "SELECT ";
                foreach($keywords as $key) {
                  $sql.=$key.", ";    
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
                    $int = 2;
	                foreach($results as $row)
	                {
                        for($n = 0; $n < sizeof($keywords); $n++)
                        {
                           $sheet->setCellValue($alphabet[$n] . $int, $row[$keywords[$n]]);
                        }

	                    $writer = new Xlsx($spreadsheet);
	                    $writer->save('ReportExport.xlsx'); //Name selection for export

	                    
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
                //header("Location:reportView.php"); //Redirects to Reports page.
?>
</html>