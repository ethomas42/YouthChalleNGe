<!DOCTYPE html>
<html>
<?php
    /*
    Created by: A-Team (James Harrison, Charles Ramsey, Evan Thomas, and Colton Thompson)
    The purpose of this file is to take a string of tableNames.fieldNames and output them into an excel sheet with headers and the data correctly organized.
    */
    require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    include_once "dbcontroller.php";
    require_once 'phpFunctions.php';
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $db = new DBController();

    $sqlFrom = "";
    $sqlWhere = "";
    $sqlSSN = array();
    $tableNames = array();
    $tableFields = array();

    $keywords = $_POST['fieldNames']; //String of all tableNames.fieldNames
    $fileName = $_POST['fileName']; //Name of file to be saved to
    $fileName .= '.xlsx';

    $array = explode(",", $keywords); //Turns tableName.fieldName string into array.
    $keywords = implode(" ", $array); // Turn this back into array so that we can begin to split the tableNames and fieldNames.
    $splitter = explode(".", $keywords); //Used to split the Field Names and the Table Names.

    $string2 = implode(" ", $splitter); //Add a space to give a variable to split all names by a space.
    $splitter = explode(" ", $string2); //Turn each name into an entry in an array
    $alphabet = range('a', 'z'); //Creates a 26 entry array from the alphabet.

    for($i = 0; $i < sizeof($splitter); $i+=2) //Increment through the array by 2 so that all tableNames are saved.
    {
        $tableNames[] = $splitter[$i]; //Adds each entry
        $tableFields[] = $splitter[$i+1];
    }
    $tables = array_unique($tableNames); //Turn tableNames into an array of unique tableNames.

    foreach($tables as $key) { //For loop to create the FROM clause and collecting the info needed to create the WHERE clause
        $sqlFrom.=$key.", ";
        $sqlSSN[] = $key.".ssn";
    }

    for($num = 1; $num < sizeof($sqlSSN); $num++) //For loop to create the WHERE clause
    {
        if($num = 1) $sqlWhere.= "WHERE ";
        $sqlWhere .= $sqlSSN[0] . " = " . $sqlSSN[$num] . " AND ";
    }
    $sqlFrom=rtrim($sqlFrom, ", ")." "; //Trims final ',' off of the FROM clause
    $sqlWhere=rtrim($sqlWhere, "AND ").""; //Trims final 'AND' off of the WHERE clause
    
    $fieldNames = explode(" ", $keywords); //Turn the list of fieldNames back into an array.
    $sql = "SELECT ";
    foreach($fieldNames as $key) { //Creates the SELECT clause
      $sql.=$key.", ";    
    }
    $sql=rtrim($sql, ", ")." "; //Trims final ',' off of the SELECT clause
    $sql.= "FROM ". $sqlFrom . $sqlWhere; //Combine all of the clauses to create our SQL statement

    if ($db->numRows($sql)) //If loop to see if there our entries that work with our SQL statement
    {
      $results = $db->runQuery($sql); //Selects one record meeting our SQL statement.
      for($n = 0; $n < sizeof($tableFields); $n++) //Loop for obtaining field names and putting them into first column of Excel. //$keywords instead of $fieldNames
      {
        $sheet->setCellValue($alphabet[$n] .'1', $fieldNames[$n]);
      }
        $num = 2;
        foreach($results as $row) //Loop for putting records into excel record at a time.
        {
            //var_dump($row); //ERROR HERE
            for($n = 0; $n < sizeof($tableFields); $n++)
            {
               $sheet->setCellValue($alphabet[$n] . $num, $row[$tableFields[$n]]);
            }

            $writer = new Xlsx($spreadsheet);
            $writer->save($fileName); //Name selection for export
        	$num++;
      	}
    }
    
	if (file_exists($fileName)) 
	{
		ob_end_clean(); //Clears the file buffer
		
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.basename($fileName).'"');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($fileName));
		readfile($fileName);
		move_uploaded_file($fileName, "/Exports"); 
		//exit;
	}
	
	if(isset($_POST['saveTemp']))
	{
		$fields = $_POST['fieldNames'];
		$name = $_POST['inputTemplateName'];
		$fields = str_replace(",", ";", $fields);
		$date = date("Y-m-d");
		$db->runQuery("INSERT INTO reports (name, fields, dateCreated) VALUES ('$name', '$fields', '$date')");
	}
	
    //header("Location:reportView.php"); //Redirects to Reports page.
?>
</html>
