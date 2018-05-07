<!DOCTYPE html>
<?php
	/*
	Created by: A-Team (James Harrison, Charles Ramsey, Evan Thomas, and Colton Thompson)
	The purpose of this page is to sort all applicants into two tabs, 'pending' and 'rejected' and to allow a user to search for a specific application or create a new application.
	*/
	include_once "basicPage.php";
	basicPage("Milledgeville Applicants"); //Loads the basicPage loadout.
?>
<script>
	function restrictApplicants() //Method used to restrict anyone who does not have the proper permissions on this page.
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
							<thead> <!--Headings for the table of entries of applicants in this tab-->
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
									//The purpose of this PHP area is to select all applicants that meet the requirements of the tab that they are under.
									include_once "dbcontroller.php";
									$db = new DBController();
									if ($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'pending'")) //If there are pending records, print pending records in our table.
									{
										$results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'pending'");
										foreach($results as $row)
										{
											$tempSSN = substr($row['ssn'], -4); //Used to hide the Social Security Number of applicants
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
							<thead> <!--Headings for the table of entries of applicants in this tab-->
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
									//The purpose of this PHP area is to select all applicants that meet the requirements of the tab that they are under.
									include_once "dbcontroller.php";
									$db = new DBController();
									if ($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'rejected'")) //If there are rejected records, print rejected records in the table.
									{
										$results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, birthday, email FROM cadets WHERE admissionStatus = 'rejected'");
										foreach($results as $row)
										{
											$tempSSN = substr($row['ssn'], -4); //Used to hide the Social Security Number of applicants
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
				</div>
			<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>
