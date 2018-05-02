<!DOCTYPE html>
<?php
	include_once "basicPage.php";
	basicPage("New User");
?>
            <script>
            $(document).ready(function(){
                $("#roleSettings").hide();
                $('#inputRole').on('change', function() {
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

            <div class="container col-sm-12">
              <form action="saver-user-action.php" method = "POST">
                <div class="form-row">
                  <div class="form-group col-sm-12">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" id="inputUsername" placeholder="Username">
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
    									<option value="0">General User</option>
    									<option value="0">Recruiter</option>
    									<option value="0">Counsellor</option>
    									<option value="0">Administrator</option>
                      <!-- Pull custom roles? -->
                      <option value="1">Create New Role</option>
    								</select>
    							</div>
                </div>

                  <!-- Custom Role Settings Beginning -->
                <div class='form-row' id='roleSettings' name='roleSettings'>
                  <legend>Custom Role Settings</legend>
                  <div class="form-group col-sm-12">
                    <label for="inputRoleTitle">Role Title</label>
                    <input type="text" class="form-control" id="inputRoleTitle" placeholder="Custom Role Title">
                  </div>
                  <div class="form-group col-sm-12">
    								<label for="inputCadetPermission">Cadets Table Permission Level</label>
    								<select class="form-control" id="inputCadetPermission">
                      <option selected>None</option>
                      <option>Read</option>
    									<option>Write</option>
    								</select>
    							</div>
                  <div class="form-group col-sm-12">
    								<label for="inputApplicantPermission">Applicants Table Permission Level</label>
    								<select class="form-control" id="inputAppilcantPermission" name = "inputApplicantPermission">
                      <option selected>None</option>
                      <option>Read</option>
    									<option>Write</option>
    								</select>
    							</div>
                  <div class="form-group col-sm-12">
    								<label for="inputUserPermission">Users Table Permission Level</label>
    								<select class="form-control" id="inputUserPermission" name ="inputUserPermission">
    									<option selected>None</option>
                      <option>Read</option>
    									<option>Write</option>
    								</select>
    							</div>
                </div>
                  <!-- Custom Role Settings End -->
                <div class='form-row'>
                  <div class="form-group col-sm-12">
    								<button class="btn btn-success" type="submit" id="saveUser">Save</button>
    							</div>
                </div>
              </form>
            </div>

<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>
