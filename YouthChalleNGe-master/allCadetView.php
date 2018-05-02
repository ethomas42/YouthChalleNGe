<!DOCTYPE html>
<?php
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
				<form action='export-data.php'>
					<button class='btn btn-danger col-sm-2' id='export-button'>Export All</button>
				</form>
				<form action='import-data.php'>
					<button class="btn btn-danger col-sm-2" id="import-button" >Import Cadets</button>
				</form>
				<div class="tab-content">
				  <div class="tab-pane active container col-sm-12" id="nav-current">
					<table id="current-table" class="table table-striped table-bordered" cellspacing="0">
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
								if ($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'current'"))
								{
									$results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'current'");
									foreach($results as $row)
									{
										$tempSSN = substr($row['ssn'], -4);
										echo <<<_END
												<tr>
													<td><form method="post" action="cadetView.php"><input type="hidden" name="ssn" value="{$row['ssn']}"><button type="submit">View Cadet</button></form></td>
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
													<td><form method="post" action="cadetView.php"><input type="hidden" name="ssn" value="{$row['ssn']}"><button type="submit">View Cadet</button></form></td>
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
										$tempSSN = substr($row['ssn'], -4);
										echo <<<_END
												<tr>
													<td><form method="post" action="cadetView.php"><input type="hidden" name="ssn" value="{$row['ssn']}"><button type="submit">View Cadet</button></form></td>
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