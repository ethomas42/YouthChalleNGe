<!DOCTYPE html>
<?php
function locationCadetAll($location)
{
echo <<<_EOF
    <body>

        <div class="wrapper">
            <!-- Page Content Holder -->
            <div id="content">

				  <ul class="nav nav-pills" role="tablist">
					<li class="nav-item">
					  <a class="nav-link active" name="pill" data-toggle="pill" href="#nav-current">Current</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="pill" href="#nav-grad">Graduated</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="pill" href="#nav-all">All</a>
					</li>
				  </ul>
				<div class="tab-content">
				  <div class="tab-pane active container" id="nav-current">
					<table id="current-table" class="table table-striped table-bordered" cellspacing="0">
						<thead>
							<tr>
								<th>SSN</th>
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Last Name</th>
								<th>GenQual</th>
								<th>Gender</th>
								<th>Birthday</th>
								<th>Age</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include_once "dbcontroller.php";
								$db = new DBController();
								if ($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, birthday, age, email FROM cadets WHERE admissionStatus = 'current' AND campusLocation = $location"))
								{
									$results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, birthday, age, email FROM cadets WHERE admissionStatus = 'current' AND campusLocation = $location);
									foreach($results as $row)
									{
										echo <<<_END
												<tr>
													<td>{$row['ssn']}</td>
													<td>{$row['fName']}</td>
													<td>{$row['mName']}</td>
													<td>{$row['lName']}</td>
													<td>{$row['genQual']}</td>
													<td>{$row['gender']}</td>
													<td>{$row['birthday']}</td>
													<td>{$row['age']}</td>
													<td>{$row['email']}</td>
												</tr>
_END;
									}
								}
							?>
						</tbody>
					</table>
				  </div>
				  <div class="tab-pane container" id="nav-grad">
					<table id="graduated-table" class="table table-striped table-bordered" cellspacing="0">
						<thead>
							<tr>
								<th>SSN</th>
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Last Name</th>
								<th>GenQual</th>
								<th>Gender</th>
								<th>Birthday</th>
								<th>Age</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include_once "dbcontroller.php";
								$db = new DBController();
								if($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, birthday, age, email FROM cadets WHERE admissionStatus = 'graduated' AND campusLocation = $location"))
								{
									$results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, birthday, age, email FROM cadets WHERE admissionStatus = 'graduated' AND campusLocation = $location");
									foreach($results as $row)
									{
										echo <<<_END
												<tr>
													<td>{$row['ssn']}</td>
													<td>{$row['fName']}</td>
													<td>{$row['mName']}</td>
													<td>{$row['lName']}</td>
													<td>{$row['genQual']}</td>
													<td>{$row['gender']}</td>
													<td>{$row['birthday']}</td>
													<td>{$row['age']}</td>
													<td>{$row['email']}</td>
												</tr>
_END;
									}
								}
}
?>

						</tbody>
					</table>
				  </div>
				  <div class="tab-pane container" id="nav-all">
					<table id="all-table" class="table table-striped table-bordered" cellspacing="0">
						<thead>
							<tr>
								<th>SSN</th>
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Last Name</th>
								<th>GenQual</th>
								<th>Gender</th>
								<th>Birthday</th>
								<th>Age</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include_once "dbcontroller.php";
								$db = new DBController();
								if($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, birthday, age, email FROM cadets WHERE campusLocation = $location"))
								{
									$results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, birthday, age, email FROM cadets WHERE campusLocation = $location");
									foreach($results as $row)
									{
										echo <<<_END
												<tr>
													<td>{$row['ssn']}</td>
													<td>{$row['fName']}</td>
													<td>{$row['mName']}</td>
													<td>{$row['lName']}</td>
													<td>{$row['genQual']}</td>
													<td>{$row['gender']}</td>
													<td>{$row['birthday']}</td>
													<td>{$row['age']}</td>
													<td>{$row['email']}</td>
												</tr>
_END;
_EOF;
}
?>