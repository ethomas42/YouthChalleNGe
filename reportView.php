<!DOCTYPE html>
<?php
	/*
	Created by: The A-Team (James Harrison, Charles Ramsey, Evan Thomas, and Colton Thompson)
	The purpose of this file is to allow a user to select specific fields from multiple tables and then allow the user to generate an excel file with those selected fields
	*/
	include_once "basicPage.php";
    require_once 'dbcontroller.php';
	basicPage("Report Generation");
    
    $repName = $_POST['repName']; 
	include_once "dbcontroller.php";
	// if editing an existing report, grab the fields
	if(!empty($repName)) {
		$db = new DBController();
		if ($db->numRows("SELECT fields FROM reports WHERE name='" . $repName . "'"))
		{
			$results = $db->runQuery("SELECT fields FROM reports WHERE name='" . $repName . "'");
		}
	}
	if(empty($results[0]['fields'])) {
		$results[0]['fields'] = "";
	}
?>
			
            <script>
            $(document).ready(function(){
				// fill columns table with columns if they're editing an existing report
				var repName = "<?= $repName; ?>";
				if(repName) {
					// grab field names from database and split them
					var fields = "<?= $results[0]['fields']; ?>";
					fields = fields.split(";").filter(function(el) {return el.length != 0}); // split and filter out empty elements
					if(fields) {
						for(var i = 0; i < fields.length; i ++) {
							$("[id ='" + fields[i] + "'] + td > button").click(); 
						}
					}
				}
				
				// DataTables init
				$("#allergiesColumns").DataTable( {
					"lengthChange": false,
					"info": false
				});
				$("#attachmentsColumns").DataTable( {
					"lengthChange": false,
					"info": false
				});
				$("#cadetsColumns").DataTable( {
					"lengthChange": false,
					"info": false
				});
				$("#applicantsColumns").DataTable( {
					"lengthChange": false,
					"info": false
				});
				$("#courtAssignmentsColumns").DataTable( {
					"lengthChange": false,
					"info": false
				});
				$("#guardiansColumns").DataTable( {
					"lengthChange": false,
					"info": false
				});
				$("#immunizationsColumns").DataTable( {
					"lengthChange": false,
					"info": false
				});
				$("#insuranceColumns").DataTable( {
					"lengthChange": false,
					"info": false
				});
				$("#medicationsColumns").DataTable( {
					"lengthChange": false,
					"info": false
				});
				$("#phoneNumbersColumns").DataTable( {
					"lengthChange": false,
					"info": false
				});
				$("#referralsColumns").DataTable( {
					"lengthChange": false,
					"info": false
				});
				$("#substanceAbuseColumns").DataTable( {
					"lengthChange": false,
					"info": false
				});
				
				// hide stuff initially, except for whatever default inputTable is
                $("#allergiesDiv").hide();
				$("#attachmentsDiv").hide();
				//$("#cadetsDiv").hide();
				$("#applicantsDiv").hide(); 
				$("#courtAssignmentsDiv").hide();
				$("#guardiansDiv").hide();
				$("#immunizationsDiv").hide();
				$("#insuranceDiv").hide();
				$("#medicationsDiv").hide();
				$("#phoneNumbersDiv").hide();
				$("#referralsDiv").hide();
				$("#substanceAbuseDiv").hide();
				
				
                $('#inputTable').on('change', function() {
					if(this.value == 'cadets') { 
						$("#allergiesDiv").hide();
						$("#attachmentsDiv").hide();
						$("#cadetsDiv").show();
						$("#applicantsDiv").hide(); 
						$("#courtAssignmentsDiv").hide();
						$("#guardiansDiv").hide();
						$("#immunizationsDiv").hide();
						$("#insuranceDiv").hide();
						$("#medicationsDiv").hide();
						$("#phoneNumbersDiv").hide();
						$("#referralsDiv").hide();
						$("#substanceAbuseDiv").hide();
					} else if(this.value == 'allergies') { 
						$("#allergiesDiv").show();
						$("#attachmentsDiv").hide();
						$("#cadetsDiv").hide();
						$("#applicantsDiv").hide(); 
						$("#courtAssignmentsDiv").hide();
						$("#guardiansDiv").hide();
						$("#immunizationsDiv").hide();
						$("#insuranceDiv").hide();
						$("#medicationsDiv").hide();
						$("#phoneNumbersDiv").hide();
						$("#referralsDiv").hide();
						$("#substanceAbuseDiv").hide();
					} else if(this.value == 'attachments') { 
						$("#allergiesDiv").hide();
						$("#attachmentsDiv").show();
						$("#cadetsDiv").hide();
						$("#applicantsDiv").hide(); 
						$("#courtAssignmentsDiv").hide();
						$("#guardiansDiv").hide();
						$("#immunizationsDiv").hide();
						$("#insuranceDiv").hide();
						$("#medicationsDiv").hide();
						$("#phoneNumbersDiv").hide();
						$("#referralsDiv").hide();
						$("#substanceAbuseDiv").hide();
					} else if(this.value == 'applicants') { 
						$("#allergiesDiv").hide();
						$("#attachmentsDiv").hide();
						$("#cadetsDiv").hide();
						$("#applicantsDiv").show(); 
						$("#courtAssignmentsDiv").hide();
						$("#guardiansDiv").hide();
						$("#immunizationsDiv").hide();
						$("#insuranceDiv").hide();
						$("#medicationsDiv").hide();
						$("#phoneNumbersDiv").hide();
						$("#referralsDiv").hide();
						$("#substanceAbuseDiv").hide();
					} else if(this.value == 'courtAssignments') { 
						$("#allergiesDiv").hide();
						$("#attachmentsDiv").hide();
						$("#cadetsDiv").hide();
						$("#applicantsDiv").hide(); 
						$("#courtAssignmentsDiv").show();
						$("#guardiansDiv").hide();
						$("#immunizationsDiv").hide();
						$("#insuranceDiv").hide();
						$("#medicationsDiv").hide();
						$("#phoneNumbersDiv").hide();
						$("#referralsDiv").hide();
						$("#substanceAbuseDiv").hide();
					} else if(this.value == 'guardians') { 
						$("#allergiesDiv").hide();
						$("#attachmentsDiv").hide();
						$("#cadetsDiv").hide();
						$("#applicantsDiv").hide(); 
						$("#courtAssignmentsDiv").hide();
						$("#guardiansDiv").show();
						$("#immunizationsDiv").hide();
						$("#insuranceDiv").hide();
						$("#medicationsDiv").hide();
						$("#phoneNumbersDiv").hide();
						$("#referralsDiv").hide();
						$("#substanceAbuseDiv").hide();
					} else if(this.value == 'immunizations') { 
						$("#allergiesDiv").hide();
						$("#attachmentsDiv").hide();
						$("#cadetsDiv").hide();
						$("#applicantsDiv").hide(); 
						$("#courtAssignmentsDiv").hide();
						$("#guardiansDiv").hide();
						$("#immunizationsDiv").show();
						$("#insuranceDiv").hide();
						$("#medicationsDiv").hide();
						$("#phoneNumbersDiv").hide();
						$("#referralsDiv").hide();
						$("#substanceAbuseDiv").hide();
					} else if(this.value == 'insurance') { 
						$("#allergiesDiv").hide();
						$("#attachmentsDiv").hide();
						$("#cadetsDiv").hide();
						$("#applicantsDiv").hide(); 
						$("#courtAssignmentsDiv").hide();
						$("#guardiansDiv").hide();
						$("#immunizationsDiv").hide();
						$("#insuranceDiv").show();
						$("#medicationsDiv").hide();
						$("#phoneNumbersDiv").hide();
						$("#referralsDiv").hide();
						$("#substanceAbuseDiv").hide();
					} else if(this.value == 'medications') { 
						$("#allergiesDiv").hide();
						$("#attachmentsDiv").hide();
						$("#cadetsDiv").hide();
						$("#applicantsDiv").hide(); 
						$("#courtAssignmentsDiv").hide();
						$("#guardiansDiv").hide();
						$("#immunizationsDiv").hide();
						$("#insuranceDiv").hide();
						$("#medicationsDiv").show();
						$("#phoneNumbersDiv").hide();
						$("#referralsDiv").hide();
						$("#substanceAbuseDiv").hide();
					} else if(this.value == 'phoneNumbers') { 
						$("#allergiesDiv").hide();
						$("#attachmentsDiv").hide();
						$("#cadetsDiv").hide();
						$("#applicantsDiv").hide(); 
						$("#courtAssignmentsDiv").hide();
						$("#guardiansDiv").hide();
						$("#immunizationsDiv").hide();
						$("#insuranceDiv").hide();
						$("#medicationsDiv").hide();
						$("#phoneNumbersDiv").show();
						$("#referralsDiv").hide();
						$("#substanceAbuseDiv").hide();
					} else if(this.value == 'referrals') { 
						$("#allergiesDiv").hide();
						$("#attachmentsDiv").hide();
						$("#cadetsDiv").hide();
						$("#applicantsDiv").hide(); 
						$("#courtAssignmentsDiv").hide();
						$("#guardiansDiv").hide();
						$("#immunizationsDiv").hide();
						$("#insuranceDiv").hide();
						$("#medicationsDiv").hide();
						$("#phoneNumbersDiv").hide();
						$("#referralsDiv").show();
						$("#substanceAbuseDiv").hide();
					} else { 
						$("#allergiesDiv").hide();
						$("#attachmentsDiv").hide();
						$("#cadetsDiv").hide();
						$("#applicantsDiv").hide(); 
						$("#courtAssignmentsDiv").hide();
						$("#guardiansDiv").hide();
						$("#immunizationsDiv").hide();
						$("#insuranceDiv").hide();
						$("#medicationsDiv").hide();
						$("#phoneNumbersDiv").hide();
						$("#referralsDiv").hide();
						$("#substanceAbuseDiv").show();
					}
                });
				
            });
            </script>
			<div class="container">
				<div class="row">
					<div class="col-xs-10">
						<div class="row form-row">
							<div class="form-group">
								<label for="reportToGen">Columns in New Report:</label>
								<table id="reportToGen" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Columns</th>
											<th>Remove</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
							<div class="form-group">
								<label for="inputWeekNum">Week Number</label>
								<select class="form-control" id="inputWeekNum">
									<option value="1" selected>1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<!-- Pull week numbers? -->
								</select>
							</div>
							<div class="form-group">
								<label for="inputTable">Table Name</label>
								<select class="form-control" id="inputTable">
									<option selected value="cadets">Cadets</option>
									<option value="allergies">Allergies</option>
									<option value="attachments">Attachments</option>
									<option value="applicants">Applicants</option>
									<option value="courtAssignments">Court Assignments</option>
									<option value="guardians">Guardians</option>
									<option value="immunizations">Immunizations</option>
									<option value="insurance">Insurance</option>
									<option value="medications">Medications</option>
									<option value="phoneNumbers">Phone Numbers</option>
									<option value="referrals">Referrals</option>
									<option value="substanceAbuse">Substance Abuse</option>
								</select>
							</div>
							
							<!-- Begin selection tables -->
							<div id="allergiesDiv">
								<table id="allergiesColumns" name="Allergy" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Allergy Columns</th>
											<th>Add to Report</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='allergies.type'>Allergy Type</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Allergy', 'Allergy Type', 'allergies.type')">Add</button></td></tr>
										<tr><td id='allergies.notes'>Allergy Notes</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Allergy', 'Allergy Notes', 'allergies.notes')">Add</button></td></tr>
									</tbody>
								</table>
							</div>
							<div id="attachmentsDiv">
								<table id="attachmentsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Attachment Columns</th>
											<th>Add to Report</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='attachments.filename'>Filename</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Attachment', 'Filenames', 'attachments.filename')">Add</button></td></tr>
										<tr><td id='attachments.uploadDate'>Upload Date</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Attachment', 'Upload Date', 'attachments.uploadDate')">Add</button></td></tr>
									</tbody>
								</table>
							</div>
							<div id="cadetsDiv">
								<table id="cadetsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Cadets Columns</th>
											<th>Add to Report</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='cadets.fName'>First Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'First Name', 'cadets.fName')">Add</button></td></tr>
										<tr><td id='cadets.mName'>Middle Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Middle Name', 'cadets.mName')">Add</button></td></tr>
										<tr><td id='cadets.lName'>Last Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Last Name', 'cadets.lName')">Add</button></td></tr>
										<tr><td id='cadets.gender'>Gender</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Gender', 'cadets.gender')">Add</button></td></tr>
										<tr><td id='cadets.ssn'>Social Security Number</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Social Security Number', 'cadets.ssn')">Add</button></td></tr>
										<tr><td id='cadets.genQual'>Generational Qualifier</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Generational Qualifier', 'cadets.genQual')">Add</button></td></tr>
										<tr><td id='cadets.birthday'>Date of Birth</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Date of Birth', 'cadets.birthday')">Add</button></td></tr>
										<tr><td id='cadets.race'>Race</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Race', 'cadets.race')">Add</button></td></tr>
										<tr><td id='cadets.isHispanic'>Hispanic</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Hispanic', 'cadets.isHispanic')">Add</button></td></tr>
										<tr><td id='cadets.email'>Email</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Email', 'cadets.email')">Add</button></td></tr>
										<tr><td id='cadets.mStreet'>Mailing Address</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Mailing Address', 'cadets.mStreet')">Add</button></td></tr>
										<tr><td id='cadets.mStreet2'>Mailing Address Line 2</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Mailing Address Line 2', 'cadets.mStreet2')">Add</button></td></tr>
										<tr><td id='cadets.mCity'>Mailing City</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Mailing City', 'cadets.mCity')">Add</button></td></tr>
										<tr><td id='cadets.mState'>Mailing State</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Mailing State', 'cadets.mState')">Add</button></td></tr>
										<tr><td id='cadets.pStreet'>Physical Address</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Physical Address', 'cadets.pStreet')">Add</button></td></tr>
										<tr><td id='cadets.pStreet2'>Physical Address Line 2</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Physical Address Line 2', 'cadets.pStreet2')">Add</button></td></tr>
										<tr><td id='cadets.pCity'>Physical City</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Physical City', 'cadets.pCity')">Add</button></td></tr>
										<tr><td id='cadets.pState'>Physical State</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Physical State', 'cadets.pState')">Add</button></td></tr>
										<tr><td id='cadets.pZip'>Physical Zip</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Physical Zip', 'cadets.pZip')">Add</button></td></tr>
										<tr><td id='cadets.isCitizen'>Citizenship</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Citizenship', 'cadets.isCitizen')">Add</button></td></tr>
										<tr><td id='cadets.ged'>GED</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'GED', 'cadets.ged')">Add</button></td></tr>
										<tr><td id='cadets.volunteer'>Volunteer Status</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Volunteer Status', 'cadets.volunteer')">Add</button></td></tr>
										<tr><td id='cadets.admissionStatus'>Admission Status</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Admission Status', 'cadets.admissionStatus')">Add</button></td></tr>
										<tr><td id='cadets.schoolWithdrawDate'>School Withdrawal Date</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'School Withdrawal Date', 'cadets.schoolWithdrawDate')">Add</button></td></tr>
										<tr><td id='cadets.unemplyed'>Unemployed</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Unemployed', 'cadets.unemplyed')">Add</button></td></tr>
										<tr><td id='cadets.underemployed'>Underemployed</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Underemployed', 'cadets.underemployed')">Add</button></td></tr>
										<tr><td id='cadets.workplace'>Place of Work</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Place of Work', 'cadets.workplace')">Add</button></td></tr>
										<tr><td id='cadets.wage'>Wage</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Wage', 'cadets.wage')">Add</button></td></tr>
										<tr><td id='cadets.hoursWorking'>Hours per Week</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Hours per Week', 'cadets.hoursWorking')">Add</button></td></tr>
										<tr><td id='cadets.recBy'>Recommender</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Recommender', 'cadets.recBy')">Add</button></td></tr>
										<tr><td id='cadets.gradeCompleted'>Grade Completed</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Grade Completed', 'cadets.gradeCompleted')">Add</button></td></tr>
										<tr><td id='cadets.hairColor'>Hair Color</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Hair Color', 'cadets.hairColor')">Add</button></td></tr>
										<tr><td id='cadets.eyeColor'>Eye Color</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Eye Color', 'cadets.eyeColor')">Add</button></td></tr>
										<tr><td id='cadets.height'>Height</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Height', 'cadets.height')">Add</button></td></tr>
										<tr><td id='cadets.weight'>Weight</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Weight', 'cadets.weight')">Add</button></td></tr>
										<tr><td id='cadets.personsInHouse'># of People in Household</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', '# of People in Household', 'cadets.personsInHouse')">Add</button></td></tr>
										<tr><td id='cadets.houseIncome'>Household Income</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Household Income', 'cadets.houseIncome')">Add</button></td></tr>
										<tr><td id='cadets.gaResident'>GA Resident</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'GA Resident', 'cadets.gaResident')">Add</button></td></tr>
										<tr><td id='cadets.preferredComm'>Preferred Method of Communication</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Cadets', 'Preferred Method of Communication', 'cadets.preferredComm')">Add</button></td></tr>
									</tbody>
								</table>
							</div>
							<div id="applicantsDiv">
								<table id="applicantsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Applicant Columns</th>
											<th>Add to Report</th>
										</tr>
									</thead>
									<tbody>
										<!-- Applicants means Cadets table but status=pending -->
										<tr><td id='applicants.fName'>First Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'First Name', 'applicants.fName')">Add</button></td></tr>
										<tr><td id='applicants.mName'>Middle Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Middle Name', 'applicants.mName')">Add</button></td></tr>
										<tr><td id='applicants.lName'>Last Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Last Name', 'applicants.lName')">Add</button></td></tr>
										<tr><td id='applicants.gender'>Gender</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Gender', 'applicants.gender')">Add</button></td></tr>
										<tr><td id='applicants.ssn'>Social Security Number</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Social Security Number', 'applicants.ssn')">Add</button></td></tr>
										<tr><td id='applicants.genQual'>Generational Qualifier</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Generational Qualifier', 'applicants.genQual')">Add</button></td></tr>
										<tr><td id='applicants.birthday'>Date of Birth</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Date of Birth', 'applicants.birthday')">Add</button></td></tr>
										<tr><td id='applicants.race'>Race</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Race', 'applicants.race')">Add</button></td></tr>
										<tr><td id='applicants.isHispanic'>Hispanic</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Hispanic', 'applicants.isHispanic')">Add</button></td></tr>
										<tr><td id='applicants.email'>Email</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Email', 'applicants.email')">Add</button></td></tr>
										<tr><td id='applicants.mStreet'>Mailing Address</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Mailing Address', 'applicants.mStreet')">Add</button></td></tr>
										<tr><td id='applicants.mStreet2'>Mailing Address Line 2</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Mailing Address Line 2', 'applicants.mStreet2')">Add</button></td></tr>
										<tr><td id='applicants.mCity'>Mailing City</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Mailing City', 'applicants.mCity')">Add</button></td></tr>
										<tr><td id='applicants.mState'>Mailing State</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Mailing State', 'applicants.mState')">Add</button></td></tr>
										<tr><td id='applicants.pStreet'>Physical Address</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Physical Address', 'applicants.pStreet')">Add</button></td></tr>
										<tr><td id='applicants.pStreet2'>Physical Address Line 2</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Physical Address Line 2', 'applicants.pStreet2')">Add</button></td></tr>
										<tr><td id='applicants.pCity'>Physical City</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Physical City', 'applicants.pCity')">Add</button></td></tr>
										<tr><td id='applicants.pState'>Physical State</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Physical State', 'applicants.pState')">Add</button></td></tr>
										<tr><td id='applicants.pZip'>Physical Zip</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Physical Zip', 'applicants.pZip')">Add</button></td></tr>
										<tr><td id='applicants.isCitizen'>Citizenship</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Citizenship', 'applicants.isCitizen')">Add</button></td></tr>
										<tr><td id='applicants.ged'>GED</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'GED', 'applicants.ged')">Add</button></td></tr>
										<tr><td id='applicants.volunteer'>Volunteer Status</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Volunteer Status', 'applicants.volunteer')">Add</button></td></tr>
										<tr><td id='applicants.admissionStatus'>Admission Status</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Admission Status', 'applicants.admissionStatus')">Add</button></td></tr>
										<tr><td id='applicants.schoolWithdrawDate'>School Withdrawal Date</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'School Withdrawal Date', 'applicants.schoolWithdrawDate')">Add</button></td></tr>
										<tr><td id='applicants.unemplyed'>Unemployed</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Unemployed', 'applicants.unemplyed')">Add</button></td></tr>
										<tr><td id='applicants.underemployed'>Underemployed</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Underemployed', 'applicants.underemployed')">Add</button></td></tr>
										<tr><td id='applicants.workplace'>Place of Work</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Place of Work', 'applicants.workplace')">Add</button></td></tr>
										<tr><td id='applicants.wage'>Wage</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Wage', 'applicants.wage')">Add</button></td></tr>
										<tr><td id='applicants.hoursWorking'>Hours per Week</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Hours per Week', 'applicants.hoursWorking')">Add</button></td></tr>
										<tr><td id='applicants.recBy'>Recommender</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Recommender', 'applicants.recBy')">Add</button></td></tr>
										<tr><td id='applicants.gradeCompleted'>Grade Completed</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Grade Completed', 'applicants.gradeCompleted')">Add</button></td></tr>
										<tr><td id='applicants.hairColor'>Hair Color</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Hair Color', 'applicants.hairColor')">Add</button></td></tr>
										<tr><td id='applicants.eyeColor'>Eye Color</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Eye Color', 'applicants.eyeColor')">Add</button></td></tr>
										<tr><td id='applicants.height'>Height</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Height', 'applicants.height')">Add</button></td></tr>
										<tr><td id='applicants.weight'>Weight</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Weight', 'applicants.weight')">Add</button></td></tr>
										<tr><td id='applicants.personsInHouse'># of People in Household</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', '# of People in Household', 'applicants.personsInHouse')">Add</button></td></tr>
										<tr><td id='applicants.houseIncome'>Household Income</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Household Income', 'applicants.houseIncome')">Add</button></td></tr>
										<tr><td id='applicants.gaResident'>GA Resident</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'GA Resident', 'applicants.gaResident')">Add</button></td></tr>
										<tr><td id='applicants.preferredComm'>Preferred Method of Communication</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Applicants', 'Preferred Method of Communication', 'applicants.preferredComm')">Add</button></td></tr>
									</tbody>
								</table>
							</div>
							<div id="courtAssignmentsDiv">
								<table id="courtAssignmentsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Court Assignment Columns</th>
											<th>Add to Report</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='courtassignments.date'>Date</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Court Assignments', 'Date', 'courtassignments.date')">Add</button></td></tr>
										<tr><td id='courtassignments.notes'>Notes</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Court Assignments', 'Notes', 'courtassignments.notes')">Add</button></td></tr>
									</tbody>
								</table>
							</div>
							<div id="guardiansDiv">
								<table id="guardiansColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Guardians Columns</th>
											<th>Add to Report</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='guardians.fName'>First Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Guardians', 'First Name', 'guardians.fName')">Add</button></td></tr>
										<tr><td id='guardians.mName'>Middle Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Guardians', 'Middle Name', 'guardians.mName')">Add</button></td></tr>
										<tr><td id='guardians.lName'>Last Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Guardians', 'Last Name', 'guardians.lName')">Add</button></td></tr>
										<tr><td id='guardians.relationship'>Relationship</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Guardians', 'Relationship', 'guardians.relationship')">Add</button></td></tr>
										<tr><td id='guardians.street'>Street Address</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Guardians', 'Street Address', 'guardians.street')">Add</button></td></tr>
										<tr><td id='guardians.street2'>Street Address Line 2</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Guardians', 'Street Address Line 2', 'guardians.street2')">Add</button></td></tr>
										<tr><td id='guardians.city'>City</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Guardians', 'City', 'guardians.city')">Add</button></td></tr>
										<tr><td id='guardians.state'>State</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Guardians', 'State', 'guardians.state')">Add</button></td></tr>
										<tr><td id='guardians.zip'>Zip Code</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Guardians', 'Zip Code', 'guardians.zip')">Add</button></td></tr>
										<tr><td id='guardians.cellPhone'>Cell Phone</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Guardians', 'Cell Phone', 'guardians.cellPhone')">Add</button></td></tr>
										<tr><td id='guardians.workPhone'>Work Phone</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Guardians', 'Work Phone', 'guardians.workPhone')">Add</button></td></tr>
										<tr><td id='guardians.email'>Email</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Guardians', 'Email', 'guardians.email')">Add</button></td></tr>
									</tbody>
								</table>
							</div>
							<div id="immunizationsDiv">
								<table id="immunizationsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Immunization Columns</th>
											<th>Add to Report</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='immunizations.date'>Date</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Immunization', 'Date', 'immunizations.date')">Add</button></td></tr>
										<tr><td id='immunizations.type'>Type</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Immunization', 'Type', 'immunizations.type')">Add</button></td></tr>
										<tr><td id='immunizations.validUntil'>Valid Until</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Immunization', 'Valid Until', 'immunizations.validUntil')">Add</button></td></tr>
										<tr><td id='immunizations.notes'>Notes</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Immunization', 'Notes', 'immunizations.notes')">Add</button></td></tr>
									</tbody>
								</table>
							</div>
							<div id="insuranceDiv">
								<table id="insuranceColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Insurance Columns</th>
											<th>Add to Report</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='insurance.name'>Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Insurance', 'Name', 'insurance.name')">Add</button></td></tr>
										<tr><td id='insurance.address'>Address</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Insurance', 'Address', 'insurance.address')">Add</button></td></tr>
										<tr><td id='insurance.phoneNumber'>Phone Number</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Insurance', 'Phone Number', 'insurance.phoneNumber')">Add</button></td></tr>
										<tr><td id='insurance.ext'>Extension</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Insurance', 'Extension', 'insurance.ext')">Add</button></td></tr>
										<tr><td id='insurance.policyNum'>Policy Number</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Insurance', 'Policy Number', 'insurance.policyNum')">Add</button></td></tr>
									</tbody>
								</table>
							</div>
							<div id="medicationsDiv">
								<table id="medicationsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Medications Columns</th>
											<th>Add to Report</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='medications.drugName'>Drug Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Medications', 'Drug Name', 'medications.drugName')">Add</button></td></tr>
										<tr><td id='medications.type'>Type</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Medications', 'Type', 'medications.type')">Add</button></td></tr>
										<tr><td id='medications.dosage'>Dosage</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Medications', 'Dosage', 'medications.dosage')">Add</button></td></tr>
										<tr><td id='medications.frequency'>Frequency</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Medications', 'Frequency', 'medications.frequency')">Add</button></td></tr>
										<tr><td id='medications.takenWhen'>Taken When</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Medications', 'Taken When', 'medications.takenWhen')">Add</button></td></tr>
										<tr><td id='medications.startDate'>Start Date</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Medications', 'Start Date', 'medications.startDate')">Add</button></td></tr>
										<tr><td id='medications.endDate'>End Date</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Medications', 'End Date', 'medications.endDate')">Add</button></td></tr>
										<tr><td id='medications.notes'>Notes</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Medications', 'Notes', 'medications.notes')">Add</button></td></tr>
									</tbody>
								</table>
							</div>
							<div id="phoneNumbersDiv">
								<table id="phoneNumbersColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Phone Numbers Columns</th>
											<th>Add to Report</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='phonenumbers.phoneNumber'>Phone Number</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Phone Numbers', 'Phone Number', 'phonenumbers.phoneNumber')">Add</button></td></tr>
										<tr><td id='phonenumbers.ext'>Extension</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Phone Numbers', 'Extension', 'phonenumbers.ext')">Add</button></td></tr>
										<tr><td id='phonenumbers.notes'>Notes</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Phone Numbers', 'Notes', 'phonenumbers.notes')">Add</button></td></tr>
									</tbody>
								</table>
							</div>
							<div id="referralsDiv">
								<table id="referralsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Referrals Columns</th>
											<th>Add to Report</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='referrals.fName'>First Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Referrals', 'First Name', 'referrals.fName')">Add</button></td></tr>
										<tr><td id='referrals.lName'>Last Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Referrals', 'Last Name', 'referrals.lName')">Add</button></td></tr>
										<tr><td id='referrals.address'>Address</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Referrals', 'Address', 'referrals.address')">Add</button></td></tr>
										<tr><td id='referrals.phoneNumber'>Phone Number</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Referrals', 'Phone Number', 'referrals.phoneNumber')">Add</button></td></tr>
										<tr><td id='referrals.ext'>Phone Extension</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Referrals', 'Phone Extension', 'referrals.ext')">Add</button></td></tr>
									</tbody>
								</table>
							</div>
							<div id="substanceAbuseDiv">
								<table id="substanceAbuseColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Substance Abuse Columns</th>
											<th>Add to Report</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='substanceabuse.testDate'>Test Date</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Substance Abuse', 'Test Date', 'substanceabuse.testDate')">Add</button></td></tr>
										<tr><td id='substanceabuse.results'>Results</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Substance Abuse', 'Results', 'substanceabuse.results')">Add</button></td></tr>
										<tr><td id='substanceabuse.drugName'>Drug Name</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Substance Abuse', 'Drug Name', 'substanceabuse.drugName')">Add</button></td></tr>
										<tr><td id='substanceabuse.notes'>Notes</td>
										<td><button name="add" class="btn btn-primary" onclick="addToReport('Substance Abuse', 'Notes', 'substanceabuse.notes')">Add</button></td></tr>
									</tbody>
								</table>
							</div>
							<div class="form-group">
								<button type='button' class='btn btn-primary' data-toggle="modal" data-target="#genModal">Generate Report</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<form action = "export-template.php" method = "POST"> 
			<input type="text" name ="fileName" class="form-control col-sm-6" id="fileName" value ="" placeholder="Insert name of Report Here Excel File here">
			<input type="text" name ="fieldNames" class="form-control" id="fieldNames" value ="" style="display: none">
			<!-- MODAL START -->
			<div class="modal fade" id="genModal" tabindex="-1" role="dialog" aria-labelledby="genModalTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="genModalTitle">Generate Report</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<p>Name your report if you would like to save it as a template for future use.</p>
					
					    <div class="form-group col-sm-6">
							<input type="text" class="form-control" name="inputTemplateName" id="inputTemplateName" placeholder='Report Template X'>
						</div>
					
				  </div>
				  <div class="modal-footer">
						<button type="submit" name="createTemp" class="btn btn-primary">Just Generate</button>
						<button type="submit" name="saveTemp" class="btn btn-primary">Generate & Save</button>
				  </div>
				</div>
			  </div>
			</div>			
			</form>
			<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
	<script>
	var tables = [];
	function addToReport(tableText, colText, id) { //Adds a tableName.fieldName to the list of selected fields for the Report.
		tables.push(id);
		var table = document.getElementById("reportToGen");
		var row = table.insertRow(1);
		row.id = id;
		var textCell = row.insertCell(0);
		var buttonCell = row.insertCell(1);
		textCell.innerHTML = tableText + " Table: " + colText;
		buttonCell.innerHTML = "<button class='btn btn-primary' name='add' onclick=\"removeFromReport('"+ id +"')\">Remove</button>";
		console.log(getFields());
	}
	
	function getFields(){ //Updates the tableNames.fieldNames list onclick of addToReport.
		document.getElementById('fieldNames').value = tables;
		return tables;
	}

	function removeFromReport(rowid) { //Removes a selected tableName.fieldName from the list.
		var table = document.getElementById("reportToGen");
		var row = document.getElementById(rowid);
		row.parentNode.removeChild(row);
		remove(tables, rowid);
		document.getElementById('fieldNames').value = tables;
	}

	function remove(array, element) { //Used for removing an entry from the selection of tableNames.fieldNames list when Remove button is pressed.
    	const index = array.indexOf(element);
    	if (index !== -1) array.splice(index, 1);
	}
	
	</script>
</html>