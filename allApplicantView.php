<!DOCTYPE html>
<?php
	include_once "basicPage.php";
	basicPage("Milledgeville Applicants");
?>
<script>
	function restrictApplicants()
	{
		var createApplicants = "<?=$_SESSION['permissions']['createApplicants']?>";
		if (!(createApplicants == 1))
			document.getElementById('newAppButton').setAttribute('disabled', 'true');
	}
	window.onload = restrictApplicants;
</script>

				<form method="post" action="newApplicant.php"><button type="submit" class="btn btn-primary" id="newAppButton">New Applicant</button></form><p></br></p>
				  <ul class="nav nav-tabs nav-justified" role="tablist">
					<li class="nav-item active">
					  <a class="nav-link" data-toggle="tab" href="#nav-pending">Pending</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#nav-rejected">Rejected</a>
					</li>
				  </ul>
				  </br>
				  <div class="tab-content">
				    <div class="tab-pane active container col-sm-12" id="nav-pending">
						<table id="pending-table" class="table table-striped table-bordered" cellspacing="0">
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
									if ($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'pending'"))
									{
										$results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'pending'");
										foreach($results as $row)
										{
											$tempSSN = substr($row['ssn'], -4);
											echo <<<_END
													<tr>
														<td><form method="post" action="applicantView.php"><input type="hidden" name="ssn" value="{$row['ssn']}"><button type="submit" class="btn btn-primary">View Applicant</button></form></td>
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
				    <div class="tab-pane container col-sm-12" id="nav-rejected">
						<table id="rejected-table" class="table table-striped table-bordered" cellspacing="0">
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
									if ($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'rejected'"))
									{
										$results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'rejected'");
										foreach($results as $row)
										{
											$tempSSN = substr($row['ssn'], -4);
											echo <<<_END
													<tr>
														<td><form method="post" action="applicantView.php"><input type="hidden" name="ssn" value="{$row['ssn']}"><button type="submit">View Applicant</button></form></td>
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
