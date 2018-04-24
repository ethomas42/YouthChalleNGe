<!DOCTYPE html>
<?php
	include_once "basicPage.php";
    require_once 'dbcontroller.php';
	basicPage("Applicant View");
    
    $ssn = $_POST['ssn']; 
	if(empty($ssn)) {
		echo "<div class='alert alert-danger'>";
		echo "<strong>Error!</strong> Unable to fetch SSN of applicant. Please go back to the All Cadet View and try again.";
		echo "</div>";
	}
    $connection = new DBController(); 
    $record = $connection->runQuery("SELECT * FROM cadets WHERE ssn = '$ssn'")[0];
    $race = preg_split("/;/", $record["race"]);
    $raceCheck = "checked";
?>

	<script>
        	function changeView()
		        {
					// basic info
		    		document.getElementById('editCadet').setAttribute('style','display:none');
		    		document.getElementById('viewCadet').removeAttribute('style','display:none');
		    		document.getElementById('inputCommMethod').removeAttribute('disabled');
					// ssn shenanigans
		    		document.getElementById('inputSSN').removeAttribute('readonly');
					var realSSN = document.getElementById('ssnVal').value;
					document.getElementById('inputSSN').setAttribute('value', realSSN);
					
		    		document.getElementById('inputFirstName').removeAttribute('readonly');
		    		document.getElementById('inputLastName').removeAttribute('readonly');
		    		document.getElementById('inputMiddleName').removeAttribute('readonly');
		    		document.getElementById('inputGenQual').removeAttribute('disabled');
		    		document.getElementById('inputHair').removeAttribute('readonly');
		    		document.getElementById('inputEye').removeAttribute('readonly');
		    		document.getElementById('inputHeight').removeAttribute('readonly');
		    		document.getElementById('inputWeight').removeAttribute('readonly');
		    		document.getElementById('raceWhite').removeAttribute('disabled');
		    		document.getElementById('raceBlack').removeAttribute('disabled');
		    		document.getElementById('raceAmerican').removeAttribute('disabled');
		    		document.getElementById('raceAsian').removeAttribute('disabled');
		    		document.getElementById('racePacific').removeAttribute('disabled');
		    		document.getElementById('raceMiddleEast').removeAttribute('disabled');
		    		document.getElementById('raceOther').removeAttribute('disabled');
		    		document.getElementById('inputHispanic').removeAttribute('disabled');
		    		$('[id^=inputPhone]').removeAttr('readonly');
		    		document.getElementById('inputAge').removeAttribute('readonly');
		    		document.getElementById('inputBirthday').removeAttribute('readonly');
		    		document.getElementById('inputGender').removeAttribute('disabled');
		    		document.getElementById('inputEmail').removeAttribute('readonly');
					// location
		    		document.getElementById('inputLocation').removeAttribute('disabled');
		    		document.getElementById('inputGAResident').removeAttribute('disabled');
		    		document.getElementById('inputMailStreet').removeAttribute('readonly');
		    		document.getElementById('inputStreet2').removeAttribute('readonly');
		    		document.getElementById('inputMailCity').removeAttribute('readonly');
		    		document.getElementById('inputMailState').removeAttribute('disabled');
		    		document.getElementById('inputMailZip').removeAttribute('readonly');
		    		document.getElementById('inputPhysicalStreet').removeAttribute('readonly');
		    		document.getElementById('inputPhysicalStreet2').removeAttribute('readonly');
		    		document.getElementById('inputPhysicalCity').removeAttribute('readonly');
		    		document.getElementById('inputPhysicalState').removeAttribute('disabled');
		    		document.getElementById('inputPhysicalZip').removeAttribute('readonly');
					// guardian
		    		$('[id^=inputGFirstName]').removeAttr('readonly');
					$('[id^=inputGMiddleName]').removeAttr('readonly');
		    		$('[id^=inputGLastName]').removeAttr('readonly');
		    		$('[id^=inputGRelationship]').removeAttr('disabled');
		    		$('[id^=inputGStreet]').removeAttr('readonly');
		    		$('[id^=inputGStreet2]').removeAttr('readonly');
		    		$('[id^=inputGCity]').removeAttr('readonly');
		    		$('[id^=inputGState]').removeAttr('disabled');
		    		$('[id^=inputGZip]').removeAttr('readonly');
		    		$('[id^=inputGCell]').removeAttr('readonly');
		    		$('[id^=inputGHomePhone]').removeAttr('readonly');
		    		$('[id^=inputGEmail]').removeAttr('readonly');
					// medical
		    		$('[id^=inputDrugName').removeAttr('readonly');
		    		$('[id^=inputDrugType').removeAttr('readonly');
		    		$('[id^=inputDrugDosage').removeAttr('readonly');
		    		$('[id^=inputDrugFrequency').removeAttr('readonly');
		    		$('[id^=inputTakenWhen').removeAttr('readonly');
		    		$('[id^=inputStartDate').removeAttr('readonly');
		    		$('[id^=inputEndDate').removeAttr('readonly');
		    		$('[id^=inputDrugDosage').removeAttr('readonly');
		    		$('[id^=inputAllergyType').removeAttr('readonly');
		    		$('[id^=inputAllergyNotes').removeAttr('readonly');
		    		$('[id^=inputImmDate').removeAttr('readonly');
		    		$('[id^=inputUnemployed').removeAttr('disabled');
		    		$('[id^=inputUnder').removeAttr('disabled');
		    		$('[id^=inputImmDate').removeAttr('readonly');
					$('[id^=inputImmType').removeAttr('readonly');
					$('[id^=inputImmValid').removeAttr('readonly');
					$('[id^=inputImmNotes').removeAttr('readonly');
					$('[id^=inputAbuseDate').removeAttr('readonly');
					$('[id^=inputAbuseResults').removeAttr('readonly');
					$('[id^=inputAbuseName').removeAttr('readonly');
					$('[id^=inputAbuseNotes').removeAttr('readonly');
					// misc
					document.getElementById('inputHousePeople').removeAttribute('readonly');
					document.getElementById('inputIncome').removeAttribute('readonly');
					document.getElementById('inputGED').removeAttribute('readonly');
					document.getElementById('inputLastGrade').removeAttribute('readonly');
					document.getElementById('inputVolunteer').removeAttribute('readonly');
					document.getElementById('inputWithdraw').removeAttribute('readonly');
					document.getElementById('inputJob').removeAttribute('readonly');
					document.getElementById('inputWage').removeAttribute('readonly');
					document.getElementById('inputHours').removeAttribute('readonly');
					document.getElementById('inputFirst').removeAttribute('readonly');
					document.getElementById('inputSecond').removeAttribute('readonly');
					document.getElementById('inputRecommender').removeAttribute('readonly');
					document.getElementById('inputRecommenderPhone').removeAttribute('readonly');
				}
			function changeEdit()
				{
					// basic info
		    		document.getElementById('editCadet').removeAttribute('style','display:none');
		    		document.getElementById('viewCadet').setAttribute('style','display:none');
		    		document.getElementById('inputCommMethod').setAttribute('disabled', 'true');
					// ssn shenanigans
		    		document.getElementById('inputSSN').setAttribute('readonly', 'true');
					var tempSSN = document.getElementById('tempSsnVal').value;
					document.getElementById('inputSSN').setAttribute('value', '*****'+tempSSN);
					
		    		document.getElementById('inputFirstName').setAttribute('readonly', 'true');
		    		document.getElementById('inputLastName').setAttribute('readonly', 'true');
		    		document.getElementById('inputMiddleName').setAttribute('readonly', 'true');
		    		document.getElementById('inputGenQual').setAttribute('disabled', 'true');
		    		document.getElementById('inputHair').setAttribute('readonly', 'true');
		    		document.getElementById('inputEye').setAttribute('readonly', 'true');
		    		document.getElementById('inputHeight').setAttribute('readonly', 'true');
		    		document.getElementById('inputWeight').setAttribute('readonly', 'true');
		    		document.getElementById('raceWhite').setAttribute('disabled', 'true');
		    		document.getElementById('raceBlack').setAttribute('disabled', 'true');
		    		document.getElementById('raceAmerican').setAttribute('disabled', 'true');
		    		document.getElementById('raceAsian').setAttribute('disabled', 'true');
		    		document.getElementById('racePacific').setAttribute('disabled', 'true');
		    		document.getElementById('raceMiddleEast').setAttribute('disabled', 'true');
		    		document.getElementById('raceOther').setAttribute('disabled', 'true');
		    		document.getElementById('inputHispanic').setAttribute('disabled', 'true');
		    		$('[id^=inputPhone]').attr('readonly', 'true');
		    		document.getElementById('inputAge').setAttribute('readonly', 'true');
		    		document.getElementById('inputBirthday').setAttribute('readonly', 'true');
		    		document.getElementById('inputGender').setAttribute('disabled', 'true');
		    		document.getElementById('inputEmail').setAttribute('readonly', 'true');
					// location
		    		document.getElementById('inputLocation').setAttribute('disabled', 'true');
		    		document.getElementById('inputGAResident').setAttribute('disabled', 'true');
		    		document.getElementById('inputMailStreet').setAttribute('readonly', 'true');
		    		document.getElementById('inputStreet2').setAttribute('readonly', 'true');
		    		document.getElementById('inputMailCity').setAttribute('readonly', 'true');
		    		document.getElementById('inputMailState').setAttribute('disabled', 'true');
		    		document.getElementById('inputMailZip').setAttribute('readonly', 'true');
		    		document.getElementById('inputPhysicalStreet').setAttribute('readonly', 'true');
		    		document.getElementById('inputPhysicalStreet2').setAttribute('readonly', 'true');
		    		document.getElementById('inputPhysicalCity').setAttribute('readonly', 'true');
		    		document.getElementById('inputPhysicalState').setAttribute('disabled', 'true');
		    		document.getElementById('inputPhysicalZip').setAttribute('readonly', 'true');
					// guardians
					$('[id^=inputGFirstName]').attr('readonly', 'true');
		    		$('[id^=inputGMiddleName]').attr('readonly', 'true');
		    		$('[id^=inputGLastName]').attr('readonly', 'true');
		    		$('[id^=inputGRelationship]').attr('disabled', 'true');
		    		$('[id^=inputGStreet]').attr('readonly', 'true');
		    		$('[id^=inputGStreet2]').attr('readonly', 'true');
		    		$('[id^=inputGCity]').attr('readonly', 'true');
		    		$('[id^=inputGState]').attr('disabled', 'true');
		    		$('[id^=inputGZip]').attr('readonly', 'true');
		    		$('[id^=inputGCell]').attr('readonly', 'true');
		    		$('[id^=inputGHomePhone]').attr('readonly', 'true');
		    		$('[id^=inputGEmail]').attr('readonly', 'true');
					// medical
		    		$('[id^=inputDrugName').attr('readonly', 'true');
		    		$('[id^=inputDrugType').attr('readonly', 'true');
		    		$('[id^=inputDrugDosage').attr('readonly', 'true');
		    		$('[id^=inputDrugFrequency').attr('readonly', 'true');
		    		$('[id^=inputTakenWhen').attr('readonly', 'true');
		    		$('[id^=inputStartDate').attr('readonly', 'true');
		    		$('[id^=inputEndDate').attr('readonly', 'true');
		    		$('[id^=inputDrugDosage').attr('readonly', 'true');
		    		$('[id^=inputAllergyType').attr('readonly', 'true');
		    		$('[id^=inputAllergyNotes').attr('readonly', 'true');
		    		$('[id^=inputUnemployed').attr('disabled', 'true');
		    		$('[id^=inputUnder').attr('disabled', 'true');
		    		$('[id^=inputImmDate').attr('readonly', 'true');
					$('[id^=inputImmType').attr('readonly', 'true');
					$('[id^=inputImmValid').attr('readonly', 'true');
					$('[id^=inputImmNotes').attr('readonly', 'true');
					$('[id^=inputAbuseDate').attr('readonly', 'true');
					$('[id^=inputAbuseResults').attr('readonly', 'true');
					$('[id^=inputAbuseName').attr('readonly', 'true');
					$('[id^=inputAbuseNotes').attr('readonly', 'true');
					// misc
					document.getElementById('inputHousePeople').setAttribute('readonly', 'true');
					document.getElementById('inputIncome').setAttribute('readonly', 'true');
					document.getElementById('inputGED').setAttribute('readonly', 'true');
					document.getElementById('inputLastGrade').setAttribute('readonly', 'true');
					document.getElementById('inputVolunteer').setAttribute('readonly', 'true');
					document.getElementById('inputWithdraw').setAttribute('readonly', 'true');
					document.getElementById('inputJob').setAttribute('readonly', 'true');
					document.getElementById('inputWage').setAttribute('readonly', 'true');
					document.getElementById('inputHours').setAttribute('readonly', 'true');
					document.getElementById('inputFirst').setAttribute('readonly', 'true');
					document.getElementById('inputSecond').setAttribute('readonly', 'true');
					document.getElementById('inputRecommender').setAttribute('readonly', 'true');
					document.getElementById('inputRecommenderPhone').setAttribute('readonly', 'true');
				}
			
			function calcAge() {
				var dob = $('#inputBirthday').val();
				dob = new Date(dob);
				var today = new Date();
				var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
				$('#inputAge').val(age);
			}
			window.onload = calcAge;
		</script>
				<!-- edit buttons -->
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#graduateCheck">Graduate</button>
				<button class="btn btn-danger" value="submit" id="editCadet" onclick='changeView()'>Edit</button>
				<button class="btn btn-warning" value="submit" id="viewCadet" style="display: none;" onclick='changeEdit()'>View</button>

				<!-- Graduate Confirmation Check -->
				<div class="modal fade" id="graduateCheck" tabindex="-1" role="dialog" aria-labelledby="graduateCheckTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p>Are you sure you want to graduate this cadet? Choosing 'Accept' will automatically transition this cadet into a graduate and bring you to the All Cadets page.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary col-sm-1" data-dismiss="modal">Close</button>
								<form action='graduateCadet.php' method = "POST" class='col-sm-1'>
									<input type='hidden' name='ssnGraduate' value='<?php echo $ssn ?>'></input>
									<button name='graduateCadet' class="btn btn-danger" value="submit" id="graduateCadet">Accept</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Confirmation Check End -->

				<p></br></p>
				
				<!-- Centered Tabs -->
				<ul class="nav nav-tabs nav-justified">
				  <li class="nav-item active"><a data-toggle="tab" href="#basicTab">Basic</a></li>
				  <li class="nav-item"><a data-toggle="tab" href="#locationTab">Location</a></li>
				  <li class="nav-item"><a data-toggle="tab" href="#gTab">Guardian</a></li>
				  <li class="nav-item dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Medical
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li><a data-toggle="tab" href="#medTab">Medications</a></li>
					  <li><a data-toggle="tab" href="#allerTab">Allergies</a></li>
					  <li><a data-toggle="tab" href="#immTab">Immunizations</a></li> 
					  <li><a data-toggle="tab" href="#abuseTab">Substance Abuse</a></li>
					</ul>
				  </li>
				  <li class="nav-item dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Files
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
                      <li><a data-toggle="tab" href="#fileGeneralTab">General</a></li>
					  <li><a data-toggle="tab" href="#fileMedicalTab">Medical</a></li>
					  <li><a data-toggle="tab" href="#fileCounselorTab">Counseling</a></li>
					  <li><a data-toggle="tab" href="#fileRecruitmentTab">Recruitment</a></li> 
					</ul>
				  </li>
				  <li class="nav-item"><a data-toggle="tab" href="#miscTab">Misc.</a></li>
				</ul>
				</br>
				<div class="tab-content">

					<!-- BASIC INFORMATION TAB -->
					
					<div class="tab-pane container col-sm-12 active" id="basicTab">
						<form action="update-cadets.php" method = "POST" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to submit this form?');">
						<form action = "update-cadets.php" method = "POST" enctype="multipart/form-data" onsubmit=return confirm("Are you sure you want to save these changes?");>
							<input type="hidden" name="ssnKey" value="<?= $record['ssn'] ?>">
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="inputCommMethod">Preferred Method of Communication</label>
									<select class="form-control" id="inputCommMethod" value = "<?= $record["preferredComm"]?>" disabled="disabled">
										<option selected></option>
										<option>Email</option>
										<option>Text</option>
										<option>US Mail</option>
										<option>Phone</option>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputSSN">Social Security Number</label>
									<input type="text" class="form-control" id="inputSSN" value = "<?= '*****'.substr($record['ssn'], -4) ?>"readonly>
									<input type="hidden" id="ssnVal" value="<?= $record['ssn'] ?>">
									<input type="hidden" id="tempSsnVal" value="<?= substr($record['ssn'], -4) ?>">
								</div>
								<div class="form-group col-sm-4">
									<label for="inputFirstname">First Name</label>
                                    <input type="text" name ="inputFirstName" class="form-control" id="inputFirstName" value = "<?= $record["fName"]?>" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputMiddleName">Middle Name</label>
									<input type="text" name ="inputMiddleName" class="form-control" id="inputMiddleName" value = "<?= $record["mName"]?>" placeholder="Middle Name" readonly>
								</div>
								<div class="form-group col-sm-4">
									<label for="inputLastName">Last Name</label>
									<input type="text" name ="inputLastName" class="form-control" id="inputLastName" value = "<?= $record["lName"]?>"placeholder="Last Name" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputGenQual">Gen. Qualifier</label>
									<select class="form-control" name = "inputGenQual" id="inputGenQual" disabled="disabled">
										<option></option>
										<option <?php if($record['genQual']=='Jr') echo 'selected';?>>Jr.</option>
										<option <?php if($record['genQual']=='Sr') echo 'selected';?>>Sr.</option>
										<option <?php if($record['genQual']=='III') echo 'selected';?>>III</option>
										<option <?php if($record['genQual']=='IV') echo 'selected';?>>IV</option>
										<option <?php if($record['genQual']=='V') echo 'selected';?>>V</option>
									</select>
								</div>
								<div class="form-group col-sm-3">
									<label for="inputHair">Hair Color</label>
									<input type="text" class="form-control" id="inputHair" name = "inputHair" value = "<?= $record["hairColor"]?>" placeholder="Hair Color" readonly>
								</div>
								<div class="form-group col-sm-3">
									<label for="inputEye">Eye Color</label>
									<input type="text" class="form-control" id="inputEye" name = "inputEye" value = "<?= $record["eyeColor"]?>" placeholder="Eye Color" readonly>
								</div>
								<div class="form-group col-sm-3">
									<label for="inputHeight">Height</label>
									<input type="text" class="form-control" id="inputHeight" name = "inputHeight" value = "<?= $record["height"]?>" placeholder="Height" readonly>
								</div>
								<div class="form-group col-sm-3">
									<label for="inputWeight">Weight</label>
									<input type="text" class="form-control" id="inputWeight" name = "inputWeight" value = "<?= $record["weight"]?>" placeholder="Weight" readonly>
								</div>
								<legend>Race</legend>
								<div class="form-check form-check-inline col-sm-3">
                                                                        <?php
                                                                            $raceCheck="";
                                                                            if(in_array('white',$race))
                                                                            {
                                                                                $raceCheck="checked";
                                                                            }
                                                                        ?>
									<input class="form-check-input" name ="race" type="checkbox" id="raceWhite" disabled="disabled" <?=$raceCheck?>>
									<label class="form-check-label" for="raceWhite">White</label>
								</div>
								<div class="form-check form-check-inline col-sm-3">
                                                                        <?php
                                                                            $raceCheck="";
                                                                            if(in_array('black',$race))
                                                                            {
                                                                                $raceCheck="checked";
                                                                            }
                                                                        ?>
									<input class="form-check-input" name="race" type="checkbox" id="raceBlack" disabled="disabled" <?=$raceCheck?>>
									<label class="form-check-label" for="raceBlack">Black</label>
								</div>
								<div class="form-check form-check-inline col-sm-3">
                                                                        <?php
                                                                            $raceCheck="";
                                                                            if(in_array('nativeAmerican',$race))
                                                                            {
                                                                                $raceCheck="checked";
                                                                            }
                                                                        ?>
									<input class="form-check-input" name="race" type="checkbox" id="raceAmerican" disabled="disabled" <?=$raceCheck?>>
									<label class="form-check-label" for="raceAmerican">Native American</label>
								</div>
								<div class="form-check form-check-inline col-sm-3">
                                                                        <?php
                                                                            $raceCheck="";
                                                                            if(in_array('asian',$race))
                                                                            {
                                                                                $raceCheck="checked";
                                                                            }
                                                                        ?>
									<input class="form-check-input" name="race" type="checkbox" id="raceAsian" value="option1" disabled="disabled" <?=$raceCheck?>>
									<label class="form-check-label" for="raceAsian">Asian</label>
								</div>
								<div class="form-check form-check-inline col-sm-3">
                                                                        <?php
                                                                            $raceCheck="";
                                                                            if(in_array('pacific',$race))
                                                                            {
                                                                                $raceCheck="checked";
                                                                            }
                                                                        ?>
									<input class="form-check-input" name="race" type="checkbox" id="racePacific" value="option1" disabled="disabled" <?=$raceCheck?>>
									<label class="form-check-label" for="racePacific">Pacific Islander</label>
								</div>
								<div class="form-check form-check-inline col-sm-3">
                                                                        <?php
                                                                            $raceCheck="";
                                                                            if(in_array('middleEastern',$race))
                                                                            {
                                                                                $raceCheck="checked";
                                                                            }
                                                                        ?>
									<input class="form-check-input" name="race" type="checkbox" id="raceMiddleEast" value="option1" disabled="disabled" <?=$raceCheck?>>
									<label class="form-check-label" for="raceMiddleEast">Middle Eastern</label>
								</div>
								<div class="form-check form-check-inline col-sm-6">
                                                                        <?php
                                                                            $raceCheck="";
                                                                            if(in_array('other',$race))
                                                                            {
                                                                                $raceCheck="checked";
                                                                            }
                                                                        ?>
									<input class="form-check-input" name="race" type="checkbox" id="raceOther" value="option1" disabled="disabled" <?=$raceCheck?>>
									<label class="form-check-label" for="raceOther">Other</label>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputHispanic">Hispanic/Latino</label>
									<select class="form-control" name="hispanic" id="inputHispanic" disabled="disabled">
										<option <?php if($record['isHispanic']) echo 'selected';?>>Yes</option>
										<option <?php if(!$record['isHispanic']) echo 'selected';?>>No</option>
									</select>
									<br>
								</div>
                                                              
								<div class="form-group col-sm-4">
									<label for="inputAge">Age</label>
									<input type="text" class="form-control" id="inputAge" value = "<?= $record["age"]?>" onload="calcAge()" placeholder="Age" readonly>
								</div>
								<div class="form-group col-sm-4">
									<label for="inputBirthday">Date of Birth</label>
									<input type="date" class="form-control" name="inputBirthday" id="inputBirthday" onblur="calcAge()" value = "<?= $record["birthday"]?>" placeholder="Birthday"readonly>
								</div>
								<div class="form-group col-sm-4">
									<label for="inputGender">Gender</label>
									<select class="form-control" name="inputGender" id="inputGender" disabled="disabled">
										<option></option>
										<option <?php if($record['gender']=='M') echo 'selected';?>>Male</option>
										<option <?php if($record['gender']=='F') echo 'selected';?>>Female</option>
										<option <?php if($record['gender']=='P') echo 'selected';?>>Prefer Not to Answer</option>
									</select>
								</div>
								<div class="form-group col-sm-12">
								<?php 
									$phoneInfo = $connection->runQuery("SELECT * FROM phonenumbers WHERE ssn = '$ssn'");
									$numPhones = count($phoneInfo);
									for($i = 0; $i < $numPhones; $i ++) {
										echo '<input type="hidden" name="inputPhoneID'. $i .'" value="'. $phoneInfo[$i]['phoneID'] .'">';
										echo '<div class="col-sm-4"><label for="inputPhone'. $i .'">Phone '. ($i+1) .'</label>';
										echo '<input type="text" class="form-control" name="inputPhone'. $i .'" id="inputPhone'. $i .'" value = "'. $phoneInfo[$i]['phoneNumber'] .'" placeholder="(555)-555-5555" readonly></div>';
										echo '<div class="col-sm-2"><label for="inputPhone'. $i .'">Ext '. ($i+1) .'</label>';
										echo '<input type="text" class="form-control" name="inputPhoneExt'. $i .'" id="inputPhoneExt'. $i .'" value = "'. $phoneInfo[$i]['ext'] .'" placeholder="1234" readonly></div>';
										echo '<div class="col-sm-6"><label for="inputPhoneNotes'. $i .'">Notes '. ($i+1) .'</label>';
										echo '<textarea class="form-control" name="inputPhoneNotes'. $i .'" id="inputPhoneNotes'. $i .'" placeholder="Notes" rows="1" readonly>'. $phoneInfo[$i]['notes'] .'</textarea></div>';
									}
								?>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputEmail">Email</label>
									<input type="email" class="form-control" name="inputEmail" id="inputEmail" value = "<?= $record["email"]?>" placeholder="Email" readonly>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputAdmission">Admission Status</label>
									<input type="text" class="form-control" name="inputAdmission" id="inputAdmission" value = "<?= $record["admissionStatus"]?>" readonly>
								</div>
							</div>
							<button name="saveCadet" class="btn btn-success" type="submit" id="saveCadet">Save</button>
						</form>
					</div>
					
					<!-- GENRAL FILE UPLOAD TAB -->
					
					<div class="tab-pane col-sm-12 container" id="fileGeneralTab">
						<form action="update-cadets.php" method = "POST" enctype="multipart/form-data" onsubmit=return confirm("Are you sure you want to save these changes?");>
							<h3>Documents:</h3>
							<table id="documents-table" class="table table-striped table-bordered" cellspacing="0">
								<thead>
									<tr>
										<th>Filename</th>
										<th>Upload Date</th>
									</tr>
								</thead>
								<tbody>
									<?php
										include_once "dbcontroller.php";
										$db = new DBController();
										if($db->numRows("SELECT filename, uploadDate FROM attachments WHERE ssn = $ssn AND category = 'general'"))
										{
											$results = $db->runQuery("SELECT filename, uploadDate FROM attachments WHERE ssn = $ssn AND category = 'general'");
											foreach($results as $row)
											{
												echo <<<_END
														<tr>
															<td>{$row['filename']}</td>
															<td>{$row['uploadDate']}</td>
														</tr>
_END;
											}
										}
									?>
								</tbody>
							</table>
							<label class="custom-file"> Upload New Document
								 <input name="attachment" type="file" id="file" class="custom-file-input">
								 <input name ="ssn" type ="hidden" value ="<?=$ssn?>">
                              	 <input name="category" type="hidden" value="general">
								  <span class="custom-file-control"></span>
							</label>
							<br>
							<button name="saveCadet" class="btn btn-success" type="submit" id="saveCadet">Save</button>
						 </form>
					</div>

