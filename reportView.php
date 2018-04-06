<!DOCTYPE html>
<?php
	include_once "basicPage.php";
	basicPage("Report Generation");
?>
			
            <script>
            $(document).ready(function(){
				// DataTables
				$("#allergiesColumns").dataTable( {
					"searching": false,
					"lengthChange": false,
					"info": false
				});
				$("#attachmentsColumns").dataTable( {
					"searching": false,
					"lengthChange": false,
					"info": false
				});
				$("#cadetsColumns").dataTable( {
					"searching": false,
					"lengthChange": false,
					"info": false
				});
				$("#applicantsColumns").dataTable( {
					"searching": false,
					"lengthChange": false,
					"info": false
				});
				$("#courtAssignmentsColumns").dataTable( {
					"searching": false,
					"lengthChange": false,
					"info": false
				});
				$("#guardiansColumns").dataTable( {
					"searching": false,
					"lengthChange": false,
					"info": false
				});
				$("#immunizationsColumns").dataTable( {
					"searching": false,
					"lengthChange": false,
					"info": false
				});
				$("#insuranceColumns").dataTable( {
					"searching": false,
					"lengthChange": false,
					"info": false
				});
				$("#medicationsColumns").dataTable( {
					"searching": false,
					"lengthChange": false,
					"info": false
				});
				$("#phoneNumbersColumns").dataTable( {
					"searching": false,
					"lengthChange": false,
					"info": false
				});
				$("#referralsColumns").dataTable( {
					"searching": false,
					"lengthChange": false,
					"info": false
				});
				$("#substanceAbuseColumns").dataTable( {
					"searching": false,
					"lengthChange": false,
					"info": false
				});
				
				// hide stuff initially, except for whatever default inputTable is?
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
				
				$("[name='add']").on('click', function() {
					
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
								<table id="allergiesColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Allergy Columns</th>
											<th>Add to Report</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='allergies.type'>Allergy Type</td>
										<td><button name="add">Add</button></td></tr>
										<tr><td id='allergies.notes'>Allergy Notes</td></tr>
									</tbody>
								</table>
							</div>
							<div id="attachmentsDiv">
								<table id="attachmentsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Attachment Columns</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='attachments.filename'>Filename</td></tr>
										<tr><td id='attachments.uploadDate'>Upload Date</td></tr>
									</tbody>
								</table>
							</div>
							<div id="cadetsDiv">
								<table id="cadetsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Cadets Columns</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='cadets.fName'>First Name</td></tr>
										<tr><td id='cadets.mName'>Middle Name</td></tr>
										<tr><td id='cadets.lName'>Last Name</td></tr>
										<tr><td id='cadets.gender'>Gender</td></tr>
										<tr><td id='cadets.ssn'>Social Security Number</td></tr>
										<tr><td id='cadets.genQual'>Generational Qualifier</td></tr>
										<tr><td id='cadets.birthday'>Date of Birth</td></tr>
										<tr><td id='cadets.race'>Race</td></tr>
										<tr><td id='cadets.isHispanic'>Hispanic</td></tr>
										<tr><td id='cadets.email'>Email</td></tr>
										<tr><td id='cadets.mStreet'>Mailing Address</td></tr>
										<tr><td id='cadets.mStreet2'>Mailing Address Line 2</td></tr>
										<tr><td id='cadets.mCity'>Mailing City</td></tr>
										<tr><td id='cadets.mState'>Mailing State</td></tr>
										<tr><td id='cadets.pStreet'>Physical Address</td></tr>
										<tr><td id='cadets.pStreet2'>Physical Address Line 2</td></tr>
										<tr><td id='cadets.pCity'>Physical City</td></tr>
										<tr><td id='cadets.pState'>Physical State</td></tr>
										<tr><td id='cadets.pZip'>Physical Zip</td></tr>
										<tr><td id='cadets.isCitizen'>Citizenship</td></tr>
										<tr><td id='cadets.ged'>GED</td></tr>
										<tr><td id='cadets.volunteer'>Volunteer Status</td></tr>
										<tr><td id='cadets.admissionStatus'>Admission Status</td></tr>
										<tr><td id='cadets.schoolWithdrawDate'>School Withdrawal Date</td></tr>
										<tr><td id='cadets.unemplyed'>Unemployed</td></tr>
										<tr><td id='cadets.underemployed'>Underemployed</td></tr>
										<tr><td id='cadets.workplace'>Place of Work</td></tr>
										<tr><td id='cadets.wage'>Wage</td></tr>
										<tr><td id='cadets.hoursWorking'>Hours per Week</td></tr>
										<tr><td id='cadets.recBy'>Recommender</td></tr>
										<tr><td id='cadets.gradeCompleted'>Grade Completed</td></tr>
										<tr><td id='cadets.hairColor'>Hair Color</td></tr>
										<tr><td id='cadets.eyeColor'>Eye Color</td></tr>
										<tr><td id='cadets.height'>Height</td></tr>
										<tr><td id='cadets.weight'>Weight</td></tr>
										<tr><td id='cadets.personsInHouse'># of People in Household</td></tr>
										<tr><td id='cadets.houseIncome'>Household Income</td></tr>
										<tr><td id='cadets.gaResident'>GA Resident</td></tr>
										<tr><td id='cadets.preferredComm'>Preferred Method of Communication</td></tr>
									</tbody>
								</table>
							</div>
							<div id="applicantsDiv">
								<table id="applicantsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Applicant Columns</th>
										</tr>
									</thead>
									<tbody>
										<!-- Applicants means Cadets table but status=pending -->
										<tr><td id='applicants.fName'>First Name</td></tr>
										<tr><td id='applicants.mName'>Middle Name</td></tr>
										<tr><td id='applicants.lName'>Last Name</td></tr>
										<tr><td id='applicants.gender'>Gender</td></tr>
										<tr><td id='applicants.ssn'>Social Security Number</td></tr>
										<tr><td id='applicants.genQual'>Generational Qualifier</td></tr>
										<tr><td id='applicants.birthday'>Date of Birth</td></tr>
										<tr><td id='applicants.race'>Race</td></tr>
										<tr><td id='applicants.isHispanic'>Hispanic</td></tr>
										<tr><td id='applicants.email'>Email</td></tr>
										<tr><td id='applicants.mStreet'>Mailing Address</td></tr>
										<tr><td id='applicants.mStreet2'>Mailing Address Line 2</td></tr>
										<tr><td id='applicants.mCity'>Mailing City</td></tr>
										<tr><td id='applicants.mState'>Mailing State</td></tr>
										<tr><td id='applicants.pStreet'>Physical Address</td></tr>
										<tr><td id='applicants.pStreet2'>Physical Address Line 2</td></tr>
										<tr><td id='applicants.pCity'>Physical City</td></tr>
										<tr><td id='applicants.pState'>Physical State</td></tr>
										<tr><td id='applicants.pZip'>Physical Zip</td></tr>
										<tr><td id='applicants.isCitizen'>Citizenship</td></tr>
										<tr><td id='applicants.ged'>GED</td></tr>
										<tr><td id='applicants.volunteer'>Volunteer Status</td></tr>
										<tr><td id='applicants.admissionStatus'>Admission Status</td></tr>
										<tr><td id='applicants.schoolWithdrawDate'>School Withdrawal Date</td></tr>
										<tr><td id='applicants.unemplyed'>Unemployed</td></tr>
										<tr><td id='applicants.underemployed'>Underemployed</td></tr>
										<tr><td id='applicants.workplace'>Place of Work</td></tr>
										<tr><td id='applicants.wage'>Wage</td></tr>
										<tr><td id='applicants.hoursWorking'>Hours per Week</td></tr>
										<tr><td id='applicants.recBy'>Recommender</td></tr>
										<tr><td id='applicants.gradeCompleted'>Grade Completed</td></tr>
										<tr><td id='applicants.hairColor'>Hair Color</td></tr>
										<tr><td id='applicants.eyeColor'>Eye Color</td></tr>
										<tr><td id='applicants.height'>Height</td></tr>
										<tr><td id='applicants.weight'>Weight</td></tr>
										<tr><td id='applicants.personsInHouse'># of People in Household</td></tr>
										<tr><td id='applicants.houseIncome'>Household Income</td></tr>
										<tr><td id='applicants.gaResident'>GA Resident</td></tr>
										<tr><td id='applicants.preferredComm'>Preferred Method of Communication</td></tr>
									</tbody>
								</table>
							</div>
							<div id="courtAssignmentsDiv">
								<table id="courtAssignmentsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Court Assignment Columns</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='applicants.preferredComm'>Allergy Type</td></tr>
										<tr><td id='applicants.preferredComm'>Allergy Notes</td></tr>
									</tbody>
								</table>
							</div>
							<div id="guardiansDiv">
								<table id="guardiansColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Guardians Columns</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='guardians.fName'>First Name</td></tr>
										<tr><td id='applicants.mName'>Middle Name</td></tr>
										<tr><td id='guardians.lName'>Last Name</td></tr>
										<tr><td id='applicants.relationship'>Relationship</td></tr>
										<tr><td id='guardians.street'>Street Address</td></tr>
										<tr><td id='applicants.street2'>Street Address Line 2</td></tr>
										<tr><td id='guardians.city'>City</td></tr>
										<tr><td id='applicants.state'>State</td></tr>
										<tr><td id='guardians.zip'>Zip Code</td></tr>
										<tr><td id='applicants.cellPhone'>Cell Phone</td></tr>
										<tr><td id='guardians.workPhone'>Work Phone</td></tr>
										<tr><td id='applicants.email'>Email</td></tr>
									</tbody>
								</table>
							</div>
							<div id="immunizationsDiv">
								<table id="immunizationsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Immunization Columns</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='immunizations.date'>Date</td></tr>
										<tr><td id='immunizations.type'>Type</td></tr>
										<tr><td id='immunizations.validUntil'>Valid Until</td></tr>
										<tr><td id='immunizations.notes'>Notes</td></tr>
									</tbody>
								</table>
							</div>
							<div id="insuranceDiv">
								<table id="insuranceColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Insurance Columns</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='insurance.name'>Name</td></tr>
										<tr><td id='insurance.address'>Address</td></tr>
										<tr><td id='insurance.phoneNumber'>Phone Number</td></tr>
										<tr><td id='insurance.ext'>Extension</td></tr>
										<tr><td id='insurance.policyNum'>Policy Number</td></tr>
									</tbody>
								</table>
							</div>
							<div id="medicationsDiv">
								<table id="medicationsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Medications Columns</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='medications.drugName'>Drug Name</td></tr>
										<tr><td id='medications.type'>Type</td></tr>
										<tr><td id='medications.dosage'>Dosage</td></tr>
										<tr><td id='medications.frequency'>Frequency</td></tr>
										<tr><td id='medications.takenWhen'>Taken When</td></tr>
										<tr><td id='medications.startDate'>Start Date</td></tr>
										<tr><td id='medications.endDate'>End Date</td></tr>
										<tr><td id='medications.notes'>Notes</td></tr>
									</tbody>
								</table>
							</div>
							<div id="phoneNumbersDiv">
								<table id="phoneNumbersColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Phone Numbers Columns</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='phonenumbers.phoneNumber'>Phone Number</td></tr>
										<tr><td id='phonenumbers.ext'>Extension</td></tr>
										<tr><td id='phonenumbers.notes'>Notes</td></tr>
									</tbody>
								</table>
							</div>
							<div id="referralsDiv">
								<table id="referralsColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Referrals Columns</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='referrals.fName'>First Name</td></tr>
										<tr><td id='referrals.lName'>Last Name</td></tr>
										<tr><td id='referrals.address'>Address</td></tr>
										<tr><td id='referrals.phoneNumber'>Phone Number</td></tr>
										<tr><td id='referrals.ext'>Phone Extension</td></tr>
									</tbody>
								</table>
							</div>
							<div id="substanceAbuseDiv">
								<table id="substanceAbuseColumns" class="table table-striped table-bordered" cellspacing="0">
									<thead>
										<tr>
											<th>Substance Abuse Columns</th>
										</tr>
									</thead>
									<tbody>
										<tr><td id='substanceabuse.testDate'>Test Date</td></tr>
										<tr><td id='substanceabuse.results'>Results</td></tr>
										<tr><td id='substanceabuse.drugName'>Drug Name</td></tr>
										<tr><td id='substanceabuse.notes'>Notes</td></tr>
									</tbody>
								</table>
							<div class="form-group">
								<button type='button' class='btn btn-success'>Add Field</button>
							</div>
							<div class="form-group">
								<button type='button' class='btn btn-danger'>Remove Field</button>
							</div>
							<div class="form-group">
								<button type='button' class='btn btn-primary' data-toggle="modal" data-target="#genModal">Generate Report</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
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
					<form>
					    <div class="form-group col-sm-6">
							<input type="text" class="form-control" id="inputTemplateName" placeholder='Report Template X'>
						</div>
					</form>
				  </div>
				  <div class="modal-footer">
						<button type="button" class="btn btn-primary">Just Generate</button>
						<button type="button" class="btn btn-primary">Generate & Save</button>
				  </div>
				</div>
			  </div>
			</div>			

			<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>