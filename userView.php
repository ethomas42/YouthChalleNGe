<!DOCTYPE html>
<?php
	include_once "basicPage.php";
    require_once 'dbcontroller.php';
	basicPage("User View");

    $ssn = $_POST['email'];
    $connection = new DBController();
    $record = $connection->runQuery("SELECT * FROM users WHERE email = '$email'")[0];
?>

	<script>

        	function changeView()
				{
					// basic info
		    		document.getElementById('editCadet').setAttribute('style','display:none');
		    		document.getElementById('viewCadet').removeAttribute('style','display:none');
					
		    		document.getElementById('inputFirstName').removeAttribute('readonly');
		    		document.getElementById('inputLastName').removeAttribute('readonly');
		    		document.getElementById('inputEmail').removeAttribute('readonly');
					document.getElementById('inputRole').removeAttribute('disabled');
					document.getElementById('inputUsername').removeAttribute('readonly');

				}

			function changeEdit()
				{
					// basic info
		    		document.getElementById('editCadet').removeAttribute('style','display:none');
		    		document.getElementById('viewCadet').setAttribute('style','display:none');
					document.getElementById('inputFirstName').setAttribute('readonly', 'true');
		    		document.getElementById('inputLastName').setAttribute('readonly', 'true');
		    		document.getElementById('inputEmail').setAttribute('readonly', 'true');
					document.getElementById('inputRole').setAttribute('disabled', 'true');
					document.getElementById('inputUsername').setAttribute('readonly', 'true');
				}
		</script>
				<!-- buttons -->
				<button class="btn btn-danger" value="submit" id="editCadet" onclick=changeView()>Edit</button>
				<button class="btn btn-warning" value="submit" id="viewCadet" style="display: none;" onclick=changeEdit()>View</button>
				<p><br></p>
				<form>
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label for="inputFirstname">First Name</label>
							<input type="text" class="form-control" id="inputFirstName" value = "<?= $record["fName"]?>" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="inputLastName">Last Name</label>
							<input type="text" class="form-control" id="inputLastName" value = "<?= $record["lName"]?>"placeholder="Last Name" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="inputUsername">Username</label>
							<input type="email" class="form-control" id="inputUsername" value = "<?= $record["username"]?>" placeholder="Username" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" id="inputEmail" value = "<?= $record["email"]?>" placeholder="Email" readonly>
						</div>
						<div class="form-group col-sm-12">
							<label for="inputRole">Role</label>
							<select class="form-control" name='inputRole' id="inputRole" disabled>
								<option selected value="0"></option>
								<option value="0" <?php if($record['role']=='general') echo 'selected';?>>General User</option>
								<option value="0" <?php if($record['role']=='recruiter') echo 'selected';?>>Recruiter</option>
								<option value="0" <?php if($record['role']=='counselor') echo 'selected';?>>Counsellor</option>
								<option value="0" <?php if($record['role']=='admin') echo 'selected';?>>Administrator</option>
								<!-- Pull custom roles? -->
								<option value="1">Create New Role</option>
							</select>
						</div>
					</div>
				<button name="saveUser" class="btn btn-success" type="submit" id="saveUser">Save</button>
				</form>
						
					<!-- end of tabs -->
				</div>
				
			<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>
