<?php

/* 
 * @author Colton Thompson 
 * @purpose Submits a new application into the database 
 * Retrieves all information from $_POST array 
 * Date: 3/30/2018
 */
require_once 'dbcontroller.php';

/*
 * Connect to the Database 
 */
    $connection = new DBController();

    $fName = filter_input(INPUT_POST, 'inputFirstName');
    $mName = filter_input(INPUT_POST, 'inputMiddleName'); 
    $lName  = filter_input(INPUT_POST, 'inputLastName'); 
    $mailStreet = filter_input(INPUT_POST, 'inputMiddleName');
    $apartNo = filter_input(INPUT_POST, 'inputStreet2'); 
    $mailCity = filter_input(INPUT_POST, 'inputMailCity'); 
    $cell = filter_input(INPUT_POST, 'inputCell');
    $inputHomePhone = filter_input(INPUT_POST, 'inputHomePhone'); 
    $houseHold = filter_input(INPUT_POST, 'inputHousePeople'); 
    $householdIncome = filter_input(INPUT_POST, 'inputIncome'); 
    $birthday = filter_input(INPUT_POST,'inputBirthday'); 
    $race = filter_input(INPUT_POST,"race"); 
    $eyeColor = filter_input(INPUT_POST, "inputEye"); 
    $hairColor = filter_input(INPUT_POST, "inputHair"); 
    $height  = filter_input(INPUT_POST, 'height'); 
    $weight = filter_input(INPUT_POST, 'weight'); 
    $lastGradeCompleted = filter_input(INPUT_POST, "inputLastGrade"); 
    $withdrawDate = filter_input(INPUT_POST, "inputWithdraw"); 
    $employment = filter_input(INPUT_POST, "inlineRadioOptions"); // Employment Status 
    $employer = filter_input(INPUT_POST, "inputJob"); 
    $hourlyWage = filter_input(INPUT_POST, "inputWage"); 
    $hoursPerWeek = filter_input(INPUT_POST, "hoursPerWeek"); 
    $accomplishment1 = filter_input(INPUT_POST,"personalAccomplishment1"); 
    $accomplishment2 =  filter_input(INPUT_POST, "personalAccomplishment2");
    $parentFirstName = filter_input(INPUT_POST, "pFirstName"); 
    $parentMiddleName = filter_input(INPUT_POST, "pMiddleName"); 
    $parentLastName = filter_input(INPUT_POST, "pLastName"); 
    $guardianStreetAddress = filter_input(INPUT_POST, "inputGuardianStreet");
    $guardianStreetAddress2 = filter_input(INPUT_POST, "inputGuardianStreet2");
    $guardianCity = filter_input(INPUT_POST, "inputGuardianCity"); 
    $guardianZip = filter_input(INPUT_POST, "inputGuardianZip"); 
    $guardianCell = filter_input(INPUT_POST, "inputGuardianCell"); 
    $guardianHomePhone = filter_input(INPUT_POST, "inputGuardianHomePhone"); 
    $guardianEmail = filter_input(INPUT_POST, "inputGuardianEmail", FILTER_SANITIZE_EMAIL); 
    $recommenderName = filter_input(INPUT_POST, "inputRecommender"); 
    $recommenderPhone = filter_input(INPUT_POST, "inputRecommenderPhone"); 
    
    
    

    $connection->runQuery(""
            . "INSERT INTO cadets (fName, mName, lName, gender, ssn, genQual, birthday, age, race, isHispanic, email, 
                mStreet, mStreet2, mCity, mState, mZip, pStreet, pStreet2, pCity, pState, pZip, isCitizen,
                ged, volunteer, gFirstName, gLastName, gRelationship, gPhone, gWorkPhome, gEmail, gStreet, 
                gStreet2, gCity, gState, gZip, admissionStatus, schoolWithdrawDate, unemployed, 
                underemployed, workplace, wage, hoursWorking, acomplish1, acomplish2, recBy,
                recNum, gradeCompleted, hairColor, eyeColor, height, weight, personsInHouse, 
                houseIncome, gaResident, preferredComm) VALUES ('$fName','$mName','$lName','$mailStreet','$apartNo','$mailCity','$cell','$inputHomePhone','$houseHold','$householdIncome','$birthday','$race','$eyeColor','$hairColor','$height','$weight','$lastGradeCompleted','$withdrawDate','$employment','$employer','$hourlyWage','$hoursPerWeek','$accomplishment1','$accomplishment2','$parentFirstName','$parentMiddleName','$parentLastName','$guardianStreetAddress','$guardianStreetAddress2','$guardianCity','$guardianZip','$guardianCell','$guardianHomePhone','$guardianEmail','$recommenderName','$recommenderPhone') "
            );

?> 