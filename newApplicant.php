<!DOCTYPE html>
<?php
	include_once "basicPage.php";
	basicPage("New Applicant");
?>
				<div class="container col-sm-12">
					<form>
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label for="inputCommMethod">Preferred Method of Communication</label>
								<select class="form-control" id="inputCommMethod">
									<option selected></option>
									<option>Email</option>
									<option>Text</option>
									<option>US Mail</option>
									<option>Phone</option>
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label for="inputSSN">Social Security Number</label>
								<input type="text" class="form-control" id="inputSSN" placeholder="SSN">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputFirstname">First Name</label>
								<input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputMiddleName">Middle Name</label>
								<input type="text" class="form-control" id="inputMiddleName" placeholder="Middle Name">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputLastName">Last Name</label>
								<input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputGAResident">GA Resident</label>
								<select class="form-control" id="inputGAResident">
									<option selected>Yes</option>
									<option>No</option>
								</select>
							</div>
							<legend>Mailing Address</legend>
							<div class="form-group col-sm-4">
								<label for="inputMailStreet">Street</label>
								<input type="text" class="form-control" id="inputMailStreet" placeholder="12345 Sample Street">
							</div>
							<div class="form-group col-sm-2">
								<label for="inputStreet2">Apt. or Lot #</label>
								<input type="text" class="form-control" id="inputStreet2" placeholder="12A">
							</div>
							<div class="form-group col-sm-2">
								<label for="inputMailCity">City</label>
								<input type="text" class="form-control" id="inputMailCity" placeholder="City">
							</div>
							<div class="form-group col-sm-2">
								<label for="inputMailState">State</label>
								<select class="form-control" id="inputMailState">
									<!--- PULL STATES FROM DATABASE -->
								</select>
							</div>
							<div class="form-group col-sm-2">
								<label for="inputMailZip">Zip Code</label>
								<input type="text" class="form-control" id="inputMailZip" placeholder="Zip Code">
							</div>
							<div class="form-group col-sm-12">
								<label for="inputLocation">Campus Location</label>
								<select class="form-control" id="inputLocation">
									<option selected></option>
									<option>Milledgeville</option>
									<option>Fort Gordon</option>
									<option>Fort Stuart</option>
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label for="inputCell">Cell Phone</label>
								<input type="text" class="form-control" id="inputCell" placeholder="(555)-555-5555">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputHomePhone">Home Phone</label>
								<input type="text" class="form-control" id="inputHomePhone" placeholder="(555)-555-5555">
							</div>
							<legend>Family Income</legend>
							<div class="form-group col-sm-6">
								<label for="inputHousePeople">Persons in Household</label>
								<input type="text" class="form-control" id="inputHousePeople" placeholder="Persons in Household">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputIncome">Total Annual Income</label>
								<input type="text" class="form-control" id="inputIncome" placeholder="Total Annual Income">
								<br>
							</div>
							<div class="form-group col-sm-4">
								<label for="inputAge">Age</label>
								<input type="text" class="form-control" id="inputAge" placeholder="Age" readonly>
							</div>
							<div class="form-group col-sm-4">
								<label for="inputBirthday">Date of Birth</label>
								<input type="date" class="form-control" id="inputBirthday" placeholder="Date of Birth">
							</div>
							<div class="form-group col-sm-4">
								<label for="inputGender">Gender</label>
								<select class="form-control" id="inputGender">
									<option>Male</option>
									<option>Female</option>
									<option selected>Prefer Not to Answer</option>
								</select>
							</div>
							<legend>Race</legend>
							<div class="form-check form-check-inline col-sm-3">
								<input class="form-check-input" type="checkbox" id="raceWhite" value="option1">
								<label class="form-check-label" for="raceWhite">White</label>
							</div>
							<div class="form-check form-check-inline col-sm-3">
								<input class="form-check-input" type="checkbox" id="raceBlack" value="option1">
								<label class="form-check-label" for="raceBlack">Black</label>
							</div>
							<div class="form-check form-check-inline col-sm-3">
								<input class="form-check-input" type="checkbox" id="raceAmerican" value="option1">
								<label class="form-check-label" for="raceAmerican">Native American</label>
							</div>
							<div class="form-check form-check-inline col-sm-3">
								<input class="form-check-input" type="checkbox" id="raceAsian" value="option1">
								<label class="form-check-label" for="raceAsian">Asian</label>
							</div>
							<div class="form-check form-check-inline col-sm-3">
								<input class="form-check-input" type="checkbox" id="racePacific" value="option1">
								<label class="form-check-label" for="racePacific">Pacific Islander</label>
							</div>
							<div class="form-check form-check-inline col-sm-3">
								<input class="form-check-input" type="checkbox" id="raceMiddleEast" value="option1">
								<label class="form-check-label" for="raceMiddleEast">Middle Eastern</label>
							</div>
							<div class="form-check form-check-inline col-sm-6">
								<input class="form-check-input" type="checkbox" id="raceOther" value="option1">
								<label class="form-check-label" for="raceOther">Other</label>
							</div>
							<div class="form-group col-sm-12">
								<label for="inputHispanic">Hispanic/Latino</label>
								<select class="form-control" id="inputHispanic">
									<option>Yes</option>
									<option selected>No</option>
								</select>
								<br>
							</div>
							<div class="form-group col-sm-3">
								<label for="inputHair">Hair Color</label>
								<input type="text" class="form-control" id="inputHair" placeholder="Hair Color">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputEye">Eye Color</label>
								<input type="text" class="form-control" id="inputEye" placeholder="Eye Color">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputHeight">Height</label>
								<input type="text" class="form-control" id="inputHeight" placeholder="Height">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputWeight">Weight</label>
								<input type="text" class="form-control" id="inputWeight" placeholder="Weight">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputGED">Do you have a GED?</label>
								<select class="form-control" id="inputGED">
									<option>Yes</option>
									<option selected>No</option>
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label for="inputLastGrade">Last Grade Completed</label>
								<input type="text" class="form-control" id="inputLastGrade" placeholder="Last Grade Completed">
							</div>
							<div class="form-group col-sm-12">
								<label for="inputVolunteer">Did you volunteer for this program?</label>
								<select class="form-control" id="inputVolunteer">
									<option selected>Yes</option>
									<option>No</option>
								</select>
							</div>
							<div class="form-group col-sm-12">
								<label for="inputWithdraw">Month and Year of Withdrawing from School</label>
								<input type="date" class="form-control" id="inputWithdraw" placeholder="Month and Year of Withdrawing from School">
							</div>
							<legend>Are you unemployed or under-employed?</legend>
							<div class="form-check form-check-inline col-sm-6">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inputUnemployed" value="option1">
								<label class="form-check-label" for="inputUnemployed">Unemployed</label>
							</div>
							<div class="form-check form-check-inline col-sm-6">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inputUnder" value="option2">
								<label class="form-check-label" for="inputUnder">Under-employed</label>
							</div>
							<div class="form-group col-sm-12">
								<br>
								<label for="inputJob">If you are under-employed, what is your place of employment?</label>
								<input type="text" class="form-control" id="inputJob" placeholder="Place of Employment">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputWage">If you are under-employed, what is your hourly wage?</label>
								<input type="text" class="form-control" id="inputWage" placeholder="Hourly Wage">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputJob">If you are under-employed, how many hours a week do you work?</label>
								<input type="text" class="form-control" id="inputJob" placeholder="Hours per Week">
							</div>
							<legend>List two personal accomplishments</legend>
							<div class="form-group col-sm-12">
								<label for="inputFirst">1.</label>
								<input type="text" class="form-control" id="inputFirst" placeholder="Accomplishment">
							</div>
							<div class="form-group col-sm-12">
								<label for="inputSecond">2.</label>
								<input type="text" class="form-control" id="inputSecond" placeholder="Accomplishment">
							</div>
							<legend>Parent or Legal Guardian</legend>
							<div class="form-group col-sm-3">
								<label for="inputFirstname">First Name</label>
								<input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputMiddleName">Middle Name</label>
								<input type="text" class="form-control" id="inputMiddleName" placeholder="Middle Name">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputLastName">Last Name</label>
								<input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
							</div>
							<div class="form-group col-sm-3">
								<label for="inputRelationship">Relationship</label>
								<select class="form-control" id="inputRelationship">
									<option selected></option>
									<option>Father</option>
									<option>Mother</option>
									<option>Stepfather</option>
									<option>Stepmother</option>
									<option>Guardian</option>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label for="inputGuardianStreet">Street</label>
								<input type="text" class="form-control" id="inputGuardianStreet" placeholder="12345 Sample Street">
							</div>
							<div class="form-group col-sm-2">
								<label for="inputGuardianStreet2">Apt. or Lot #</label>
								<input type="text" class="form-control" id="inputGuardianStreet2" placeholder="12A">
							</div>
							<div class="form-group col-sm-2">
								<label for="inputGuardianCity">City</label>
								<input type="text" class="form-control" id="inputGuardianCity" placeholder="City">
							</div>
							<div class="form-group col-sm-2">
								<label for="inputGuardianState">State</label>
								<select class="form-control" id="inputGuardianState">
									<!--- PULL STATES FROM DATABASE -->
								</select>
							</div>
							<div class="form-group col-sm-2">
								<label for="inputGuardianZip">Zip Code</label>
								<input type="text" class="form-control" id="inputGuardianZip" placeholder="Zip Code">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputGuardianCell">Cell Phone</label>
								<input type="text" class="form-control" id="inputGuardianCell" placeholder="(555)-555-5555">
							</div>
							<div class="form-group col-sm-6">
								<label for="inputGuardianHomePhone">Work Phone</label>
								<input type="text" class="form-control" id="inputGuardianHomePhone" placeholder="(555)-555-5555">
							</div>
							<div class="form-group col-sm-12">
								<label for="inputGuardianEmail">Email</label>
								<input type="email" class="form-control" id="inputGuardianEmail" placeholder="Email">
							</div>
							<legend>Recommendation (if applicable)</legend>
							<div class="form-group col-sm-12">
								<label for="inputRecommender">Recommender</label>
								<input type="text" class="form-control" id="inputRecommender" placeholder="Recommender">
							</div>
							<div class="form-group col-sm-12">
								<label for="inputRecommenderPhone">Telephone Number</label>
								<input type="text" class="form-control" id="inputRecommenderPhone" placeholder="(555)-555-5555">
							</div>
							<div class="form-group col-sm-12">
								<button class="btn btn-success" type="submit" id="saveCadet">Save</button>
							</div>
						</div>
					</form>
				</div>
<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>