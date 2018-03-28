<!DOCTYPE html>
<html>
	<?php
		require 'vendor/autoload.php';
        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
		$reader->setReadDataOnly(TRUE);
		$spreadsheet = $reader->load("Test.xlsx");

		$worksheet = $spreadsheet->getActiveSheet();

		echo '<table>' . PHP_EOL;
		foreach ($worksheet->getRowIterator() as $row) {
		    echo '<tr>' . PHP_EOL;
		    $cellIterator = $row->getCellIterator();
		    $cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,
		                                                       //    even if a cell value is not set.
		                                                       // By default, only cells that have a value
		                                                       //    set will be iterated.
		    foreach ($cellIterator as $cell) {
		        echo '<td>' .
		             $cell->getValue() .
		             '</td>' . PHP_EOL;
		    }
		    echo '</tr>' . PHP_EOL;
		}
		echo '</table>' . PHP_EOL;
		//echo $spreadsheet->getActiveSheet()->getCell('A2');
	?>
</html>