<!DOCTYPE html>
<?php
	include_once "basicPage.php";
        require_once 'dbcontroller.php'; 
	basicPage("New Applicant");
?>
				<div class="container col-sm-12">
                                    <form action = "applicant-form-action.php" method = "POST" >
						<div class="form-row">
							<div class="form-group col-sm-4">
								<label for="inputCommMethod">Preferred Method of Communication</label>
								<select class="form-control" name="inputCommMethod" id="inputCommMethod">
									<option selected></option>
									<option>Email</option>
									<option>Text</option>
									<option>US Mail</option>
									<option>Phone</option>
								</select>
							</div>
							<div class="form-group col-sm-4">
									<label for="inputCommMethod">Company</label>
									<select class="form-control" name="inputCompany" id="inputCompany" value = "<?= $record["company"]?>" disabled="disabled">
										<option selected></option>
										<option>Alpha</option>
										<option>Bravo</option>
										<option>Charlie</option>
										<option>Delta</option>
									</select>
								</div>
							<div class="form-group col-sm-4">
								<label for="inputSSN">Social Security Number</label>
								<input type="text" name = "inputSSN" class="form-control" id="inputSSN" placeholder="SSN">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputFirstname">First Name</label>
								<input type="text" class="form-control" name = "inputFirstName" id="inputFirstName" placeholder="First Name">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputMiddleName">Middle Name</label>
								<input type="text" class="form-control" name ="inputMiddleName" id="inputMiddleName" placeholder="Middle Name">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputLastName">Last Name</label>
								<input type="text" class="form-control" name = "inputLastName" id="inputLastName" placeholder="Last Name">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputGAResident">GA Resident</label>
								<select class="form-control" id="inputGAResident">
									<option selected name = "inputGAResident"> Yes</option>
									<option name = "inputGAResident">No</option>
								</select>
							</div>
							<legend>Mailing Address</legend>
							<div class="form-group col-sm-4">
								<label for="inputMailStreet">Street</label>
								<input type="text" class="form-control" name = "inputMailStreet" id="inputMailStreet" placeholder="12345 Sample Street">
							</div>
							<div class="form-group col-sm-2">
								<label for="inputStreet2">Apt. or Lot #</label>
								<input type="text" class="form-control" name ="inputStreet2" id="inputStreet2" placeholder="12A">
							</div>
							<div class="form-group col-sm-2">
								<label for="inputMailCity">City</label>
								<input type="text" class="form-control" name="inputMailCity" id="inputMailCity" placeholder="City">
							</div>
							<div class="form-group col-sm-2">
								<label for="inputMailState">State</label>
								<select class="form-control" id="inputMailState" name="inputMailState">
									<!--- PULL STATES FROM DATABASE -->
                                                                        <?php
                                                                            $connection = new DBController(); 
                                                                            $record = $connection->runQuery("SELECT DISTINCT state FROM states WHERE state != '' ORDER BY state"); 
                                                                            foreach ($record as $row)
                                                                            {
                                                                                echo '<option name = "inputState">'. $row['state'].'</option>';
                                                                            }
                                                                        ?>
								</select>
							</div>
							<div class="form-group col-sm-2">
								<label for="inputMailZip">Zip Code</label>
								<input type="text" class="form-control" id="inputMailZip" name="inputMailZip" placeholder="Zip Code">
							</div>
							<div class="form-group col-sm-12">
								<label for="inputLocation">Campus Location</label>
								<select class="form-control" id="inputLocation">
									<option selected></option>
									<option name  = "inputLocation">Milledgeville</option>
									<option name = "inputLocation">Fort Gordon</option>
									<option name = "inputLocation">Fort Stuart</option>
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label for="inputCell">Cell Phone</label>
								<input type="text" name = "inputCell"class="form-control" id="inputCell" placeholder="(555)-555-5555">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputHomePhone">Home Phone</label>
								<input type="text"  name  = "inputHomePhone" class="form-control" id="inputHomePhone" placeholder="(555)-555-5555">
							</div>
							<legend>Family Income</legend>
							<div class="form-group col-sm-6">
								<label for="inputHousePeople">Persons in Household</label>
								<input type="text" name ="inputHousePeople" class="form-control" id="inputHousePeople" placeholder="Persons in Household">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputIncome">Total Annual Income</label>
                                                                <input type="text" name="inputIncome" class="form-control" id="inputIncome" placeholder="Total Annual Income">
								<br>
							</div>
							<div class="form-group col-sm-4">
								<label for="inputAge">Age</label>
								<input type="text" class="form-control" id="inputAge" placeholder="Age" readonly>
							</div>
							<div class="form-group col-sm-4">
								<label for="inputBirthday">Date of Birth</label>
								<input type="date" name="inputBirthday" class="form-control" id="inputBirthday" placeholder="Date of Birth">
							</div>
							<div class="form-group col-sm-4">
								<label for="inputGender">Gender</label>
								<select class="form-control" id="inputGender" name ="inputGender">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Prefer Not to Answer" selected>Prefer Not to Answer</option>
								</select>
							</div>
							<legend>Race</legend>
							<div class="form-check form-check-inline col-sm-3">
								<input class="form-check-input" name = "race" type="checkbox" id="raceWhite" value="White">
								<label class="form-check-label" for="raceWhite">White</label>
							</div>
							<div class="form-check form-check-inline col-sm-3">
								<input class="form-check-input" name = "race"type="checkbox" id="raceBlack" value="Black">
								<label class="form-check-label" for="raceBlack">Black</label>
							</div>
							<div class="form-check form-check-inline col-sm-3">
								<input class="form-check-input" name = "race" type="checkbox" id="raceAmerican" value="Native American">
								<label class="form-check-label" for="raceAmerican">Native American</label>
							</div>
							<div class="form-check form-check-inline col-sm-3">
								<input class="form-check-input" name="race" type="checkbox" id="raceAsian" value="Asian">
								<label class="form-check-label" for="raceAsian">Asian</label>
							</div>
							<div class="form-check form-check-inline col-sm-3">
								<input class="form-check-input" name="race" type="checkbox" id="racePacific" value="Pacific Islander">
								<label class="form-check-label" for="racePacific">Pacific Islander</label>
							</div>
							<div class="form-check form-check-inline col-sm-3">
								<input class="form-check-input" name="race" type="checkbox" id="raceMiddleEast" value="Middle Eastern">
								<label class="form-check-label" for="raceMiddleEast">Middle Eastern</label>
							</div>
							<div class="form-check form-check-inline col-sm-6">
								<input class="form-check-input" name="race" type="checkbox" id="raceOther" value="Other">
								<label class="form-check-label" for="raceOther">Other</label>
							</div>
							<div class="form-group col-sm-12">
								<label for="inputHispanic">Hispanic/Latino</label>
								<select class="form-control" id="inputHispanic" name="isHispanic" >
									<option value = "1">Yes</option>
									<option selected value = "0">No</option>
								</select>
								<br>
							</div>
							<div class="form-group col-sm-3">
								<label for="inputHair">Hair Color</label>
								<input type="text" name = "inputHair" class="form-control" id="inputHair" placeholder="Hair Color">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputEye">Eye Color</label>
                                                                <input type="text" class="form-control" name="inputEye" id="inputEye" placeholder="Eye Color">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputHeight">Height</label>
								<input type="text" class="form-control" id="inputHeight" name="height" placeholder="Height">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputWeight">Weight</label>
								<input type="text" class="form-control" id="inputWeight" name="weight" placeholder="Weight">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputGED">Do you have a GED?</label>
								<select class="form-control" id="inputGED">
									<option name = "inputGED">Yes</option>
									<option selected name ="inputGED">No</option>
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label for="inputLastGrade">Last Grade Completed</label>
								<input type="text" name = "inputLastGrade" class="form-control" id="inputLastGrade" placeholder="Last Grade Completed">
							</div>
							<div class="form-group col-sm-12">
								<label for="inputVolunteer">Did you volunteer for this program?</label>
								<select class="form-control" id="inputVolunteer">
									<option name="inputVolunteer" selected>Yes</option>
									<option name="inputVolunteer" >No</option>
								</select>
							</div>
							<div class="form-group col-sm-12">
								<label for="inputWithdraw">Month and Year of Withdrawing from School</label>
								<input type="date" class="form-control" name = "inputWithdraw" id="inputWithdraw" placeholder="Month and Year of Withdrawing from School">
							</div>
							<legend>Are you unemployed or under-employed?</legend>
							<div class="form-check form-check-inline col-sm-12">
								<input class="form-check-input"  type="radio" name="inputEmployment" id="inputEmployment"  value="unemployed">
								<label class="form-check-label" for="inputUnemployed">Unemployed</label>
								<input class="form-check-input" type="radio" name="inputEmployment" id="inputEmployment" value="underemployed">
								<label class="form-check-label" for="inputUnder">Under-employed</label>
							</div>
							<div class="form-group col-sm-12">
								<br>
								<label for="inputJob">If you are under-employed, what is your place of employment?</label>
								<input type="text" class="form-control" id="inputJob" name ="inputJob" placeholder="Place of Employment">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputWage">If you are under-employed, what is your hourly wage?</label>
								<input type="text" class="form-control" id="inputWage" name="inputWage" placeholder="Hourly Wage">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputJob">If you are under-employed, how many hours a week do you work?</label>
								<input type="text" class="form-control" id="inputJob" name="hoursPerWeek" placeholder="Hours per Week">
							</div>
							<legend>List two personal accomplishments</legend>
							<div class="form-group col-sm-12">
								<label for="inputFirst">1.</label>
								<input type="text" class="form-control" id="inputFirst" name="personalAccomplishment1" placeholder="Accomplishment">
							</div>
							<div class="form-group col-sm-12">
								<label for="inputSecond">2.</label>
                                                                <input type="text" class="form-control" id="inputSecond" name="personalAccomplishment2" placeholder="Accomplishment">
							</div>
							<legend>Parent or Legal Guardian</legend>
							<div class="form-group col-sm-3">
								<label for="inputFirstname">First Name</label>
								<input type="text" class="form-control"  name ="pFirstName" id="inputFirstName" placeholder="First Name">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputMiddleName">Middle Name</label>
								<input type="text" class="form-control" name="pMiddleName" id="inputMiddleName" placeholder="Middle Name">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputLastName">Last Name</label>
								<input type="text" class="form-control" name = "pLastName"id="inputLastName" placeholder="Last Name">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputRelationship">Relationship</label>
								<select class="form-control" id="inputRelationship" name ="inputRelationship">
									<option selected></option>
									<option value="Father">Father</option>
									<option value="Mother">Mother</option>
									<option value="Stepfather">Stepfather</option>
									<option value="Stepmother">Stepmother</option>
									<option value="Guardian">Guardian</option>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label for="inputGuardianStreet">Street</label>
								<input type="text" class="form-control" name = "inputGuardianStreet"id="inputGuardianStreet" placeholder="12345 Sample Street">
							</div>
							<div class="form-group col-sm-2">
								<label for="inputGuardianStreet2">Apt. or Lot #</label>
								<input type="text" class="form-control" name = "inputGuardianStreet2" id="inputGuardianStreet2" placeholder="12A">
							</div>
							<div class="form-group col-sm-2">
								<label for="inputGuardianCity">City</label>
								<input type="text" class="form-control" id="inputGuardianCity" name = "inputGuardianCity" placeholder="City">
							</div>
							<div class="form-group col-sm-2">
								<label for="inputGuardianState">State</label>
								<select class="form-control" id="inputGuardianState">
									<!--- PULL STATES FROM DATABASE -->
                                                       <?php
															$connection = new DBController(); 
															$record = $connection->runQuery("SELECT DISTINCT state FROM states WHERE state != '' ORDER BY state"); 
															foreach ($record as $row)
															{
																echo '<option name = "inputState">'. $row['state'].'</option>';
															}
														?>                 
								</select>
							</div>
							<div class="form-group col-sm-2">
								<label for="inputGuardianZip">Zip Code</label>
								<input type="text" class="form-control" id="inputGuardianZip" name="inputGuardianZip" placeholder="Zip Code">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputGuardianCell">Cell Phone</label>
								<input type="text" class="form-control" id="inputGuardianCell" name = "inputGuardianCell" placeholder="(555)-555-5555">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputGuardianHomePhone">Work Phone</label>
								<input type="text" class="form-control" id="inputGuardianHomePhone" name="inputGuardianHomePhone" placeholder="(555)-555-5555">
							</div>
							<div class="form-group col-sm-12">
								<label for="inputGuardianEmail">Email</label>
								<input type="email" class="form-control" name="inputGuardianEmail" id="inputGuardianEmail" placeholder="Email">
							</div>
							<legend>Recommendation (if applicable)</legend>
							<div class="form-group col-sm-12">
								<label for="inputRecommender">Recommender</label>
								<input type="text" class="form-control" name = "inputRecommender" id="inputRecommender" placeholder="Recommender">
							</div>
							<div class="form-group col-sm-12">
								<label for="inputRecommenderPhone">Telephone Number</label>
								<input type="text" class="form-control" name ="inputRecommenderPhone" id="inputRecommenderPhone" placeholder="(555)-555-5555">
							</div>
							<div class="form-group col-sm-12">
								<button class="btn btn-success" type="submit" name = "saveApplicant" id="saveCadet">Save</button>
							</div>
						</div>
					</form>
				</div>
<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>