<!-- MEDICAL FILE UPLOAD TAB -->
					
					<div class="tab-pane col-sm-12 container" id="fileMedicalTab">
						<form action="update-cadets.php" method = "POST" enctype="multipart/form-data" onsubmit=return confirm("Are you sure you want to save these changes?");>
							<h3>Documents:</h3>
							<table id="documents-table" class="table table-striped table-bordered" cellspacing="0">
								<thead>
									<tr>
										<th>Filename</th>
										<th>Upload Date</th>
									</tr>
								</thead>
								<tbody>
									<?php
										include_once "dbcontroller.php";
										$db = new DBController();
										if($db->numRows("SELECT filename, uploadDate FROM attachments WHERE ssn = $ssn AND category = 'medical'"))
										{
											$results = $db->runQuery("SELECT filename, uploadDate FROM attachments WHERE ssn = $ssn AND category = 'medical'");
											foreach($results as $row)
											{
												echo <<<_END
														<tr>
															<td>{$row['filename']}</td>
															<td>{$row['uploadDate']}</td>
														</tr>
_END;
											}
										}
									?>
								</tbody>
							</table>
							<label class="custom-file"> Upload New Document
								 <input name="attachment" type="file" id="file" class="custom-file-input">
								 <input name ="ssn" type ="hidden" value ="<?=$ssn?>">
                              	 <input name="category" type="hidden" value="medical">
								  <span class="custom-file-control"></span>
							</label>
							</br>
							<button name="saveCadet" class="btn btn-success" type="submit" id="saveCadet">Save</button>
						</form>
					</div>

