<!DOCTYPE html>
<?php
	/*
	 * Created by: The A-Team (James Harrison, Charles Ramsey, Evan Thomas, and Colton Thompson)
	 * The purpose of this file is to allow an admin to create a new user by filling out the fields below, and allow it to be pushed another php file which will push it to the server. Custom Roles can also be created on this page which will allow the user to create a new role with specifically chosen permissions.
	*/
	include_once "basicPage.php";
	require_once "dbcontroller.php";
	basicPage("New User");
?>
            <script>
            $(document).ready(function(){
                $("#roleSettings").hide();
                $('#inputRole').on('change', function() {
                  if ( this.value == 'Create New Role')
                  {
                    $("#roleSettings").show();
					$("#inputRoleTitle").attr('required', 'true');
                  }
                  else
                  {
                    $("#roleSettings").hide();
					$("#inputRoleTitle").removeAttr('required');
                  }
                });
            });
            </script>

            <div class="container col-sm-12">
              <form action="save-user-action.php" method = "POST">
                <div class="form-row">
                  <div class="form-group col-sm-12">
                    <label for="inputEmail">Email</label>
                    <input type="text" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="inputFirstName">First name</label>
                    <input type="text" class="form-control"name ="inputFirstName" id="inputFirstName" placeholder="First Name">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" name = "inputLastName" id="inputLastName" placeholder="Last Name">
                  </div>
				<div class="form-group col-sm-12">
					<label for="inputRole">Role</label>
					<select class="form-control" name = "inputRole" id="inputRole">
						<option selected value="0"></option>
						<option value="admin">Administrator</option>
						<option value="cadre">Cadre</option>
						<option value="caseManager">Case Manager</option>
						<option value="counselor">Counselor</option>
						<option value="medical">Medical</option>
						<option value="medicalSup">Medical Supervisor</option>
						<option value="operations">Operations</option>
						<option value="recruiter">Recruiter</option>
						<option value="syl">Student Youth Leader</option>
						<option value="teacher">Teacher</option>
						<?php
							$connection = new DBController();
							$query = "SELECT role from roles WHERE custom = 1";
							$results = $connection->runQuery($query);
							foreach($results as $result)
							{
								$roleName = $result['role'];
								echo "<option value='$roleName'>$roleName</option>";
							}
						?>
						<option value="Create New Role">Create New Role</option>
					</select>
				</div>
                </div>

                  <!-- Custom Role Settings Beginning -->
                <div class='form-row' id='roleSettings' name='roleSettings'>
					  <legend>Custom Role Settings</legend>
					  <div class="form-group col-sm-12">
						<label for="inputRoleTitle">Role Title</label>
						<input type="text" class="form-control" name="inputRoleTitle" id="inputRoleTitle" placeholder="Custom Role Title">
					  </div>
					<div class="form-group col-sm-12">
						<label for="inputSSNView">SSN</label>
						<select class="form-control" id="inputSSNView" name="inputSSNView">
							<option value="0" selected>None</option>
							<option value="1">View</option>
						</select>
					</div>
					<div class="form-group col-sm-12">
						<label for="inputMedical">Medical Information</label>
						<select class="form-control col-sm-6" id="inputMedical" name="inputMedical">
							<option value="0" selected>None</option>
							<option value="1">View</option>
							<option value="2">Edit</option>
						</select>
					</div>
					<div class="form-group col-sm-12">
						<label for="inputAddrEdit">Address Information</label>
						<select class="form-control" id="inputAddrEdit" name="inputAddrEdit">
							<option value="0" selected>View</option>
							<option value="1">Edit</option>
						</select>
					</div>
					<div class="form-group col-sm-12">
						<label for="inputAdminMenu">Admin Menu</label>
						<select class="form-control" id="inputAdminMenu" name="inputAdminMenu">
							<option value="0" selected>None</option>
							<option value="1">View</option>
						</select>
					</div>
					<div class="form-group col-sm-12">
						<label for="inputCreateApplicant">Applicant Creation</label>
						<select class="form-control" id="inputCreateApplicant" name="inputCreateApplicant">
							<option value="0" selected>No</option>
							<option value="1">Yes</option>
						</select>
					</div>
					<div class="form-group col-sm-12">
						<label for="inputCadetInfo">Cadet Information</label>
						<select class="form-control" id="inputCadetInfo" name="inputCadetInfo">
							<option value="0" selected>View</option>
							<option value="1">Edit</option>
						</select>
					</div>
					<div class="form-group col-sm-12">
						<label for="inputMiscInfo">Misc. Information</label>
						<select class="form-control" id="inputMiscInfo" name="inputMiscInfo">
							<option value="0" selected>View</option>
							<option value="1">Edit</option>
						</select>
					</div>
				</div>
                  <!-- Custom Role Settings End -->
                <div class='form-row'>
                  <div class="form-group col-sm-12">
    								<button class="btn btn-success" type="submit" name="saveUser" id="saveUser">Save</button>
    							</div>
                </div>
              </form>
            </div>
            </div>
        </div>
    </body>
</html>
