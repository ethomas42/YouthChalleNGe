<!DOCTYPE html>
<?php
	include_once "basicPage.php";
	basicPage("Report Generation");
?>
			
            <script>
            $(document).ready(function(){
                $("#allergyColumns").hide();
				$("#attachmentColumns").hide();
				$("#applicantColumns").hide();
				$("#courtAssignmentColumns").hide();
				$("#guardianColumns").hide();
				$("#immunizationColumns").hide();
				$("#insuranceColumns").hide();
				$("#medicationColumns").hide();
				$("#phoneNumberColumns").hide();
				$("#referralColumns").hide();
				$("#substanceAbuseColumns").hide();
                $('#inputTable').on('change', function() {
                  if ( this.value == '1')
                  {
                    $("#roleSettings").show();
                  }
                  else
                  {
                    $("#roleSettings").hide();
                  }
                });
            });
            </script>

			<div class="row">
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label for="inputWeekNum">Week Number</label>
							<select class="form-control" id="inputTable">
								<option value="0" selected>1</option>
								<option value="0">2</option>
								<option value="0">3</option>
								<option value="0">4</option>
								<option value="1">5</option>
								<!-- Pull week numbers? -->
							</select>
						</div>
						<div class="form-group col-sm-12">
							<label for="inputTable">Table Name</label>
							<select class="form-control" id="inputTable">
								<option selected value="1">Cadets</option>
								<option value="2">Applicants</option>
								<option value="3">Users</option>
							</select>
						</div>
						<table id="allergyColumns" class="table table-striped table-bordered" cellspacing="0">
							<thead>
								<tr>
									<th>Allergy Columns</th>
								</tr>
							</thead>
							<tbody>
								<tr><td id='allergies.type'>Allergy Type</td></tr>
								<tr><td id='allergies.notes'>Allergy Notes<td></tr>
							</tbody>
						</table>
						<table id="attachmentColumns" class="table table-striped table-bordered" cellspacing="0">
							<thead>
								<tr>
									<th>Attachment Columns</th>
								</tr>
							</thead>
							<tbody>
								<tr><td id='attachments.filename'>Filename</td></tr>
								<tr><td id='attachments.uploadDate'>Upload Date<td></tr>
							</tbody>
						</table>
						<table id="cadetColumns" class="table table-striped table-bordered" cellspacing="0">
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
						<table id="applicantColumns" class="table table-striped table-bordered" cellspacing="0">
							<thead>
								<tr>
									<th>Applicant Columns</th>
								</tr>
							</thead>
							<tbody>
								<tr><td>First Name</td></tr>
								<tr><td>Middle Name</td></tr>
								<tr><td>Last Name</td></tr>
								<tr><td>Gender</td></tr>
								<tr><td>Social Security Number</td></tr>
								<tr><td>Generational Qualifier</td></tr>
								<tr><td>Date of Birth</td></tr>
								<tr><td>Race</td></tr>
								<tr><td>Hispanic</td></tr>
								<tr><td>Email</td></tr>
								<tr><td>Mailing Address</td></tr>
								<tr><td>Mailing Address Line 2</td></tr>
								<tr><td>Mailing City</td></tr>
								<tr><td>Mailing State</td></tr>
								<tr><td>Physical Address</td></tr>
								<tr><td>Physical Address Line 2</td></tr>
								<tr><td>Physical City</td></tr>
								<tr><td>Physical State</td></tr>
								<tr><td>Physical Zip</td></tr>
								<tr><td>Citizenship</td></tr>
								<tr><td>GED</td></tr>
								<tr><td>Volunteer Status</td></tr>
								<tr><td>Admission Status</td></tr>
								<tr><td>School Withdrawal Date</td></tr>
								<tr><td>Unemployed</td></tr>
								<tr><td>Underemployed</td></tr>
								<tr><td>Place of Work</td></tr>
								<tr><td>Wage</td></tr>
								<tr><td>Hours per Week</td></tr>
								<tr><td>Accomplishment 1</td></tr>
								<tr><td>Accomplishment 2</td></tr>
								<tr><td>Recommender</td></tr>
								<tr><td>Grade Completed</td></tr>
								<tr><td>Hair Color</td></tr>
								<tr><td>Eye Color</td></tr>
								<tr><td>Height</td></tr>
								<tr><td>Weight</td></tr>
								<tr><td># of People in Household</td></tr>
								<tr><td>Household Income</td></tr>
								<tr><td>GA Resident</td></tr>
								<tr><td>Preferred Method of Communication</td></tr>
							</tbody>
						</table>
						<table id="courtAssignmentColumns" class="table table-striped table-bordered" cellspacing="0">
							<thead>
								<tr>
									<th>Court Assignment Columns</th>
								</tr>
							</thead>
							<tbody>
								<tr><td>Allergy Type</td></tr>
								<tr><td>Allergy Notes<td></tr>
							</tbody>
						</table>
						<table id="allergyColumns" class="table table-striped table-bordered" cellspacing="0">
							<thead>
								<tr>
									<th>Allergy Columns</th>
								</tr>
							</thead>
							<tbody>
								<tr><td>Allergy Type</td></tr>
								<tr><td>Allergy Notes<td></tr>
							</tbody>
						</table>
						<table id="allergyColumns" class="table table-striped table-bordered" cellspacing="0">
							<thead>
								<tr>
									<th>Allergy Columns</th>
								</tr>
							</thead>
							<tbody>
								<tr><td>Allergy Type</td></tr>
								<tr><td>Allergy Notes<td></tr>
							</tbody>
						</table>
						<table id="allergyColumns" class="table table-striped table-bordered" cellspacing="0">
							<thead>
								<tr>
									<th>Allergy Columns</th>
								</tr>
							</thead>
							<tbody>
								<tr><td>Allergy Type</td></tr>
								<tr><td>Allergy Notes<td></tr>
							</tbody>
						</table>
						<table id="allergyColumns" class="table table-striped table-bordered" cellspacing="0">
							<thead>
								<tr>
									<th>Allergy Columns</th>
								</tr>
							</thead>
							<tbody>
								<tr><td>Allergy Type</td></tr>
								<tr><td>Allergy Notes<td></tr>
							</tbody>
						</table>
						<table id="allergyColumns" class="table table-striped table-bordered" cellspacing="0">
							<thead>
								<tr>
									<th>Allergy Columns</th>
								</tr>
							</thead>
							<tbody>
								<tr><td>Allergy Type</td></tr>
								<tr><td>Allergy Notes<td></tr>
							</tbody>
						</table>
						<table id="allergyColumns" class="table table-striped table-bordered" cellspacing="0">
							<thead>
								<tr>
									<th>Allergy Columns</th>
								</tr>
							</thead>
							<tbody>
								<tr><td>Allergy Type</td></tr>
								<tr><td>Allergy Notes<td></tr>
							</tbody>
						</table>
						<div class="form-group col-sm-12">
							<button type='button' class='btn btn-success'>Add Field</button>
						</div>
						<div class="form-group col-sm-12">
							<button type='button' class='btn btn-danger'>Remove Field</button>
						</div>
						<div class="form-group col-sm-12">
							<button type='button' class='btn btn-primary' data-toggle="modal" data-target="#genModal">Generate Report</button>
						</div>
					</div>
				<div class="column col-sm-6">
					
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