<!-- COUNSELOR FILE UPLOAD TAB -->
					
					<div class="tab-pane col-sm-12 container" id="fileCounselorTab">
						<form action="update-cadets.php" method = "POST" enctype="multipart/form-data" onsubmit=return confirm("Are you sure you want to save these changes?");>
							<h3>Documents:</h3>
							<table id="documents-table" class="table table-striped table-bordered" cellspacing="0">
								<thead>
									<tr>
										<th>Filename</th>
										<th>Upload Date</th>
									</tr>
								</thead>
								<tbody>
									<?php
										include_once "dbcontroller.php";
										$db = new DBController();
										if($db->numRows("SELECT filename, uploadDate FROM attachments WHERE ssn = $ssn AND category = 'counselor'"))
										{
											$results = $db->runQuery("SELECT filename, uploadDate FROM attachments WHERE ssn = $ssn AND category = 'counselor'");
											foreach($results as $row)
											{
												echo <<<_END
														<tr>
															<td>{$row['filename']}</td>
															<td>{$row['uploadDate']}</td>
														</tr>
_END;
											}
										}
									?>
								</tbody>
							</table>
							<label class="custom-file"> Upload New Document
								 <input name="attachment" type="file" id="file" class="custom-file-input">
								 <input name ="ssn" type ="hidden" value ="<?=$ssn?>">
                              	 <input name="category" type="hidden" value="counselor">
								  <span class="custom-file-control"></span>
							</label>
							</br>
							<button name="saveCadet" class="btn btn-success" type="submit" id="saveCadet">Save</button>
						</form>
					</div>

