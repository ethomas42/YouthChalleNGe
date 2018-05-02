<!DOCTYPE html>
<?php
	include_once "basicPage.php";
    require_once 'dbcontroller.php';
	basicPage("User View");

    $email = $_POST['email'];
    $connection = new DBController();
    $record = $connection->runQuery("SELECT * FROM users WHERE email = '$email'")[0];
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
        	function changeView()
			{
				// basic info
				document.getElementById('editUser').setAttribute('style','display:none');
				document.getElementById('viewUser').removeAttribute('style','display:none');
				document.getElementById('inputFirstName').removeAttribute('readonly');
				document.getElementById('inputLastName').removeAttribute('readonly');
				document.getElementById('inputEmail').removeAttribute('readonly');
				document.getElementById('inputRole').removeAttribute('disabled');
				document.getElementById('inputPassword').removeAttribute('readonly');
			}
			function changeEdit()
				{
					// basic info
		    		document.getElementById('editUser').removeAttribute('style','display:none');
		    		document.getElementById('viewUser').setAttribute('style','display:none');
					document.getElementById('inputFirstName').setAttribute('readonly', 'true');
		    		document.getElementById('inputLastName').setAttribute('readonly', 'true');
		    		document.getElementById('inputEmail').setAttribute('readonly', 'true');
					document.getElementById('inputRole').setAttribute('disabled', 'true');
					document.getElementById('inputPassword').setAttribute('readonly', 'true');
				}
		</script>
				<!-- buttons -->
				<button class="btn btn-danger" value="submit" id="editUser" onclick=changeView()>Edit</button>
				<button class="btn btn-warning" value="submit" id="viewUser" style="display: none;" onclick=changeEdit()>View</button>
				<p><br></p>
				<form action="save-user-action.php" method = "POST">
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" name="inputEmail" id="inputEmail" value = "<?= $record["email"]?>" placeholder="Email" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="inputPassword">Password</label>
							<input type="text" class="form-control" name="inputPassword" id="inputPassword" value = "<?= $record["password"]?>" placeholder="Password" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="inputFirstname">First Name</label>
							<input type="text" class="form-control" name="inputFirstName" id="inputFirstName" value = "<?= $record["fName"]?>" placeholder="First Name" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="inputLastName">Last Name</label>
							<input type="text" class="form-control" name="inputLastName" id="inputLastName" value = "<?= $record["lName"]?>"placeholder="Last Name" readonly>
						</div>
						<div class="form-group col-sm-12">
							<label for="inputRole">Role</label>
							<select class="form-control" name='inputRole' id="inputRole" disabled>
								<option selected value="0"></option>
								<option value="admin" <?php if($record['role']=='admin') echo 'selected';?>>Administrator</option>
								<option value="cadre" <?php if($record['role']=='cadre') echo 'selected';?>>Cadre</option>
								<option value="caseManager" <?php if($record['role']=='caseManager') echo 'selected';?>>Case Manager</option>
								<option value="counselor" <?php if($record['role']=='counselor') echo 'selected';?>>Counselor</option>
								<option value="medical" <?php if($record['role']=='medical') echo 'selected';?>>Medical</option>
								<option value="medicalSup" <?php if($record['role']=='medicalSup') echo 'selected';?>>Medical Supervisor</option>
								<option value="operations" <?php if($record['role']=='operations') echo 'selected';?>>Operations</option>
								<option value="recruiter" <?php if($record['role']=='recruiter') echo 'selected';?>>Recruiter</option>
								<option value="syl" <?php if($record['role']=='syl') echo 'selected';?>>Student Youth Leader</option>
								<option value="teacher" <?php if($record['role']=='teacher') echo 'selected';?>>Teacher</option>
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
						<select class="form-control" id="inputCadetInfo">
							<option value="0" selected>View</option>
							<option value="1">Edit</option>
						</select>
					</div>
					<div class="form-group col-sm-12">
						<label for="inputMiscInfo">Misc. Information</label>
						<select class="form-control" id="inputMiscInfo">
							<option value="0" selected>View</option>
							<option value="1">Edit</option>
						</select>
					</div>
					  <!-- Custom Role Settings End -->
					</div>
				<input type="hidden" name="email" value="<?= $record["email"]?>">
				<button name="updateUser" class="btn btn-success" type="submit" id="updateUser">Save</button>
				</form>
						
					<!-- end of tabs -->
				</div>
				
			<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>
