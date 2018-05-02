<?php
require_once 'phpFunctions.php'; 
require_once 'dbcontroller.php';
$connection = new DBController(); 

// SAVING CADET
//importfile(directory, buttonname, inputfilename, ssn, category)
if(isset($_POST['saveCadet']))
{
	// get and set correct ssn
    $key = $_POST['ssnKey']; 
    $category = $_POST['category']; 
	$connection->runQuery("UPDATE cadets SET ssn = '$key' WHERE ssn = '$key'");
	
	// save attachments
	if($category = "general") 
    { 
        echo "Hi";
        importFile("cadet","saveCadet","genAttachment", $key, "general");
    }
	
	if(isset($_POST['medAttachment']))
    { 
        importFile("cadet","saveCadet","medAttachment", $key, "medical");
    }
	
	if(isset($_POST['counselorAttachment']))
    { 
        importFile("cadet","saveCadet","counselorAttachment", $key, "counselor");
    }
	
	if(isset($_POST['recAttachment']))
    { 
        importFile("cadet","saveCadet","recAttachment", $key, "recruitment");
    }
	
	// save basic tab info
    if(isset($_POST['inputCommMethod']))
    {
        $preferredCommunication = filter_input(INPUT_POST, "inputCommMethod"); 
        $connection->runQuery("UPDATE cadets SET preferredComm = '$preferredCommunication' WHERE ssn = '$key'");
    }
	
	if(isset($_POST['inputCompany']))
    {
        $company = filter_input(INPUT_POST, "inputCompany"); 
        $connection->runQuery("UPDATE cadets SET company = '$company' WHERE ssn = '$key'");
    }

    
    if(isset($_POST['inputFirstName']))
    {
        $firstName = $_POST['inputFirstName']; 
        $connection->runQuery("UPDATE cadets SET fName = '$firstName' WHERE ssn = '$key'"); 
        
    }
    if(isset($_POST['inputMiddleName']))
    {
        $firstName = $_POST['inputMiddleName']; 
        $connection->runQuery("UPDATE cadets SET mName = '$firstName' WHERE ssn = '$key'"); 
        
    }
    if(isset($_POST['inputLastName']))
    {
        $firstName = $_POST['inputLastName']; 
        $connection->runQuery("UPDATE cadets SET lName = '$firstName' WHERE ssn = '$key'"); 
        
    }
    if(isset($_POST['inputGenQual']))
    {
        $firstName = $_POST['inputGenQual']; 
        $connection->runQuery("UPDATE cadets SET genQual = '$firstName' WHERE ssn = '$key'"); 
        
    }
    
    if(isset($_POST['inputHair']))
    {
        $hairColor = filter_input(INPUT_POST,"inputHair"); 
        $connection->runQuery("UPDATE cadets SET hairColor = '$firstName' WHERE ssn = '$key'"); 
    }
    
    if(isset($_POST['inputEye']))
    {
        $eyeColor = filter_input(INPUT_POST,"inputEye"); 
        $connection->runQuery("UPDATE cadets SET eyeColor = '$eyeColor' WHERE ssn = '$key'"); 
    }
    
    if(isset($_POST['inputWeight']))
    {
        $weight= filter_input(INPUT_POST,"inputWeight"); 
        $connection->runQuery("UPDATE cadets SET weight = '$weight' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputHeight']))
    {
        $height = filter_input(INPUT_POST, "inputHeight"); 
        $connection->runQuery("UPDATE cadets SET height = '$height' WHERE ssn = '$key'"); 
    }
     
    if(isset($_POST['inputGender']))
    {
        $gender = filter_input(INPUT_POST,"inputGender"); 
        $connection->runQuery("UPDATE cadets SET gender = '$gender' WHERE ssn = '$key'"); 
    }
	//phone nums
	if(isset($_POST['inputPhoneID0'])) { 
		$phoneInfo = $connection->runQuery("SELECT * FROM phonenumbers WHERE ssn = '$key'");
		$numPhones = count($phoneInfo);
		for($i = 0; $i < $numPhones; $i ++) {
			if(isset($_POST['inputPhoneID'.$i]))
			{
				$phone = filter_input(INPUT_POST, "inputPhone".$i);
				$ext = filter_input(INPUT_POST, "inputPhoneExt".$i);
				$notes = filter_input(INPUT_POST, "inputPhoneNotes".$i);
				$id = filter_input(INPUT_POST, "inputPhoneID".$i);
				$connection->runQuery("UPDATE phonenumbers SET phoneNumber = '$phone', ext = '$ext', notes = '$notes' WHERE phoneID = '$id'");
			} 
		}
	}
	
    if(isset($_POST['inputEmail']))
    {
        $email = filter_input(INPUT_POST,"inputEmail",FILTER_VALIDATE_EMAIL); 
        $connection->runQuery("UPDATE cadets SET email = '$email' WHERE ssn = '$key'");
    }
    
    if(isset($_POST["inputAdmission"]))
    {
        $admission = filter_input(INPUT_POST,"inputAdmission"); 
        $connection->runQuery("UPDATE cadets SET admissionStatus = '$admission' WHERE ssn = '$key'"); 
    }

    // location tab
    if(isset($_POST["inputGAResident"]))
    {
        $gaResident = filter_input(INPUT_POST, "inputGAResident"); 
        $connection->runQuery("UPDATE cadets set gaResident = '$gaResident' WHERE ssn = '$key'"); 
    }
    
    if (isset($_POST['inputMailStreet'])) {
        $mailStreet = filter_input(INPUT_POST, "inputMailStreet"); 
        $connection->runQuery("UPDATE cadets set mStreet = '$mailStreet' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputStreet2']))
    {
        $mailStreet2 = filter_input(INPUT_POST, "inputStreet2"); 
        $connection->runQuery("UPDATE cadets set mStreet2 = '$mailStreet2' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputMailStreet']))
    {
        $mailCity = filter_input(INPUT_POST, "inputMailStreet");
        $connection->runQuery("UPDATE cadets set mCity = '$mailCity' WHERE ssn = '$key'");
    }
    if(isset($_POST['inputMailState']))
    {
        $state = filter_input(INPUT_POST, "inputMailState"); 
        $connection->runQuery("UPDATE cadets set  mState = '$state' WHERE ssn='$key'"); 
    }
    if(isset($_POST['inputMailZip']))
    {
        $zipcode = filter_input(INPUT_POST, "inputMailZip"); 
        $connection->runQuery("UPDATE cadets set mZip = '$zipcode' WHERE ssn='$key'"); 
    }
    if(isset($_POST['inputPhysicalStreet']))
    {
        $pStreet = filter_input(INPUT_POST, "inputPhysicalStreet"); 
        $connection->runQuery("UPDATE cadets SET pStreet = '$pStreet' WHERE ssn = '$key'");    
    }
    if(isset($_POST['inputPhysicalStreet2']))
    {
        $pStreet = filter_input(INPUT_POST, "inputPhysicalStreet2"); 
        $connection->runQuery("UPDATE cadets SET pStreet2 = '$pStreet' WHERE ssn = '$key'");    
    }
    if(isset($_POST['inputPhysicalCity']))
    {
        $pCity = filter_input(INPUT_POST, "inputPhysicalCity"); 
        $connection->runQuery("UPDATE cadets SET pCity = '$pCity' WHERE ssn = '$key'");    
    }
    if(isset($_POST['inputPhysicalState']))
    {
        $state = filter_input(INPUT_POST, "inputPhysicalState"); 
        $connection->runQuery("UPDATE cadets SET pState = '$state' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputPhysicalZip']))
    {
        $pZipcode = filter_input(INPUT_POST, "inputPhysicalZip");
        $connection->runQuery("UPDATE cadets SET pZip = '$pZipcode' WHERE ssn = '$key'"); 
    }
	
	// guardians
	if(isset($_POST['inputGuardID0'])) { 
		$guardInfo = $connection->runQuery("SELECT * FROM guardians WHERE ssn = '$key'");
		$numGuards = count($guardInfo);
		for($i = 0; $i < $numGuards; $i ++) {
			if(isset($_POST['inputGuardID'.$i]))
			{
				$fName = filter_input(INPUT_POST, "inputGFirstName".$i);
				$mName = filter_input(INPUT_POST, "inputGMiddleName".$i);
				$lName = filter_input(INPUT_POST, "inputGLastName".$i);
				$relationship = filter_input(INPUT_POST, "inputGRelationship".$i);
				$street1 = filter_input(INPUT_POST, "inputGStreet".$i);
				$street2 = filter_input(INPUT_POST, "inputGStreet2".$i);
				$city = filter_input(INPUT_POST, "inputGCity".$i);
				$state = filter_input(INPUT_POST, "inputGState".$i);
				$zip = filter_input(INPUT_POST, "inputGZip".$i);
				$cellPhone = filter_input(INPUT_POST, "inputGCell".$i);
				$workPhone = filter_input(INPUT_POST, "inputGHomePhone".$i);
				$email = filter_input(INPUT_POST, "inputGEmail".$i);
				$id = filter_input(INPUT_POST, "inputGuardID".$i);
				$connection->runQuery("UPDATE guardians SET fName = '$fName', mName = '$mName', lName = 'lName', relationship = '$relationship', street1 = '$street1', street2 = '$street2', city = '$city', state = '$state', zip = '$zip', cellPhone = '$cellPhone', workPhone = '$workPhone', email = '$email' WHERE guardID = '$id'");
			} 
		}
	}
	
	// medications tab
    if(isset($_POST['inputMedID0'])) { 
		$medInfo = $connection->runQuery("SELECT * FROM medications WHERE ssn = '$key'");
		$numMeds = count($medInfo);
		for($i = 0; $i < $numMeds; $i ++) {
			if(isset($_POST['inputMedID'.$i]))
			{
				$drugName = filter_input(INPUT_POST, "inputDrugName".$i);
				$type = filter_input(INPUT_POST, "inputDrugType".$i);
				$dosage = filter_input(INPUT_POST, "inputDrugDosage".$i);
				$frequency = filter_input(INPUT_POST, "inputDrugFrequency".$i);
				$takenWhen = filter_input(INPUT_POST, "inputTakenWhen".$i);
				$startDate = filter_input(INPUT_POST, "inputStartDate".$i);
				$endDate = filter_input(INPUT_POST, "inputEndDate".$i);
				$notes = filter_input(INPUT_POST, "inputDrugNotes".$i);
				$id = filter_input(INPUT_POST, "inputMedID".$i);
				$connection->runQuery("UPDATE medications SET drugName = '$drugName', type = '$type', dosage = 'dosage', frequency = '$frequency', takenWhen = '$takenWhen', startDate = '$startDate', endDate = '$endDate', notes = '$notes' WHERE medID = '$id'");
			} 
		}
	}
	
	// allergies tab
    if(isset($_POST['inputAllergyID0'])) { 
		$allerInfo = $connection->runQuery("SELECT * FROM allergies WHERE ssn = '$key'");
		$numAller = count($allerInfo);
		for($i = 0; $i < $numAller; $i ++) {
			if(isset($_POST['inputAllerID'.$i]))
			{
				$type = filter_input(INPUT_POST, "inputAllergyType".$i);
				$notes = filter_input(INPUT_POST, "inputAllergyNotes".$i);
				$id = filter_input(INPUT_POST, "inputAllergyID".$i);
				$connection->runQuery("UPDATE allergies SET type = '$type', notes = '$notes' WHERE allerID = '$id'");
			} 
		}
	}
	
	// immunizations tab
    if(isset($_POST['inputImmID0'])) { 
		$immInfo = $connection->runQuery("SELECT * FROM immunizations WHERE ssn = '$key'");
		$numImm = count($immInfo);
		for($i = 0; $i < $numImm; $i ++) {
			if(isset($_POST['inputImmID'.$i]))
			{
				$date = filter_input(INPUT_POST, "inputImmDate".$i);
				$type = filter_input(INPUT_POST, "inputImmType".$i);
				$validUntil = filter_input(INPUT_POST, "inputImmValid".$i);
				$notes = filter_input(INPUT_POST, "inputImmNotes".$i);
				$id = filter_input(INPUT_POST, "inputImmID".$i);
				$connection->runQuery("UPDATE allergies SET date = '$date', type = '$type', validUntil = '$validUntil', notes = '$notes' WHERE immID = '$id'");
			} 
		}
	}
	
	// substance abuse tab
    if(isset($_POST['inputSubID0ID0'])) { 
		$subInfo = $connection->runQuery("SELECT * FROM substanceabuse WHERE ssn = '$key'");
		$numSub = count($subInfo);
		for($i = 0; $i < $numSub; $i ++) {
			if(isset($_POST['inputSubID'.$i]))
			{
				$testDate = filter_input(INPUT_POST, "inputAbuseDate".$i);
				$results = filter_input(INPUT_POST, "inputAbuseResults".$i);
				$drugName = filter_input(INPUT_POST, "inputAbuseName".$i);
				$notes = filter_input(INPUT_POST, "inputAbuseNotes".$i);
				$id = filter_input(INPUT_POST, "inputSubID".$i);
				$connection->runQuery("UPDATE substanceabuse SET testDate = '$testDate', results = '$results', drugName = '$drugName', notes = '$notes' WHERE subID = '$id'");
			} 
		}
	}
	
	// misc tab
	if(isset($_POST['inputHousePeople']))
    {
        $update = filter_input(INPUT_POST, "inputHousePeople");
        $connection->runQuery("UPDATE cadets SET personsInHouse = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputIncome']))
    {
        $update = filter_input(INPUT_POST, "inputIncome");
        $connection->runQuery("UPDATE cadets SET houseIncome = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputGED']))
    {
        $update = filter_input(INPUT_POST, "inputGED");
        $connection->runQuery("UPDATE cadets SET ged = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputLastGrade']))
    {
        $update = filter_input(INPUT_POST, "inputLastGrade");
        $connection->runQuery("UPDATE cadets SET gradeCompleted = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputVolunteer']))
    {
        $update = filter_input(INPUT_POST, "inputVolunteer");
        $connection->runQuery("UPDATE cadets SET volunteer = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputWithdraw']))
    {
        $update = filter_input(INPUT_POST, "inputWithdraw");
        $connection->runQuery("UPDATE cadets SET schoolWithdrawDate = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputUnemployed']))
    {
        $update = filter_input(INPUT_POST, "inputUnemployed");
        $connection->runQuery("UPDATE cadets SET unemployed = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputUnder']))
    {
        $update = filter_input(INPUT_POST, "inputUnder");
        $connection->runQuery("UPDATE cadets SET underemployed = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputJob']))
    {
        $update = filter_input(INPUT_POST, "inputJob");
        $connection->runQuery("UPDATE cadets SET workplace = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputWage']))
    {
        $update = filter_input(INPUT_POST, "inputWage");
        $connection->runQuery("UPDATE cadets SET wage = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputHours']))
    {
        $update = filter_input(INPUT_POST, "inputHours");
        $connection->runQuery("UPDATE cadets SET hoursWorking = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputRecommender']))
    {
        $update = filter_input(INPUT_POST, "inputRecommender");
        $connection->runQuery("UPDATE cadets SET recBy = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputRecommenderPhone']))
    {
        $update = filter_input(INPUT_POST, "inputRecommenderPhone");
        $connection->runQuery("UPDATE cadets SET recNum = '$update' WHERE ssn = '$key'"); 
    }

    header("refresh:2;url=allCadetView.php"); 
    
}


// SAVING APPLICANT
if(isset($_POST['saveApplicant']))
{
    // get and set correct ssn
    $key = $_POST['ssnKey']; 
	$connection->runQuery("UPDATE cadets SET ssn = '$key' WHERE ssn = '$key'");
	
	// save attachments
	if(isset($_POST['genAttachment']))
    { 
        importFile("cadet","saveCadet","genAttachment", $_POST['ssnKey'], "general");
    }
	
	if(isset($_POST['medAttachment']))
    { 
        importFile("cadet","saveCadet","medAttachment", $_POST['ssnKey'], "medical");
    }
	
	if(isset($_POST['counselorAttachment']))
    { 
        importFile("cadet","saveCadet","counselorAttachment", $_POST['ssnKey'], "counselor");
    }
	
	if(isset($_POST['recAttachment']))
    { 
        importFile("cadet","saveCadet","recAttachment", $_POST['ssnKey'], "recruitment");
    }
	
	// save basic tab info
    if(isset($_POST['inputCommMethod']))
    {
        $preferredCommunication = filter_input(INPUT_POST, "inputCommMethod"); 
        $connection->runQuery("UPDATE cadets SET preferredComm = '$preferredCommunication' WHERE ssn = '$key'");
    }
	
	if(isset($_POST['inputCompany']))
    {
        $company = filter_input(INPUT_POST, "inputCompany"); 
        $connection->runQuery("UPDATE cadets SET company = '$company' WHERE ssn = '$key'");
    }

    
    if(isset($_POST['inputFirstName']))
    {
        $firstName = $_POST['inputFirstName']; 
        $connection->runQuery("UPDATE cadets SET fName = '$firstName' WHERE ssn = '$key'"); 
        
    }
    if(isset($_POST['inputMiddleName']))
    {
        $firstName = $_POST['inputMiddleName']; 
        $connection->runQuery("UPDATE cadets SET mName = '$firstName' WHERE ssn = '$key'"); 
        
    }
    if(isset($_POST['inputLastName']))
    {
        $firstName = $_POST['inputLastName']; 
        $connection->runQuery("UPDATE cadets SET lName = '$firstName' WHERE ssn = '$key'"); 
        
    }
    if(isset($_POST['inputGenQual']))
    {
        $firstName = $_POST['inputGenQual']; 
        $connection->runQuery("UPDATE cadets SET genQual = '$firstName' WHERE ssn = '$key'"); 
        
    }
    
    if(isset($_POST['inputHair']))
    {
        $hairColor = filter_input(INPUT_POST,"inputHair"); 
        $connection->runQuery("UPDATE cadets SET hairColor = '$firstName' WHERE ssn = '$key'"); 
    }
    
    if(isset($_POST['inputEye']))
    {
        $eyeColor = filter_input(INPUT_POST,"inputEye"); 
        $connection->runQuery("UPDATE cadets SET eyeColor = '$eyeColor' WHERE ssn = '$key'"); 
    }
    
    if(isset($_POST['inputWeight']))
    {
        $weight= filter_input(INPUT_POST,"inputWeight"); 
        $connection->runQuery("UPDATE cadets SET weight = '$weight' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputHeight']))
    {
        $height = filter_input(INPUT_POST, "inputHeight"); 
        $connection->runQuery("UPDATE cadets SET height = '$height' WHERE ssn = '$key'"); 
    }
     
    if(isset($_POST['inputGender']))
    {
        $gender = filter_input(INPUT_POST,"inputGender"); 
        $connection->runQuery("UPDATE cadets SET gender = '$gender' WHERE ssn = '$key'"); 
    }
	//phone nums
	if(isset($_POST['inputPhoneID0'])) { 
		$phoneInfo = $connection->runQuery("SELECT * FROM phonenumbers WHERE ssn = '$key'");
		$numPhones = count($phoneInfo);
		for($i = 0; $i < $numPhones; $i ++) {
			if(isset($_POST['inputPhoneID'.$i]))
			{
				$phone = filter_input(INPUT_POST, "inputPhone".$i);
				$ext = filter_input(INPUT_POST, "inputPhoneExt".$i);
				$notes = filter_input(INPUT_POST, "inputPhoneNotes".$i);
				$id = filter_input(INPUT_POST, "inputPhoneID".$i);
				$connection->runQuery("UPDATE phonenumbers SET phoneNumber = '$phone', ext = '$ext', notes = '$notes' WHERE phoneID = '$id'");
			} 
		}
	}
	
    if(isset($_POST['inputEmail']))
    {
        $email = filter_input(INPUT_POST,"inputEmail",FILTER_VALIDATE_EMAIL); 
        $connection->runQuery("UPDATE cadets SET email = '$email' WHERE ssn = '$key'");
    }
    
    if(isset($_POST["inputAdmission"]))
    {
        $admission = filter_input(INPUT_POST,"inputAdmission"); 
        $connection->runQuery("UPDATE cadets SET admissionStatus = '$admission' WHERE ssn = '$key'"); 
    }

    // location tab
    if(isset($_POST["inputGAResident"]))
    {
        $gaResident = filter_input(INPUT_POST, "inputGAResident"); 
        $connection->runQuery("UPDATE cadets set gaResident = '$gaResident' WHERE ssn = '$key'"); 
    }
    
    if (isset($_POST['inputMailStreet'])) {
        $mailStreet = filter_input(INPUT_POST, "inputMailStreet"); 
        $connection->runQuery("UPDATE cadets set mStreet = '$mailStreet' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputStreet2']))
    {
        $mailStreet2 = filter_input(INPUT_POST, "inputStreet2"); 
        $connection->runQuery("UPDATE cadets set mStreet2 = '$mailStreet2' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputMailStreet']))
    {
        $mailCity = filter_input(INPUT_POST, "inputMailStreet");
        $connection->runQuery("UPDATE cadets set mCity = '$mailCity' WHERE ssn = '$key'");
    }
    if(isset($_POST['inputMailState']))
    {
        $state = filter_input(INPUT_POST, "inputMailState"); 
        $connection->runQuery("UPDATE cadets set  mState = '$state' WHERE ssn='$key'"); 
    }
    if(isset($_POST['inputMailZip']))
    {
        $zipcode = filter_input(INPUT_POST, "inputMailZip"); 
        $connection->runQuery("UPDATE cadets set mZip = '$zipcode' WHERE ssn='$key'"); 
    }
    if(isset($_POST['inputPhysicalStreet']))
    {
        $pStreet = filter_input(INPUT_POST, "inputPhysicalStreet"); 
        $connection->runQuery("UPDATE cadets SET pStreet = '$pStreet' WHERE ssn = '$key'");    
    }
    if(isset($_POST['inputPhysicalStreet2']))
    {
        $pStreet = filter_input(INPUT_POST, "inputPhysicalStreet2"); 
        $connection->runQuery("UPDATE cadets SET pStreet2 = '$pStreet' WHERE ssn = '$key'");    
    }
    if(isset($_POST['inputPhysicalCity']))
    {
        $pCity = filter_input(INPUT_POST, "inputPhysicalCity"); 
        $connection->runQuery("UPDATE cadets SET pCity = '$pCity' WHERE ssn = '$key'");    
    }
    if(isset($_POST['inputPhysicalState']))
    {
        $state = filter_input(INPUT_POST, "inputPhysicalState"); 
        $connection->runQuery("UPDATE cadets SET pState = '$state' WHERE ssn = '$key'"); 
    }
    if(isset($_POST['inputPhysicalZip']))
    {
        $pZipcode = filter_input(INPUT_POST, "inputPhysicalZip");
        $connection->runQuery("UPDATE cadets SET pZip = '$pZipcode' WHERE ssn = '$key'"); 
    }
	
	// guardians
	if(isset($_POST['inputGuardID0'])) { 
		$guardInfo = $connection->runQuery("SELECT * FROM guardians WHERE ssn = '$key'");
		$numGuards = count($guardInfo);
		for($i = 0; $i < $numGuards; $i ++) {
			if(isset($_POST['inputGuardID'.$i]))
			{
				$fName = filter_input(INPUT_POST, "inputGFirstName".$i);
				$mName = filter_input(INPUT_POST, "inputGMiddleName".$i);
				$lName = filter_input(INPUT_POST, "inputGLastName".$i);
				$relationship = filter_input(INPUT_POST, "inputGRelationship".$i);
				$street1 = filter_input(INPUT_POST, "inputGStreet".$i);
				$street2 = filter_input(INPUT_POST, "inputGStreet2".$i);
				$city = filter_input(INPUT_POST, "inputGCity".$i);
				$state = filter_input(INPUT_POST, "inputGState".$i);
				$zip = filter_input(INPUT_POST, "inputGZip".$i);
				$cellPhone = filter_input(INPUT_POST, "inputGCell".$i);
				$workPhone = filter_input(INPUT_POST, "inputGHomePhone".$i);
				$email = filter_input(INPUT_POST, "inputGEmail".$i);
				$id = filter_input(INPUT_POST, "inputGuardID".$i);
				$connection->runQuery("UPDATE guardians SET fName = '$fName', mName = '$mName', lName = 'lName', relationship = '$relationship', street1 = '$street1', street2 = '$street2', city = '$city', state = '$state', zip = '$zip', cellPhone = '$cellPhone', workPhone = '$workPhone', email = '$email' WHERE guardID = '$id'");
			} 
		}
	}
	
	// medications tab
    if(isset($_POST['inputMedID0'])) { 
		$medInfo = $connection->runQuery("SELECT * FROM medications WHERE ssn = '$key'");
		$numMeds = count($medInfo);
		for($i = 0; $i < $numMeds; $i ++) {
			if(isset($_POST['inputMedID'.$i]))
			{
				$drugName = filter_input(INPUT_POST, "inputDrugName".$i);
				$type = filter_input(INPUT_POST, "inputDrugType".$i);
				$dosage = filter_input(INPUT_POST, "inputDrugDosage".$i);
				$frequency = filter_input(INPUT_POST, "inputDrugFrequency".$i);
				$takenWhen = filter_input(INPUT_POST, "inputTakenWhen".$i);
				$startDate = filter_input(INPUT_POST, "inputStartDate".$i);
				$endDate = filter_input(INPUT_POST, "inputEndDate".$i);
				$notes = filter_input(INPUT_POST, "inputDrugNotes".$i);
				$id = filter_input(INPUT_POST, "inputMedID".$i);
				$connection->runQuery("UPDATE medications SET drugName = '$drugName', type = '$type', dosage = 'dosage', frequency = '$frequency', takenWhen = '$takenWhen', startDate = '$startDate', endDate = '$endDate', notes = '$notes' WHERE medID = '$id'");
			} 
		}
	}
	
	// allergies tab
    if(isset($_POST['inputAllergyID0'])) { 
		$allerInfo = $connection->runQuery("SELECT * FROM allergies WHERE ssn = '$key'");
		$numAller = count($allerInfo);
		for($i = 0; $i < $numAller; $i ++) {
			if(isset($_POST['inputAllerID'.$i]))
			{
				$type = filter_input(INPUT_POST, "inputAllergyType".$i);
				$notes = filter_input(INPUT_POST, "inputAllergyNotes".$i);
				$id = filter_input(INPUT_POST, "inputAllergyID".$i);
				$connection->runQuery("UPDATE allergies SET type = '$type', notes = '$notes' WHERE allerID = '$id'");
			} 
		}
	}
	
	// immunizations tab
    if(isset($_POST['inputImmID0'])) { 
		$immInfo = $connection->runQuery("SELECT * FROM immunizations WHERE ssn = '$key'");
		$numImm = count($immInfo);
		for($i = 0; $i < $numImm; $i ++) {
			if(isset($_POST['inputImmID'.$i]))
			{
				$date = filter_input(INPUT_POST, "inputImmDate".$i);
				$type = filter_input(INPUT_POST, "inputImmType".$i);
				$validUntil = filter_input(INPUT_POST, "inputImmValid".$i);
				$notes = filter_input(INPUT_POST, "inputImmNotes".$i);
				$id = filter_input(INPUT_POST, "inputImmID".$i);
				$connection->runQuery("UPDATE allergies SET date = '$date', type = '$type', validUntil = '$validUntil', notes = '$notes' WHERE immID = '$id'");
			} 
		}
	}
	
	// substance abuse tab
    if(isset($_POST['inputSubID0ID0'])) { 
		$subInfo = $connection->runQuery("SELECT * FROM substanceabuse WHERE ssn = '$key'");
		$numSub = count($subInfo);
		for($i = 0; $i < $numSub; $i ++) {
			if(isset($_POST['inputSubID'.$i]))
			{
				$testDate = filter_input(INPUT_POST, "inputAbuseDate".$i);
				$results = filter_input(INPUT_POST, "inputAbuseResults".$i);
				$drugName = filter_input(INPUT_POST, "inputAbuseName".$i);
				$notes = filter_input(INPUT_POST, "inputAbuseNotes".$i);
				$id = filter_input(INPUT_POST, "inputSubID".$i);
				$connection->runQuery("UPDATE substanceabuse SET testDate = '$testDate', results = '$results', drugName = '$drugName', notes = '$notes' WHERE subID = '$id'");
			} 
		}
	}
	
	// misc tab
	if(isset($_POST['inputHousePeople']))
    {
        $update = filter_input(INPUT_POST, "inputHousePeople");
        $connection->runQuery("UPDATE cadets SET personsInHouse = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputIncome']))
    {
        $update = filter_input(INPUT_POST, "inputIncome");
        $connection->runQuery("UPDATE cadets SET houseIncome = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputGED']))
    {
        $update = filter_input(INPUT_POST, "inputGED");
        $connection->runQuery("UPDATE cadets SET ged = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputLastGrade']))
    {
        $update = filter_input(INPUT_POST, "inputLastGrade");
        $connection->runQuery("UPDATE cadets SET gradeCompleted = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputVolunteer']))
    {
        $update = filter_input(INPUT_POST, "inputVolunteer");
        $connection->runQuery("UPDATE cadets SET volunteer = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputWithdraw']))
    {
        $update = filter_input(INPUT_POST, "inputWithdraw");
        $connection->runQuery("UPDATE cadets SET schoolWithdrawDate = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputUnemployed']))
    {
        $update = filter_input(INPUT_POST, "inputUnemployed");
        $connection->runQuery("UPDATE cadets SET unemployed = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputUnder']))
    {
        $update = filter_input(INPUT_POST, "inputUnder");
        $connection->runQuery("UPDATE cadets SET underemployed = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputJob']))
    {
        $update = filter_input(INPUT_POST, "inputJob");
        $connection->runQuery("UPDATE cadets SET workplace = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputWage']))
    {
        $update = filter_input(INPUT_POST, "inputWage");
        $connection->runQuery("UPDATE cadets SET wage = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputHours']))
    {
        $update = filter_input(INPUT_POST, "inputHours");
        $connection->runQuery("UPDATE cadets SET hoursWorking = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputRecommender']))
    {
        $update = filter_input(INPUT_POST, "inputRecommender");
        $connection->runQuery("UPDATE cadets SET recBy = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputRecommenderPhone']))
    {
        $update = filter_input(INPUT_POST, "inputRecommenderPhone");
        $connection->runQuery("UPDATE cadets SET recNum = '$update' WHERE ssn = '$key'"); 
    }
	
	if(isset($_POST['inputFirst']))
    {
        $update = filter_input(INPUT_POST, "inputFirst");
        $connection->runQuery("UPDATE cadets SET accomplish1 = '$update' WHERE ssn = '$key'"); 
    }
	if(isset($_POST['inputSecond']))
    {
        $update = filter_input(INPUT_POST, "inputSecond");
        $connection->runQuery("UPDATE cadets SET accomplish2 = '$update' WHERE ssn = '$key'"); 
    }

    header("refresh:2;url=allApplicantView.php"); 
    
}

// SAVING USER
if(isset($_POST['saveUser']))
{
    $email = filter_input(INPUT_POST, "email"); 
    
    if(isset($_POST["inputFirstName"]))
       {
           $fName = filter_input(INPUT_POST, "inputFirstName"); 
           $connection->runQuery("UPDATE users SET fName = '$fName' WHERE email = '$email'");  
       }
       
      if(isset($_POST["inputLastName"]))
       {
           $lName = filter_input(INPUT_POST, "inputLastName"); 
           $connection->runQuery("UPDATE users SET lName = '$lName' WHERE email = '$email'");  
       }
         
       if(isset($_POST["inputUsername"]))
       {
           $username = filter_input(INPUT_POST, "inputLastName"); 
           $connection->runQuery("UPDATE users SET username = '$username' WHERE email = '$email'");  
       }
          
       if(isset($_POST["inputPassword"]))
          {
              $password = filter_input(INPUT_POST, "inputPassword"); 
              $connection->runQuery("UPDATE users SET password = '$password' WHERE email = '$email'"); 
          }
          
}
?>