<!-- RECRUITMENT FILE UPLOAD TAB -->
					
					<div class="tab-pane col-sm-12 container" id="fileRecruitmentTab">
						<form action="update-cadets.php" method = "POST" enctype="multipart/form-data" onsubmit=return confirm("Are you sure you want to save these changes?");>
							<h3>Documents:</h3>
							<table id="documents-table" class="table table-striped table-bordered" cellspacing="0">
								<thead>
									<tr>
										<th>Filename</th>
										<th>Upload Date</th>
									</tr>
								</thead>
								<tbody>
									<?php
										include_once "dbcontroller.php";
										$db = new DBController();
										if($db->numRows("SELECT filename, uploadDate FROM attachments WHERE ssn = $ssn AND category = 'recruitment'"))
										{
											$results = $db->runQuery("SELECT filename, uploadDate FROM attachments WHERE ssn = $ssn AND category = 'recruitment'");
											foreach($results as $row)
											{
												echo <<<_END
														<tr>
															<td>{$row['filename']}</td>
															<td>{$row['uploadDate']}</td>
														</tr>
_END;
											}
										}
									?>
								</tbody>
							</table>
							<label class="custom-file"> Upload New Document
								 <input name="attachment" type="file" id="file" class="custom-file-input">
								 <input name ="ssn" type ="hidden" value ="<?=$ssn?>">
                              	 <input name="category" type="hidden" value="recruitment">
								  <span class="custom-file-control"></span>
							</label>
							</br>
						</form>
					</div>
					
					<!-- LOCATION INFORMATION TAB -->
					
					<div class="tab-pane col-sm-12 container" id="locationTab">
						<form action="update-cadets.php" method = "POST" enctype="multipart/form-data">
						<form action="update-cadets.php" method = "POST" enctype="multipart/form-data" onsubmit=return confirm("Are you sure you want to save these changes?");>
							<input type="hidden" name="ssnKey" value="<?= $record['ssn'] ?>">
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="inputGAResident">GA Resident</label>
									<select class="form-control" name="inputGAResident" id="inputGAResident" disabled="disabled">
										<option></option>
										<option <?php if($record['gaResident']) echo 'selected';?>>Yes</option>
										<option <?php if($record['gaResident']) echo 'selected';?>>No</option>
									</select>
								</div>
								<legend>Mailing Address</legend>
								<div class="form-group col-sm-4">
									<label for="inputMailStreet">Street</label>
									<input type="text" class="form-control" name="inputMailStreet" id="inputMailStreet" value = "<?= $record["mStreet"]?>" placeholder="12345 Sample Street" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputStreet2">Apt. or Lot #</label>
									<input type="text" class="form-control" name="inputStreet2" id="inputStreet2" value = "<?= $record["mStreet2"]?>" placeholder="12A" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputMailCity">City</label>
									<input type="text" class="form-control" name="inputMailCity" id="inputMailCity" value = "<?= $record["mCity"]?>" placeholder="City" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputMailState">State</label>
									<select class="form-control" name="inputMailState" id="inputMailState" disabled="disabled">
										<option selected></option>
										<!--- PULL STATES FROM DATABASE -->
										<?php
											$states = $connection->runQuery("SELECT DISTINCT state FROM states");
											foreach($states as $state)
											{
												if($record['mState'] == $state['state'])
												{
													echo "<option selected>" . $state['state'] . "</option>";
												}
												else
												{
													echo "<option>" . $state['state'] . "</option>";
												}
											}
										?>
									</select>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputMailZip">Zip Code</label>
									<input type="text" class="form-control" name="inputMailZip" id="inputMailZip" value = "<?= $record["mZip"]?>" placeholder="Zip Code" readonly>
								</div>
								<legend>Physical Address</legend>
								<div class="form-group col-sm-4">
									<label for="inputPhysicalStreet">Street</label>
									<input type="text" class="form-control" name="inputPhysicalStreet" id="inputPhysicalStreet" value = "<?= $record["pStreet"]?>" placeholder="12345 Sample Street" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputPhysicalStreet2">Apt. or Lot #</label>
									<input type="text" class="form-control" name="inputPhysicalStreet2" id="inputPhysicalStreet2" value = "<?= $record["pStreet2"]?>" placeholder="Apt 123" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputPhysicalCity">City</label>
									<input type="text" class="form-control" name="inputPhysicalCity" id="inputPhysicalCity" value = "<?= $record["pCity"]?>" placeholder="pCity" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputPhysicalState">State</label>
									<select class="form-control" name="inputPhysicalState" id="inputPhysicalState" disabled="disabled">
										<option></option>
										<!--- PULL STATES FROM DATABASE -->
										<?php
											foreach($states as $state)
											{
												if($record['pState'] == $state['state'])
												{
													echo "<option selected>" . $state['state'] . "</option>";
												}
												else
												{
													echo "<option>" . $state['state'] . "</option>";
												}
											}
										?>
									</select>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputPhysicalZip">Zip Code</label>
									<input type="text" class="form-control" name="inputPhysicalZip" id="inputPhysicalZip" value = "<?= $record["pZip"]?>" placeholder="Zip Code" readonly>
								</div>
							</div>
							<button name="saveCadet" class="btn btn-success" type="submit" id="saveCadet">Save</button>
						</form>
					</div>
					
					<!-- GUARDIAN INFORMATION TAB -->				
					<div class="tab-pane col-sm-12 container" id="gTab">
						<form action="update-cadets.php" method = "POST" enctype="multipart/form-data">
						<form action="update-cadets.php" method = "POST" enctype="multipart/form-data" onsubmit=return confirm("Are you sure you want to save these changes?");>
							<input type="hidden" name="ssnKey" value="<?= $record['ssn'] ?>">
							<?php 
								$guardianInfo = $connection->runQuery("SELECT * FROM guardians WHERE ssn = '$ssn'");
								$numGuards = count($guardianInfo);
								if($numGuards > 0) {
									for($i = 0; $i < $numGuards; $i ++) {
										$n = $i+1;
										echo <<<_END
										<legend>Guardian {$n}</legend>
										<input type="hidden" name="inputGuardID{$i}" value="{$guardianInfo[$i]['guardID']}">
										<div>
											<div class="form-group col-sm-3">
												<label for="inputGFirstname{$i}">First Name</label>
												<input type="text" class="form-control" name="inputGFirstName{$i}" id="inputGFirstName{$i}" value = {$guardianInfo[$i]['fName']} placeholder="First Name" readonly>
											</div>
											<div class="form-group col-sm-3">
												<label for="inputGMiddleName{$i}">Middle Name</label>
												<input type="text" class="form-control" name="inputGMiddleName{$i}" id="inputGMiddleName{$i}" value = {$guardianInfo[$i]['mName']} placeholder="Middle Name" readonly>
											</div>
											<div class="form-group col-sm-3">
												<label for="inputGLastName{$i}">Last Name</label>
												<input type="text" class="form-control" name="inputGLastName{$i}" id="inputGLastName{$i}" value = {$guardianInfo[$i]['lName']} placeholder="Last Name" readonly>
											</div>
											<div class="form-group col-sm-3">
												<label for="inputGRelationship">Relationship</label>
												<select class="form-control" name="inputGRelationship{$i}" id="inputGRelationship{$i}" disabled="disabled">
													<option></option>
_END;
											echo	"<option ". (($guardianInfo[$i]['relationship']=='father') ? 'selected' : "") .">Father</option>";
											echo	"<option ". (($guardianInfo[$i]['relationship']=='mother') ? 'selected' : "") .">Mother</option>";
											echo	"<option ". (($guardianInfo[$i]['relationship']=='stepfather') ? 'selected' : "") .">Stepfather</option>";
											echo 	"<option ". (($guardianInfo[$i]['relationship']=='stepmother') ? 'selected' : "") .">Stepmother</option>";
											echo    "<option ". (($guardianInfo[$i]['relationship']=='guardian') ? 'selected' : "") .">Guardian</option>";
										echo <<<_END
												</select>
											</div>
										<div class="form-group col-sm-4">
											<label for="inputGStreet">Street</label>
											<input type="text" class="form-control" name="inputGStreet{$i}" id="inputGStreet{$i}" value = "{$guardianInfo[$i]["street1"]}" placeholder="12345 Sample Street" readonly>
										</div>
										<div class="form-group col-sm-2">
											<label for="inputGStreet2{$i}">Apt. or Lot #</label>
									<input type="text" class="form-control" name="inputGStreet2{$i}" id="inputGStreet2{$i}" value = "{$guardianInfo[$i]["street2"]}" placeholder="Sample Apt" readonly>
										</div>
										<div class="form-group col-sm-2">
											<label for="inputGCity{$i}">City</label>
								<input type="text" class="form-control" name="inputGCity{$i}" id="inputGCity{$i}" value = "{$guardianInfo[$i]["city"]}" placeholder="City" readonly>
										</div>
										<div class="form-group col-sm-2">
											<label for="inputGState{$i}">State</label>
											<select class="form-control" name="inputGState{$i}" id="inputGState{$i}" disabled="disabled">
												<option selected></option>
												<!--- PULL STATES FROM DATABASE -->
_END;
													foreach($states as $state)
													{
														if($guardianInfo[$i]['state'] == $state['state'])
														{
															echo "<option selected>" . $state['state'] . "</option>";
														}
														else
														{
															echo "<option>" . $state['state'] . "</option>";
														}
													}
										echo <<<_END
											</select>
										</div>
										<div class="form-group col-sm-2">
											<label for="inputGZip{$i}">Zip Code</label>
											<input type="text" class="form-control" name="inputGZip{$i}" id="inputGZip{$i}" value = "{$guardianInfo[$i]["zip"]}" placeholder="Zip Code" readonly>
										</div>
										<div class="form-group col-sm-6">
											<label for="inputGCell{$i}">Cell Phone</label>
											<input type="text" class="form-control" name="inputGCell{$i}" id="inputGCell{$i}" value = "{$guardianInfo[$i]["cellPhone"]}" placeholder="(555)-555-5555" readonly>
										</div>
										<div class="form-group col-sm-6">
											<label for="inputGHomePhone{$i}">Work Phone</label>
											<input type="text" class="form-control" name="inputGHomePhone{$i}" id="inputGHomePhone{$i}" value = "{$guardianInfo[$i]["workPhone"]}" placeholder="(555)-555-5555" readonly>
										</div>
										<div class="form-group col-sm-12">
											<label for="inputGEmail{$i}">Email</label>
											<input type="email" class="form-control" name="inputGEmail{$i}" id="inputGEmail{$i}" value = "{$guardianInfo[$i]["email"]}" placeholder="Email" readonly>
										</div>
									</div>
_END;
									}
								}
							?>
							<button name="saveCadet" class="btn btn-success" type="submit" id="saveCadet">Save</button>
						</form>
					</div>
						
					<!-- MEDICAL SUB TABS -->
					
						<!-- MEDICATIONS TAB -->
						<div class="tab-pane container col-sm-12" id="medTab">
							<h2>Medications</h2>
							<form action="update-cadets.php" method = "POST" enctype="multipart/form-data">
							<form action="update-cadets.php" method = "POST" enctype="multipart/form-data" onsubmit=return confirm("Are you sure you want to save these changes?");>
								<input type="hidden" name="ssnKey" value="<?= $record['ssn'] ?>">
							<?php 
								$medInfo = $connection->runQuery("SELECT * FROM medications WHERE ssn = '$ssn'");
								$numMeds = count($medInfo);
								if($numMeds > 0) {
									for($i = 0; $i < $numMeds; $i ++) {
										$n = $i+1;
										echo <<<_END
										<legend>Medication {$n}</legend>
										<input type="hidden" name="inputMedID{$i}" value="{$medInfo[$i]['medID']}">
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label for="inputDrugName{$i}">Drug Name</label>
												<input type="text" class="form-control" name="inputDrugName{$i}" id="inputDrugName{$i}" value = {$medInfo[$i]['drugName']} placeholder="Drug Name" readonly>
											</div>
											<div class="form-group col-sm-6">
												<label for="inputDrugType{$i}">Type</label>
												<input type="text" class="form-control" name="inputDrugType{$i}" id="inputDrugType{$i}" value = {$medInfo[$i]['type']} placeholder="Type" readonly>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-4">
												<label for="inputDrugDosage{$i}">Dosage</label>
												<input type="text" class="form-control" name="inputDrugDosage{$i}" id="inputDrugDosage{$i}" value = {$medInfo[$i]['dosage']} placeholder="Dosage" readonly>
											</div>
											<div class="form-group col-sm-4">
												<label for="inputDrugFrequency{$i}">Frequency</label>
												<input type="text" class="form-control" name="inputDrugFrequency{$i}" id="inputDrugFrequency{$i}" value = {$medInfo[$i]['frequency']} placeholder="Frequency" readonly>
											</div>
											<div class="form-group col-sm-4">
												<label for="inputTakenWhen{$i}">Taken When</label>
												<input type="text" class="form-control" id="inputTakenWhen{$i}" value = {$medInfo[$i]['takenWhen']} placeholder="Taken When" readonly>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label for="inputStartDate{$i}">Start Date</label>
												<input type="date" class="form-control" id="inputStartDate{$i}" value = {$medInfo[$i]['startDate']} readonly>
											</div>
											<div class="form-group col-sm-6">
												<label for="inputEndDate{$i}">End Date</label>
												<input type="date" class="form-control" id="inputEndDate{$i}" value = {$medInfo[$i]['endDate']} readonly>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-12">
												<label for="inputDrugDosage{$i}">Notes</label>
												<textarea class="form-control" id="inputDrugDosage{$i}" placeholder="Notes" rows="3" readonly>{$medInfo[$i]['notes']}</textarea>
											</div>
										</div>
_END;
									}
								}
								?>
								<button name="saveCadet" class="btn btn-success" type="submit" id="saveCadet">Save</button>
							</form>
						</div>
						
						<!-- ALLERGIES TAB -->
						<div class="tab-pane container col-sm-12" id="allerTab">
							<h2>Allergies</h2>
							<form action="update-cadets.php" method = "POST" enctype="multipart/form-data">
							<form action="update-cadets.php" method = "POST" enctype="multipart/form-data" onsubmit=return confirm("Are you sure you want to save these changes?");>
								<input type="hidden" name="ssnKey" value="<?= $record['ssn'] ?>">
							<?php 
								$allerInfo = $connection->runQuery("SELECT * FROM allergies WHERE ssn = '$ssn'");
								$numAller = count($allerInfo);
								if($numAller > 0) {
									for($i = 0; $i < $numAller; $i ++) {
										$n = $i+1;
										echo <<<_END
										<legend>Allergy {$n}</legend>
										<input type="hidden" name="inputAllergyID{$i}" value="{$allerInfo[$i]['allerID']}">
										<div class="form-row">
											<div class="form-group col-sm-12">
												<label for="inputAllergyType{$i}">Allergy Type</label>
												<input type="text" class="form-control" name="inputAllergyType{$i}" id="inputAllergyType{$i}" value = {$allerInfo[$i]['type']} placeholder="Allergy Type" readonly>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-12">
												<label for="inputAllergyNotes{$i}">Notes</label>
												<textarea class="form-control" name="inputAllergyNotes{$i}" id="inputAllergyNotes{$i}" placeholder="Notes" rows="3" readonly>{$allerInfo[$i]['notes']}</textarea>
											</div>
										</div>
_END;
									}
								}
								?>
								<button name="saveCadet" class="btn btn-success" type="submit" id="saveCadet">Save</button>
							</form>
						</div>
						
						<!-- IMMUNIZATIONS TAB -->
						<div class="tab-pane container col-sm-12" id="immTab">
							<h2>Immunizations</h2>
							<form action="update-cadets.php" method = "POST" enctype="multipart/form-data">
							<form action="update-cadets.php" method = "POST" enctype="multipart/form-data" onsubmit=return confirm("Are you sure you want to save these changes?");>
								<input type="hidden" name="ssnKey" value="<?= $record['ssn'] ?>">
							<?php 
								$immInfo = $connection->runQuery("SELECT * FROM immunizations WHERE ssn = '$ssn'");
								$numImm = count($immInfo);
								if($numImm > 0) {
									for($i = 0; $i < $numImm; $i ++) {
										$n = $i+1;
										echo <<<_END
										<legend>Immunization {$n}</legend>
										<input type="hidden" name="inputImmID{$i}" value="{$immInfo[$i]['immID']}">
										<div class="form-row">
											<div class="form-group col-sm-4">
												<label for="inputImmDate{$i}">Date</label>
												<input type="date" class="form-control" name="inputImmDate{$i}" id="inputImmDate{$i}" value = {$immInfo[$i]['date']} readonly>
											</div>
											<div class="form-group col-sm-4">
												<label for="inputImmType{$i}">Type</label>
												<input type="text" class="form-control" name="inputImmType{$i}" id="inputImmType{$i}" value = {$immInfo[$i]['type']} placeholder="Type" readonly>
											</div>
											<div class="form-group col-sm-4">
												<label for="inputImmValid{$i}">Valid Until</label>
												<input type="date" class="form-control" name="inputImmValid{$i}" id="inputImmValid{$i}" value = {$immInfo[$i]['validUntil']} placeholder="Valid Until" readonly>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group">
												<label for="inputImmNotes{$i}">Notes</label>
												<textarea class="form-control" name="inputImmNotes{$i}" id="inputImmNotes{$i}" placeholder="Immunization Notes" rows="3" readonly>{$immInfo[$i]['notes']}</textarea>
											</div>
										</div>
_END;
									}
								}
								?>
								<button name="saveCadet" class="btn btn-success" type="submit" id="saveCadet">Save</button>
							</form>
						</div>
						
						<!-- SUBSTANCE ABUSE TAB -->
						<div class="tab-pane container col-sm-12" id="abuseTab">
							<h2>Substance Abuse</h2>
							<!-- backend- make form for each entry for this cadet -->
							<form action="update-cadets.php" method = "POST" enctype="multipart/form-data">
							<form action="update-cadets.php" method = "POST" enctype="multipart/form-data" onsubmit=return confirm("Are you sure you want to save these changes?");>
								<input type="hidden" name="ssnKey" value="<?= $record['ssn'] ?>">
							<?php 
								$subInfo = $connection->runQuery("SELECT * FROM substanceabuse WHERE ssn = '$ssn'");
								$numSub = count($subInfo);
								if($numSub > 0) {
									for($i = 0; $i < $numSub; $i ++) {
										$n = $i+1;
										echo <<<_END
										<legend>Substance Abuse {$n}</legend>
										<input type="hidden" name="inputSubID{$i}" value="{$subInfo[$i]['subID']}">
										<div class="form-row">
											<div class="form-group col-sm-4">
												<label for="inputAbuseDate{$i}">Test Date</label>
												<input type="date" class="form-control" name="inputAbuseDate{$i}" id="inputAbuseDate{$i}" value = {$subInfo[$i]['testDate']} placeholder="Test Date" readonly>
											</div>
											<div class="form-group col-sm-4">
												<label for="inputAbuseResults{$i}">Results</label>
												<input type="text" class="form-control" name="inputAbuseResults{$i}" id="inputAbuseResults{$i}" value = {$subInfo[$i]['results']} placeholder="Results" readonly>
											</div>
											<div class="form-group col-sm-4">
												<label for="inputAbuseName{$i}">Drug Name</label>
												<input type="text" class="form-control" name="inputAbuseName{$i}" id="inputAbuseName{$i}" value = {$subInfo[$i]['drugName']} placeholder="Drug Name" readonly>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group">
												<label for="inputAbuseNotes{$i}">Notes</label>
												<textarea class="form-control" name="inputAbuseNotes{$i}" id="inputAbuseNotes{$i}" placeholder="Substance Abuse Notes" rows="3" readonly>{$subInfo[$i]['notes']}</textarea>
											</div>
										</div>
_END;
									}
								}
								?>
								<button name="saveCadet" class="btn btn-success" type="submit" id="saveCadet">Save</button>
							</form>
						</div>
					
					<!-- MISCELLANEOUS INFORMATION TAB -->
					
					<div class="tab-pane col-sm-12 container" id="miscTab">
						<form action="update-cadets.php" method = "POST" enctype="multipart/form-data">
						<form action="update-cadets.php" method = "POST" enctype="multipart/form-data" onsubmit=return confirm("Are you sure you want to save these changes?");>
							<input type="hidden" name="ssnKey" value="<?= $record['ssn'] ?>">
							<div class="form-row">
								<legend>Family Income</legend>
								<div class="form-group col-sm-6">
									<label for="inputHousePeople">Persons in Household</label>
									<input type="text" class="form-control" name="inputHousePeople" id="inputHousePeople" value = "<?= $record["personsInHouse"]?>" placeholder="Persons in Household" readonly>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputIncome">Total Annual Income</label>
									<input type="text" class="form-control" name="inputIncome" id="inputIncome" value = "<?= $record["houseIncome"]?>" placeholder="Total Annual Income" readonly>
									<br>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputGED">Do you have a GED?</label>
									<select class="form-control" name="inputGED" id="inputGED" disabled="disabled">
										<option></option>
										<option <?php if($record['ged']) echo 'selected';?>>Yes</option>
										<option <?php if(!$record['ged']) echo 'selected';?>>No</option>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputLastGrade">Last Grade Completed</label>
									<input type="text" class="form-control" name="inputLastGrade" id="inputLastGrade" value = "<?= $record["gradeCompleted"]?>" placeholder="Last Grade Completed" readonly>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputVolunteer">Did you volunteer for this program?</label>
									<select class="form-control" name="inputVolunteer" id="inputVolunteer" disabled="disabled">
										<option></option>
										<option <?php if($record['volunteer']) echo 'selected';?>>Yes</option>
										<option <?php if(!$record['volunteer']) echo 'selected';?>>No</option>
									</select>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputWithdraw">Month and Year of Withdrawing from School</label>
									<input type="date" class="form-control" name="inputWithdraw" id="inputWithdraw" value = "<?= $record["schoolWithdrawDate"]?>" placeholder="Month and Year of Withdrawing from School" readonly>
								</div>
								<legend>Are you unemployed or under-employed?</legend>
								<div class="form-check form-check-inline col-sm-6">
                                                                        <?php
                                                                            $employCheck="";
                                                                            if($record['unemployed'])
                                                                            {
                                                                                $employCheck="checked";
                                                                            }
                                                                        ?>
									<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inputUnemployed" value="option1" disabled="disabled" <?=$employCheck?>>
									<label class="form-check-label" for="inputUnemployed">Unemployed</label>
								</div>
								<div class="form-check form-check-inline col-sm-6">
                                                                        <?php
                                                                            $employCheck="";
                                                                            if($record['underemployed'])
                                                                            {
                                                                                $employCheck="checked";
                                                                            }
                                                                        ?>
									<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inputUnder" value="option2" disabled="disabled" <?=$employCheck?>>
									<label class="form-check-label" for="inputUnder">Under-employed</label>
								</div>
								<div class="form-group col-sm-12">
									<br>
									<label for="inputJob">If you are under-employed, what is your place of employment?</label>
									<input type="text" class="form-control" name="inputJob" id="inputJob" value = "<?= $record["workplace"]?>" placeholder="Place of Employment" readonly>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputWage">If you are under-employed, what is your hourly wage?</label>
									<input type="text" class="form-control" name="inputWage" id="inputWage" value = "<?= $record["wage"]?>" placeholder="Hourly Wage" readonly>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputHours">If you are under-employed, how many hours a week do you work?</label>
									<input type="text" class="form-control" name="inputHours" id="inputHours" value = "<?= $record["hoursWorking"]?>" placeholder="Hours per Week" readonly>
								</div>
								<legend>List two personal accomplishments</legend>
								<div class="form-group col-sm-12">
									<label for="inputFirst">1.</label>
									<input type="text" class="form-control" name="inputFirst" id="inputFirst" value = "<?= $record["accomplish1"]?>" placeholder="Accomplishment" readonly>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputSecond">2.</label>
									<input type="text" class="form-control" name="inputSecond" id="inputSecond" value = "<?= $record["accomplish2"]?>" placeholder="Accomplishment" readonly>
								</div>
								<legend>Recommendation (if applicable)</legend>
								<div class="form-group col-sm-12">
									<label for="inputRecommender">Recommender</label>
									<input type="text" class="form-control" name="inputRecommender" id="inputRecommender" value = "<?= $record["recBy"]?>" placeholder="Recommender" readonly>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputRecommenderPhone">Telephone Number</label>
									<input type="text" class="form-control" name="inputRecommenderPhone" id="inputRecommenderPhone" value = "<?= $record["recNum"]?>" placeholder="(555)-555-5555" readonly>
								</div>
							</div>
							<button name="saveCadet" class="btn btn-success" type="submit" id="saveCadet">Save</button>
						</form>
					</div>
					
					<!-- end of tabs -->
				</div>

			<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>