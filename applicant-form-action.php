<?php

/* 
 * @author Colton Thompson, Parker Ramsey, Evan Thomas
 * @purpose Submits a new application into the database 
 * Retrieves all information from $_POST array 
 * Date: 3/30/2018
 */
require_once 'dbcontroller.php';

/*
 * Connect to the Database 
 */
    $connection = new DBController();

	// get info for cadets table
    $ssn = filter_input(INPUT_POST, "inputSSN"); 
    $fName = filter_input(INPUT_POST, 'inputFirstName');
    $mName = filter_input(INPUT_POST, 'inputMiddleName'); 
    $lName  = filter_input(INPUT_POST, 'inputLastName'); 
    $mStreet = filter_input(INPUT_POST, 'inputMailStreet');
    $mStreet2 = filter_input(INPUT_POST, 'inputStreet2'); 
    $mCity = filter_input(INPUT_POST, 'inputMailCity'); 
    $mState =filter_input(INPUT_POST, "inputMailState"); 
	$mZip = filter_input(INPUT_POST, 'inputMailZip');
    $gender = filter_input(INPUT_POST, "inputGender"); 
	$isHispanic = filter_input(INPUT_POST, "isHispanic");
	$personsInHouse = filter_input(INPUT_POST, 'inputHousePeople'); 
    $houseIncome = filter_input(INPUT_POST, 'inputIncome'); 
    $birthday = filter_input(INPUT_POST,'inputBirthday'); 
    $race = filter_input(INPUT_POST,"race"); 
    $eyeColor = filter_input(INPUT_POST, "inputEye"); 
    $hairColor = filter_input(INPUT_POST, "inputHair"); 
    $height  = filter_input(INPUT_POST, 'height'); 
	$height = str_replace("'", "*", $height);
	$height = str_replace('"', "^", $height);
    $weight = filter_input(INPUT_POST, 'weight'); 
    $gradeCompleted = filter_input(INPUT_POST, "inputLastGrade"); 
    $schoolWithdrawDate = filter_input(INPUT_POST, "inputWithdraw"); 
    $employment = filter_input(INPUT_POST, "inputEmployment"); // under or unemployed 
	// handle employmemnt radio buttons
	if(isset($employment)) {
		if($employment == "unemployed") {
			$unemployed = 1;
			$underemployed = 0;
		} else if ($employment == "underemployed") {
			$unemployed = 0;
			$underemployed = 1;
		}
	} else {
		$unemployed = 0;
		$underemployed = 0;
	}
    $workplace = filter_input(INPUT_POST, "inputJob"); 
    $wage = filter_input(INPUT_POST, "inputWage"); 
    $hoursWorking = filter_input(INPUT_POST, "hoursPerWeek"); 
    $accomplish1 = filter_input(INPUT_POST,"personalAccomplishment1"); 
    $accomplish2 =  filter_input(INPUT_POST, "personalAccomplishment2");
	$recBy = filter_input(INPUT_POST, "inputRecommender"); 
    $recNum = filter_input(INPUT_POST, "inputRecommenderPhone"); 
    $preferredComm = filter_input(INPUT_POST, "inputCommMethod"); 
	
	// get info for phones table
    $phoneNumber1 = filter_input(INPUT_POST, 'inputCell');
    $phoneNumber2 = filter_input(INPUT_POST, 'inputHomePhone'); 
    
	// get info for guardians table
    $gFName = filter_input(INPUT_POST, "pFirstName"); 
    $gMName = filter_input(INPUT_POST, "pMiddleName"); 
    $gLName = filter_input(INPUT_POST, "pLastName"); 
    $gRelationship = filter_input(INPUT_POST, "inputRelationship");
    $gStreet1 = filter_input(INPUT_POST, "inputGuardianStreet1");
    $gStreet2 = filter_input(INPUT_POST, "inputGuardianStreet2"); 
	$gCity = filter_input(INPUT_POST, "inputGuardianCity"); 
	$gState = filter_input(INPUT_POST, "inputGuardianState");
    $gZip = filter_input(INPUT_POST, "inputGuardianZip"); 
    $gCellPhone = filter_input(INPUT_POST, "inputGuardianCell"); 
    $gWorkPhone = filter_input(INPUT_POST, "inputGuardianHomePhone"); 
    $gEmail = filter_input(INPUT_POST, "inputGuardianEmail", FILTER_SANITIZE_EMAIL); 
    
    
	// insert for the cadets table
   $results = $connection->createRecord("INSERT INTO cadets (ssn, fName, mName, lName, 
   mStreet, admissionStatus, mStreet2, mCity, mState, mZip, gender, isHispanic, personsInHouse, 
   houseIncome, birthday, race, eyeColor, hairColor, height, weight, gradeCompleted, schoolWithdrawDate, 
   underemployed, unemployed, workplace, wage, hoursWorking, accomplish1, accomplish2, recBy, recNum, preferredComm) 
   VALUES 
   ('$ssn', '$fName', '$mName', '$lName', 
   '$mStreet', 'pending', '$mStreet2', '$mCity', '$mState', '$mZip', '$gender','$isHispanic','$personsInHouse',
   '$houseIncome','$birthday','$race', '$eyeColor','$hairColor','$height','$weight','$gradeCompleted','$schoolWithdrawDate', 
   '$underemployed','$unemployed','$workplace','$wage','$hoursWorking', '$accomplish1', '$accomplish2', '$recBy', '$recNum', '$preferredComm')");

   // insert for the phone table
   $phoneResult1 = $connection->createRecord("INSERT INTO phonenumbers (ssn, phoneNumber, ext, notes) 
   VALUES 
   ('$ssn', '$phoneNumber1', '', 'cell phone')");
   $phoneResult2 = $connection->createRecord("INSERT INTO phonenumbers (ssn, phoneNumber, ext, notes) 
   VALUES 
   ('$ssn', '$phoneNumber2', '', 'home phone')");
   
   // insert for the guardians table
   $guardiansResult = $connection->createRecord("INSERT INTO guardians (ssn, fName, mName, lName, 
   relationship, street1, street2, city, state, zip, cellPhone, workPhone, email) 
   VALUES 
   ('$ssn', '$gFName', '$gMName', '$gLName', 
   '$gRelationship', 'gStreet1', '$gStreet2', '$gCity', '$gState', '$gZip', '$gCellPhone','$gWorkPhone','$gEmail')");

header("Location: allApplicantView.php");
?> 