<!DOCTYPE html>
<?php
	include_once "basicPage.php";
    require_once 'dbcontroller.php';
	basicPage("Applcant View");

    $ssn = $_POST['ssn'];
    $connection = new DBController();
    $record = $connection->runQuery("SELECT * FROM cadets WHERE ssn = '$ssn'")[0];
    $race = preg_split("/;/", $record["race"]);
    $raceCheck = "checked";
?>

	<script>

        	function changeView()
		        {
		    		document.getElementById('editCadet').setAttribute('style','display:none');
		    		document.getElementById('viewCadet').removeAttribute('style','display:none');
		    		document.getElementById('inputCommMethod').removeAttribute('disabled');
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
		    		$('[id^=inputPhoneNotes]').removeAttr('readonly');
		    		document.getElementById('inputAge').removeAttribute('readonly');
		    		document.getElementById('inputBirthday').removeAttribute('readonly');
		    		document.getElementById('inputGender').removeAttribute('disabled');
		    		document.getElementById('inputEmail').removeAttribute('readonly');
		    		document.getElementById('inputAdmission').removeAttribute('readonly');
		    		document.getElementById('inputLocation').removeAttribute('disabled');
		    		document.getElementById('inputGAResident').removeAttribute('disabled');
		    		document.getElementById('inputMailStreet').removeAttribute('readonly');
		    		document.getElementById('inputStreet2').removeAttribute('readonly');
		    		document.getElementById('inputMailCity').removeAttribute('readonly');
		    		document.getElementById('inputMailState').removeAttribute('readonly');
		    		document.getElementById('inputMailZip').removeAttribute('readonly');
		    		document.getElementById('inputPhysicalStreet').removeAttribute('readonly');
		    		document.getElementById('inputPhysicalStreet2').removeAttribute('readonly');
		    		document.getElementById('inputPhysicalCity').removeAttribute('readonly');
		    		document.getElementById('inputPhysicalState').removeAttribute('readonly');
		    		document.getElementById('inputPhysicalZip').removeAttribute('readonly');
		    		document.getElementById('inputGFirstName').removeAttribute('readonly');
		    		document.getElementById('inputGMiddleName').removeAttribute('readonly');
		    		document.getElementById('inputGLastName').removeAttribute('readonly');
		    		document.getElementById('inputRelationship').removeAttribute('disabled');
		    		document.getElementById('inputGuardianStreet').removeAttribute('readonly');
		    		document.getElementById('inputGuardianStreet2').removeAttribute('readonly');
		    		document.getElementById('inputGuardianCity').removeAttribute('readonly');
		    		document.getElementById('inputGuardianState').removeAttribute('disabled');
		    		document.getElementById('inputGuardianZip').removeAttribute('readonly');
		    		document.getElementById('inputGuardianCell').removeAttribute('readonly');
		    		document.getElementById('inputGuardianHomePhone').removeAttribute('readonly');
		    		document.getElementById('inputGuardianEmail').removeAttribute('readonly');
		    		document.getElementById('inputDrugName').removeAttribute('readonly');
		    		document.getElementById('inputDrugType').removeAttribute('readonly');
		    		document.getElementById('inputDrugDosage').removeAttribute('readonly');
		    		document.getElementById('inputDrugFrequency').removeAttribute('readonly');
		    		document.getElementById('inputTakenWhen').removeAttribute('readonly');
		    		document.getElementById('inputStartDate').removeAttribute('readonly');
		    		document.getElementById('inputEndDate').removeAttribute('readonly');
		    		document.getElementById('inputDrugDosage').removeAttribute('readonly');
		    		document.getElementById('inputAllergyType').removeAttribute('readonly');
		    		document.getElementById('inputAllergyNotes').removeAttribute('readonly');
		    		document.getElementById('inputImmDate').removeAttribute('readonly');
		    		document.getElementById('inputUnemployed').removeAttribute('disabled');
		    		document.getElementById('inputUnder').removeAttribute('disabled');
		    		document.getElementById('inputImmDate').removeAttribute('readonly');
					document.getElementById('inputImmType').removeAttribute('readonly');
					document.getElementById('inputImmValid').removeAttribute('readonly');
					document.getElementById('inputImmNotes').removeAttribute('readonly');
					document.getElementById('inputAbuseDate').removeAttribute('readonly');
					document.getElementById('inputAbuseResults').removeAttribute('readonly');
					document.getElementById('inputAbuseName').removeAttribute('readonly');
					document.getElementById('inputAbuseNotes').removeAttribute('readonly');
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
		    		document.getElementById('editCadet').removeAttribute('style','display:none');
		    		document.getElementById('viewCadet').setAttribute('style','display:none');
		    		document.getElementById('inputCommMethod').setAttribute('disabled', 'true');
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
		    		$('[id^=inputPhoneNotes]').attr('readonly', 'true');
		    		document.getElementById('inputAge').setAttribute('readonly', 'true');
		    		document.getElementById('inputBirthday').setAttribute('readonly', 'true');
		    		document.getElementById('inputGender').setAttribute('disabled', 'true');
		    		document.getElementById('inputEmail').setAttribute('readonly', 'true');
		    		document.getElementById('inputAdmission').setAttribute('readonly', 'true');
		    		document.getElementById('inputLocation').setAttribute('disabled', 'true');
		    		document.getElementById('inputGAResident').setAttribute('disabled', 'true');
		    		document.getElementById('inputMailStreet').setAttribute('readonly', 'true');
		    		document.getElementById('inputStreet2').setAttribute('readonly', 'true');
		    		document.getElementById('inputMailCity').setAttribute('readonly', 'true');
		    		document.getElementById('inputMailState').setAttribute('readonly', 'true');
		    		document.getElementById('inputMailZip').setAttribute('readonly', 'true');
		    		document.getElementById('inputPhysicalStreet').setAttribute('readonly', 'true');
		    		document.getElementById('inputPhysicalStreet2').setAttribute('readonly', 'true');
		    		document.getElementById('inputPhysicalCity').setAttribute('readonly', 'true');
		    		document.getElementById('inputPhysicalState').setAttribute('readonly', 'true');
		    		document.getElementById('inputPhysicalZip').setAttribute('readonly', 'true');
		    		document.getElementById('inputGFirstName').setAttribute('readonly', 'true');
		    		document.getElementById('inputGMiddleName').setAttribute('readonly', 'true');
		    		document.getElementById('inputGLastName').setAttribute('readonly', 'true');
		    		document.getElementById('inputRelationship').setAttribute('disabled', 'true');
		    		document.getElementById('inputGuardianStreet').setAttribute('readonly', 'true');
		    		document.getElementById('inputGuardianStreet2').setAttribute('readonly', 'true');
		    		document.getElementById('inputGuardianCity').setAttribute('readonly', 'true');
		    		document.getElementById('inputGuardianState').setAttribute('disabled', 'true');
		    		document.getElementById('inputGuardianZip').setAttribute('readonly', 'true');
		    		document.getElementById('inputGuardianCell').setAttribute('readonly', 'true');
		    		document.getElementById('inputGuardianHomePhone').setAttribute('readonly', 'true');
		    		document.getElementById('inputGuardianEmail').setAttribute('readonly', 'true');
		    		document.getElementById('inputDrugName').setAttribute('readonly', 'true');
		    		document.getElementById('inputDrugType').setAttribute('readonly', 'true');
		    		document.getElementById('inputDrugDosage').setAttribute('readonly', 'true');
		    		document.getElementById('inputDrugFrequency').setAttribute('readonly', 'true');
		    		document.getElementById('inputTakenWhen').setAttribute('readonly', 'true');
		    		document.getElementById('inputStartDate').setAttribute('readonly', 'true');
		    		document.getElementById('inputEndDate').setAttribute('readonly', 'true');
		    		document.getElementById('inputDrugDosage').setAttribute('readonly', 'true');
		    		document.getElementById('inputAllergyType').setAttribute('readonly', 'true');
		    		document.getElementById('inputAllergyNotes').setAttribute('readonly', 'true');
		    		document.getElementById('inputUnemployed').setAttribute('disabled', 'true');
		    		document.getElementById('inputUnder').setAttribute('disabled', 'true');
		    		document.getElementById('inputImmDate').setAttribute('readonly', 'true');
					document.getElementById('inputImmType').setAttribute('readonly', 'true');
					document.getElementById('inputImmValid').setAttribute('readonly', 'true');
					document.getElementById('inputImmNotes').setAttribute('readonly', 'true');
					document.getElementById('inputAbuseDate').setAttribute('readonly', 'true');
					document.getElementById('inputAbuseResults').setAttribute('readonly', 'true');
					document.getElementById('inputAbuseName').setAttribute('readonly', 'true');
					document.getElementById('inputAbuseNotes').setAttribute('readonly', 'true');
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
				<!-- buttons -->
				<form action='acceptCadet.php' method = "POST">
					<input type='hidden' name='ssnAccept' value='$ssn'></input>
					<button name='acceptCadet' class="btn btn-danger" value="submit" id="acceptCadet">Accept</button>
				</form>
				<button class="btn btn-danger" value="submit" id="editCadet" onclick=changeView()>Edit</button>
				<button class="btn btn-warning" value="submit" id="viewCadet" style="display: none;" onclick=changeEdit()>View</button>

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
				<li class="nav-item"><a data-toggle="tab" href="#miscTab">Misc.</a></li>
				</ul>
				<br>
				<div class="tab-content">

					<!-- BASIC INFORMATION TAB -->

					<div class="tab-pane container col-sm-12 active" id="basicTab">
						<form>
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
                                                                        <input type="text" class="form-control" id="inputFirstName" value = "<?= $record["fName"]?>" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputMiddleName">Middle Name</label>
									<input type="text" class="form-control" id="inputMiddleName" value = "<?= $record["mName"]?>" placeholder="Middle Name" readonly>
								</div>
								<div class="form-group col-sm-4">
									<label for="inputLastName">Last Name</label>
									<input type="text" class="form-control" id="inputLastName" value = "<?= $record["lName"]?>"placeholder="Last Name" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputGenQual">Gen. Qualifier</label>
									<select class="form-control" id="inputGenQual" disabled="disabled">
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
									<input type="text" class="form-control" id="inputHair" value = "<?= $record["hairColor"]?>" placeholder="Hair Color" readonly>
								</div>
								<div class="form-group col-sm-3">
									<label for="inputEye">Eye Color</label>
									<input type="text" class="form-control" id="inputEye" value = "<?= $record["eyeColor"]?>" placeholder="Eye Color" readonly>
								</div>
								<div class="form-group col-sm-3">
									<label for="inputHeight">Height</label>
									<input type="text" class="form-control" id="inputHeight" value = "<?= $record["height"]?>" placeholder="Height" readonly>
								</div>
								<div class="form-group col-sm-3">
									<label for="inputWeight">Weight</label>
									<input type="text" class="form-control" id="inputWeight" value = "<?= $record["weight"]?>" placeholder="Weight" readonly>
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
									<input class="form-check-input" type="checkbox" id="raceWhite" disabled="disabled" <?=$raceCheck?>>
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
									<input class="form-check-input" type="checkbox" id="raceBlack" disabled="disabled" <?=$raceCheck?>>
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
									<input class="form-check-input" type="checkbox" id="raceAmerican" disabled="disabled" <?=$raceCheck?>>
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
									<input class="form-check-input" type="checkbox" id="raceAsian" value="option1" disabled="disabled" <?=$raceCheck?>>
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
									<input class="form-check-input" type="checkbox" id="racePacific" value="option1" disabled="disabled" <?=$raceCheck?>>
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
									<input class="form-check-input" type="checkbox" id="raceMiddleEast" value="option1" disabled="disabled" <?=$raceCheck?>>
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
									<input class="form-check-input" type="checkbox" id="raceOther" value="option1" disabled="disabled" <?=$raceCheck?>>
									<label class="form-check-label" for="raceOther">Other</label>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputHispanic">Hispanic/Latino</label>
									<select class="form-control" id="inputHispanic" disabled="disabled">
										<option <?php if($record['isHispanic']) echo 'selected';?>>Yes</option>
										<option <?php if(!$record['isHispanic']) echo 'selected';?>>No</option>
									</select>
									<br>
								</div>

								<div class="form-group col-sm-4">
									<label for="inputAge">Age</label>
									<input type="text" class="form-control" id="inputAge" value = "<?= $record["age"]?>" placeholder="Age" readonly>
								</div>
								<div class="form-group col-sm-4">
									<label for="inputBirthday">Date of Birth</label>
									<input type="date" class="form-control" id="inputBirthday" value = "<?= $record["birthday"]?>" placeholder="Birthday" onblur="calcAge()" readonly>
								</div>
								<div class="form-group col-sm-4">
									<label for="inputGender">Gender</label>
									<select class="form-control" id="inputGender" disabled="disabled">
										<option></option>
										<option <?php if($record['gender']=='M') echo 'selected';?>>Male</option>
										<option <?php if($record['gender']=='F') echo 'selected';?>>Female</option>
										<option <?php if($record['gender']=='P') echo 'selected';?>>Prefer Not to Answer</option>
									</select>
								</div>
								<div class="form-row col-sm-12">
								<?php
									$phoneInfo = $connection->runQuery("SELECT * FROM phonenumbers WHERE ssn = '$ssn'");
									$numPhones = count($phoneInfo);
									for($i = 0; $i < $numPhones; $i ++) {
										echo '<div class="col-sm-6">';
										echo '<div class="col-sm-6"><label for="inputPhone'. $i .'">Phone '. ($i+1) .'</label>';
										echo '<input type="text" class="form-control" id="inputPhone'. $i .'" value = "'. $phoneInfo[$i]['phoneNumber'] .','. $phoneInfo[$i]['ext'] .'" placeholder="(555)-555-5555" readonly></div>';
										echo '<div class="col-sm-6"><label for="inputPhoneNotes'. $i .'">Notes '. ($i+1) .'</label>';
										echo '<textarea class="form-control" id="inputPhoneNotes'. $i .'" value="'. $phoneInfo[$i]['notes'] .'" placeholder="Notes" rows="1" readonly></textarea></div>';
										echo '</div>';
									}
								?>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputEmail">Email</label>
									<input type="email" class="form-control" id="inputEmail" value = "<?= $record["email"]?>" placeholder="Email" readonly>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputAdmission">Admission Status</label>
									<input type="text" class="form-control" id="inputAdmission" value = "<?= $record["admissionStatus"]?>" placeholder="Admission Status" readonly>
								</div>
							</div>
						</form>
						<!-- file upload -->
						<form>
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
										$ssn = "259121234";
										if($db->numRows("SELECT filename, uploadDate FROM attachments WHERE ssn = $ssn"))
										{
											$results = $db->runQuery("SELECT filename, uploadDate FROM attachments WHERE ssn = $ssn");
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
                                                              <span class="custom-file-control"></span>
                                                        </label>
						</form>
					</div>

					<!-- LOCATION INFORMATION TAB -->

					<div class="tab-pane col-sm-12 container" id="locationTab">
						<form>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="inputLocation">Campus Location</label>
									<select class="form-control" id="inputLocation" disabled="disabled">
										<option selected></option>
										<option <?php if($record['campusLocation']=='Milledgeville') echo 'selected';?>>Milledgeville</option>
										<option <?php if($record['campusLocation']=='Fort Gordon') echo 'selected';?>>Fort Gordon</option>
										<option <?php if($record['campusLocation']=='Fort Stuart') echo 'selected';?>>Fort Stuart</option>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputGAResident">GA Resident</label>
									<select class="form-control" id="inputGAResident" disabled="disabled">
										<option></option>
										<option <?php if($record['gaResident']) echo 'selected';?>>Yes</option>
										<option <?php if($record['gaResident']) echo 'selected';?>>No</option>
									</select>
								</div>
								<legend>Mailing Address</legend>
								<div class="form-group col-sm-4">
									<label for="inputMailStreet">Street</label>
									<input type="text" class="form-control" id="inputMailStreet" value = "<?= $record["mStreet"]?>" placeholder="12345 Sample Street" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputStreet2">Apt. or Lot #</label>
									<input type="text" class="form-control" id="inputStreet2" value = "<?= $record["mStreet2"]?>" placeholder="12A" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputMailCity">City</label>
									<input type="text" class="form-control" id="inputMailCity" value = "<?= $record["mCity"]?>" placeholder="City" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputMailState">State</label>
									<select class="form-control" id="inputMailState" disabled="disabled">
										<option selected></option>
										<!--- PULL STATES FROM DATABASE -->
                                                                                <?php
                                                                                    $states = $connection->runQuery("SELECT DISTINCT state FROM states");
                                                                                    foreach($states as $state)
                                                                                    {
                                                                                        if($record['mState'] == $state)
                                                                                        {
                                                                                            echo "<option selected>" . $state . "</option>";
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                            echo "<option>" . $state . "</option>";
                                                                                        }
                                                                                    }
                                                                                ?>
									</select>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputMailZip">Zip Code</label>
									<input type="text" class="form-control" id="inputMailZip" value = "<?= $record["mZip"]?>" placeholder="Zip Code" readonly>
								</div>
								<legend>Physical Address</legend>
								<div class="form-group col-sm-4">
									<label for="inputPhysicalStreet">Street</label>
									<input type="text" class="form-control" id="inputPhysicalStreet" value = "<?= $record["pStreet"]?>" placeholder="12345 Sample Street" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputPhysicalStreet2">Apt. or Lot #</label>
									<input type="text" class="form-control" id="inputPhysicalStreet2" value = "<?= $record["pStreet2"]?>" placeholder="Apt 123" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputPhysicalCity">City</label>
									<input type="text" class="form-control" id="inputPhysicalCity" value = "<?= $record["pCity"]?>" placeholder="pCity" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputPhysicalState">State</label>
									<select class="form-control" id="inputPhysicalState" disabled="disabled">
										<option></option>
										<!--- PULL STATES FROM DATABASE -->
                                                                                <?php
                                                                                    foreach($states as $state)
                                                                                    {
                                                                                        if($record['pState'] == $state)
                                                                                        {
                                                                                            echo "<option selected>" . $state . "</option>";
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                            echo "<option>" . $state . "</option>";
                                                                                        }
                                                                                    }
                                                                                ?>
									</select>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputPhysicalZip">Zip Code</label>
									<input type="text" class="form-control" id="inputPhysicalZip" value = "<?= $record["pZip"]?>" placeholder="Zip Code" readonly>
								</div>
							</div>
						</form>
					</div>

					<!-- GUARDIAN INFORMATION TAB -->

					<div class="tab-pane col-sm-12 container" id="gTab">
						<form>
							<div class="form-row">
								<div class="form-group col-sm-3">
									<label for="inputGFirstname">First Name</label>
									<input type="text" class="form-control" id="inputGFirstName" value = "<?= $record["gFirstName"]?>" placeholder="First Name" readonly>
								</div>
								<div class="form-group col-sm-3">
									<label for="inputGMiddleName">Middle Name</label>
									<input type="text" class="form-control" id="inputGMiddleName" value = "<?= $record["gMiddleName"]?>" placeholder="Middle Name" readonly>
								</div>
								<div class="form-group col-sm-3">
									<label for="inputGLastName">Last Name</label>
									<input type="text" class="form-control" id="inputGLastName" value = "<?= $record["gLastName"]?>" placeholder="Last Name" readonly>
								</div>
								<div class="form-group col-sm-3">
									<label for="inputRelationship">Relationship</label>
									<select class="form-control" id="inputRelationship" disabled="disabled">
										<option></option>
										<option <?php if($record['gRelationship']=='father') echo 'selected';?>>Father</option>
										<option <?php if($record['gRelationship']=='mother') echo 'selected';?>>Mother</option>
										<option <?php if($record['gRelationship']=='stepfather') echo 'selected';?>>Stepfather</option>
										<option <?php if($record['gRelationship']=='stepmother') echo 'selected';?>>Stepmother</option>
										<option <?php if($record['gRelationship']=='guardian') echo 'selected';?>>Guardian</option>
									</select>
								</div>
								<div class="form-group col-sm-4">
									<label for="inputGuardianStreet">Street</label>
									<input type="text" class="form-control" id="inputGuardianStreet" value = "<?= $record["gStreet"]?>" placeholder="12345 Sample Street" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputGuardianStreet2">Apt. or Lot #</label>
									<input type="text" class="form-control" id="inputGuardianStreet2" value = "<?= $record["gStreet2"]?>" placeholder="12A" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputGuardianCity">City</label>
									<input type="text" class="form-control" id="inputGuardianCity" value = "<?= $record["gCity"]?>" placeholder="City" readonly>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputGuardianState">State</label>
									<select class="form-control" id="inputGuardianState" disabled="disabled">
										<option selected></option>
										<!--- PULL STATES FROM DATABASE -->
                                                                                <?php
                                                                                    foreach($states as $state)
                                                                                    {
                                                                                        if($record['gState'] == $state)
                                                                                        {
                                                                                            echo "<option selected>" . $state . "</option>";
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                            echo "<option>" . $state . "</option>";
                                                                                        }
                                                                                    }
                                                                                ?>
									</select>
								</div>
								<div class="form-group col-sm-2">
									<label for="inputGuardianZip">Zip Code</label>
									<input type="text" class="form-control" id="inputGuardianZip" value = "<?= $record["gZip"]?>" placeholder="Zip Code" readonly>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputGuardianCell">Cell Phone</label>
									<input type="text" class="form-control" id="inputGuardianCell" value = "<?= $record["gLastName"]?>" placeholder="(555)-555-5555" readonly>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputGuardianHomePhone">Work Phone</label>
									<input type="text" class="form-control" id="inputGuardianHomePhone" value = "<?= $record["gLastName"]?>" placeholder="(555)-555-5555" readonly>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputGuardianEmail">Email</label>
									<input type="email" class="form-control" id="inputGuardianEmail" value = "<?= $record["gEmail"]?>" placeholder="Email" readonly>
								</div>
							</div>
						</form>
					</div>

					<!-- MEDICAL SUB TABS -->

						<!-- MEDICATIONS TAB -->
						<div class="tab-pane container col-sm-12" id="medTab">
							<h2>Medications</h2>
							<!-- backend- make form for each entry for this cadet -->
							<form>
								<div class="form-row">
									<div class="form-group col-sm-6">
										<label for="inputDrugName">Drug Name</label>
										<input type="text" class="form-control" id="inputDrugName" placeholder="Drug Name" readonly>
									</div>
									<div class="form-group col-sm-6">
										<label for="inputDrugType">Type</label>
										<input type="text" class="form-control" id="inputDrugType" placeholder="Type" readonly>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-4">
										<label for="inputDrugDosage">Dosage</label>
										<input type="text" class="form-control" id="inputDrugDosage" placeholder="Dosage" readonly>
									</div>
									<div class="form-group col-sm-4">
										<label for="inputDrugFrequency">Frequency</label>
										<input type="text" class="form-control" id="inputDrugFrequency" placeholder="Frequency" readonly>
									</div>
									<div class="form-group col-sm-4">
										<label for="inputTakenWhen">Taken When</label>
										<input type="text" class="form-control" id="inputTakenWhen" placeholder="Taken When" readonly>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-6">
										<label for="inputStartDate">Start Date</label>
										<input type="date" class="form-control" id="inputStartDate" readonly>
									</div>
									<div class="form-group col-sm-6">
										<label for="inputEndDate">End Date</label>
										<input type="date" class="form-control" id="inputEndDate" readonly>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12">
										<label for="inputDrugDosage">Notes</label>
										<textarea class="form-control" id="inputDrugDosage" placeholder="Notes" rows="3" readonly></textarea>
									</div>
								</div>
							</form>
						</div>

						<!-- ALLERGIES TAB -->
						<div class="tab-pane container col-sm-12" id="allerTab">
							<h2>Allergies</h2>
							<!-- backend- make form for each entry for this cadet -->
							<form>
								<div class="form-row">
									<div class="form-group col-sm-12">
										<label for="inputAllergyTpye">Allergy Type</label>
										<input type="text" class="form-control" id="inputSSN" placeholder="Allergy Type" readonly>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12">
										<label for="inputAllergyNotes">Notes</label>
										<textarea class="form-control" id="inputAllergyNotes" placeholder="Notes" rows="3" readonly></textarea>
									</div>
								</div>
							</form>
						</div>

						<!-- IMMUNIZATIONS TAB -->
						<div class="tab-pane container col-sm-12" id="immTab">
							<h2>Immunizations</h2>
							<!-- backend- make form for each entry for this cadet -->
							<form>
								<div class="form-row">
									<div class="form-group col-sm-4">
										<label for="inputImmDate">Date</label>
										<input type="date" class="form-control" id="inputImmDate" readonly>
									</div>
									<div class="form-group col-sm-4">
										<label for="inputImmType">Type</label>
										<input type="text" class="form-control" id="inputImmType" placeholder="Type" readonly>
									</div>
									<div class="form-group col-sm-4">
										<label for="inputImmValid">Valid Until</label>
										<input type="text" class="form-control" id="inputImmValid" placeholder="Valid Until" readonly>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group">
										<label for="inputImmNotes">Notes</label>
										<textarea class="form-control" id="inputImmNotes" placeholder="Immunization Notes" rows="3" readonly></textarea>
									</div>
								</div>
							</form>
						</div>

						<!-- SUBSTANCE ABUSE TAB -->
						<div class="tab-pane container col-sm-12" id="abuseTab">
							<h2>Substance Abuse</h2>
							<!-- backend- make form for each entry for this cadet -->
							<form>
								<div class="form-row">
									<div class="form-group col-sm-4">
										<label for="inputAbuseDate">Test Date</label>
										<input type="date" class="form-control" id="inputAbuseDate" readonly>
									</div>
									<div class="form-group col-sm-4">
										<label for="inputAbuseResults">Results</label>
										<input type="text" class="form-control" id="inputAbuseResults" placeholder="Results" readonly>
									</div>
									<div class="form-group col-sm-4">
										<label for="inputAbuseName">Drug Name</label>
										<input type="text" class="form-control" id="inputAbuseName" placeholder="Drug Name" readonly>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group">
										<label for="inputAbuseNotes">Notes</label>
										<textarea class="form-control" id="inputAbuseNotes" placeholder="Substance Abuse Notes" rows="3" readonly></textarea>
									</div>
								</div>
							</form>
						</div>

					<!-- MISCELLANEOUS INFORMATION TAB -->

					<div class="tab-pane col-sm-12 container" id="miscTab">
						<form>
							<div class="form-row">
								<legend>Family Income</legend>
								<div class="form-group col-sm-6">
									<label for="inputHousePeople">Persons in Household</label>
									<input type="text" class="form-control" id="inputHousePeople" value = "<?= $record["personsInHouse"]?>" placeholder="Persons in Household" readonly>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputIncome">Total Annual Income</label>
									<input type="text" class="form-control" id="inputIncome" value = "<?= $record["houseIncome"]?>" placeholder="Total Annual Income" readonly>
									<br>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputGED">Do you have a GED?</label>
									<select class="form-control" id="inputGED" disabled="disabled">
										<option></option>
										<option <?php if($record['ged']) echo 'selected';?>>Yes</option>
										<option <?php if(!$record['ged']) echo 'selected';?>>No</option>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputLastGrade">Last Grade Completed</label>
									<input type="text" class="form-control" id="inputLastGrade" value = "<?= $record["gradeCompleted"]?>" placeholder="Last Grade Completed" readonly>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputVolunteer">Did you volunteer for this program?</label>
									<select class="form-control" id="inputVolunteer" disabled="disabled">
										<option></option>
										<option <?php if($record['volunteer']) echo 'selected';?>>Yes</option>
										<option <?php if($record['volunteer']) echo 'selected';?>>No</option>
									</select>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputWithdraw">Month and Year of Withdrawing from School</label>
									<input type="date" class="form-control" id="inputWithdraw" value = "<?= $record["schoolWithdrawlDate"]?>" placeholder="Month and Year of Withdrawing from School" readonly>
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
									<input type="text" class="form-control" id="inputJob" value = "<?= $record["workplace"]?>" placeholder="Place of Employment" readonly>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputWage">If you are under-employed, what is your hourly wage?</label>
									<input type="text" class="form-control" id="inputWage" value = "<?= $record["wage"]?>" placeholder="Hourly Wage" readonly>
								</div>
								<div class="form-group col-sm-6">
									<label for="inputHours">If you are under-employed, how many hours a week do you work?</label>
									<input type="text" class="form-control" id="inputHours" value = "<?= $record["hoursWorking"]?>" placeholder="Hours per Week" readonly>
								</div>
								<legend>List two personal accomplishments</legend>
								<div class="form-group col-sm-12">
									<label for="inputFirst">1.</label>
									<input type="text" class="form-control" id="inputFirst" value = "<?= $record["accomplish1"]?>" placeholder="Accomplishment" readonly>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputSecond">2.</label>
									<input type="text" class="form-control" id="inputSecond" value = "<?= $record["accomplish2"]?>" placeholder="Accomplishment" readonly>
								</div>
								<legend>Recommendation (if applicable)</legend>
								<div class="form-group col-sm-12">
									<label for="inputRecommender">Recommender</label>
									<input type="text" class="form-control" id="inputRecommender" value = "<?= $record["recBy"]?>" placeholder="Recommender" readonly>
								</div>
								<div class="form-group col-sm-12">
									<label for="inputRecommenderPhone">Telephone Number</label>
									<input type="text" class="form-control" id="inputRecommenderPhone" value = "<?= $record["recNum"]?>" placeholder="(555)-555-5555" readonly>
								</div>
							</div>
						</form>
					</div>

					<!-- end of tabs -->
				</div>
				<!-- hide and unhide this with js -->
				<button name="saveCadet" class="btn btn-success" type="submit" id="saveCadet">Save</button>
			<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>
