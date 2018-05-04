<!DOCTYPE html>
<?php
	/*
	Created by: A-Team (James Harrison, Charles Ramsey, Evan Thomas, and Colton Thompson)
	The purpose of this page is to sort all cadets into three tabs ('current', 'graduated', and 'all') and to allow a user to search for a specific cadet. On this page, there is also functionality for importing cadets using an Excel Spreadsheet and exporting all cadets into an Excel Spreadsheet.
	*/
	include_once "basicPage.php";
	basicPage("Milledgeville Cadets");
?>

				  <ul class="nav nav-tabs nav-justified" role="tablist">
					<li class="nav-item active">
					  <a class="nav-link" data-toggle="tab" href="#nav-current">Current</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#nav-grad">Graduated</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#nav-all">All</a>
					</li>
				  </ul>
				  </br>
				<form action='export-data.php' download> <!--Used for the Export Functionality (export-data.php) -->
					<button class='btn btn-danger col-sm-2' id='export-button'>Export All</button>
				</form>
				<form action='import-data.php' method="POST"> <!--Used for the Import Functionalit (import-data.php). Requires the user to Select the Import file. -->
					<button class="btn btn-danger col-sm-2" id="import-button" >Import Cadets</button>
					<label class="custom-file"> Select Import File
                    <input name="importFile" type="file" id="file" class="custom-file-input">
                    <span name="importFile" class="custom-file-control"></span>
                </label>
				</form>
				<div class="tab-content">
				  <div class="tab-pane active container col-sm-12" id="nav-current">
					<table id="current-table" class="table table-striped table-bordered" cellspacing="0">
						<thead> <!--Headings for the table of entries of cadets in this tab-->
							<tr>
								<th>View</th>
								<th>SSN</th>
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Last Name</th>
								<th>GenQual</th>
								<th>Gender</th>
								<th>Birthday</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>
							<?php
								//The purpose of this PHP area is to select all cadets that meet the requirements of the tab that they are under.
								include_once "dbcontroller.php";
								$db = new DBController();
								if ($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'current'")) //If there are not pending records, print non-pending records in our table.
								{
									$results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'current'");
									foreach($results as $row)
									{
										$tempSSN = substr($row['ssn'], -4);
										echo <<<_END
												<tr>
													<td><form method="post" action="cadetView.php"><input type="hidden" name="ssn" value="{$row['ssn']}"><button type="submit" class="btn btn-primary">View Cadet</button></form></td>
													<td>*****{$tempSSN}</td>
													<td>{$row['fName']}</td>
													<td>{$row['mName']}</td>
													<td>{$row['lName']}</td>
													<td>{$row['genQual']}</td>
													<td>{$row['gender']}</td>
													<td>{$row['birthday']}</td>
													<td>{$row['email']}</td>
												</tr>
_END;
									}
								}
							?>
						</tbody>
					</table>
				  </div>
				  <div class="tab-pane container col-sm-12" id="nav-grad">
					<table id="graduated-table" class="table table-striped table-bordered" cellspacing="0">
						<thead>
							<tr>
								<th>View</th>
								<th>SSN</th>
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Last Name</th>
								<th>GenQual</th>
								<th>Gender</th>
								<th>Birthday</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include_once "dbcontroller.php";
								$db = new DBController();
								if($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'graduated'"))
								{
									$results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'graduated'");
									foreach($results as $row)
									{
										$tempSSN = substr($row['ssn'], -4);
										echo <<<_END
												<tr>
													<td><form method="post" action="cadetView.php"><input type="hidden" name="ssn" value="{$row['ssn']}"><button type="submit" class="btn btn-primary">View Cadet</button></form></td>
													<td>*****{$tempSSN}</td>
													<td>{$row['fName']}</td>
													<td>{$row['mName']}</td>
													<td>{$row['lName']}</td>
													<td>{$row['genQual']}</td>
													<td>{$row['gender']}</td>
													<td>{$row['birthday']}</td>
													<td>{$row['email']}</td>
												</tr>
_END;
									}
								}
							?>
						</tbody>
					</table>
				  </div>
				  <div class="tab-pane container col-sm-12" id="nav-all">
					<table id="all-table" class="table table-striped table-bordered" cellspacing="0">
						<thead>
							<tr>
								<th>View</th>
								<th>SSN</th>
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Last Name</th>
								<th>GenQual</th>
								<th>Gender</th>
								<th>Birthday</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include_once "dbcontroller.php";
								$db = new DBController();
								if($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus != 'pending'"))
								{
									$results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus != 'pending'");
									foreach($results as $row)
									{
										$tempSSN = substr($row['ssn'], -4); //Used to hide the cadets Social Security Number
										echo <<<_END
												<tr>
													<td><form method="post" action="cadetView.php"><input type="hidden" name="ssn" value="{$row['ssn']}"><button type="submit" class="btn btn-primary">View Cadet</button></form></td>
													<td>*****{$tempSSN}</td>
													<td>{$row['fName']}</td>
													<td>{$row['mName']}</td>
													<td>{$row['lName']}</td>
													<td>{$row['genQual']}</td>
													<td>{$row['gender']}</td>
													<td>{$row['birthday']}</td>
													<td>{$row['email']}</td>
												</tr>
_END;
									}
								}
							?>
						</tbody>
					</table>
				  </div>
				</div>
				<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>
