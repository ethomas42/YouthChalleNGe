<?php

/* 
 * Created by: The A-Team (James Harrison, Charles Ramsey, Evan Thomas, and Colton Thompson)
 *The purpose of this file is to pull all the information about states from the database, and to push files into the database.
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'dbcontroller.php';

function statesDropdown() //Allows for the option of states to be pulled from the database for ease of selection on the applicantView and cadetView pages.
{
 $connection = new DBController(); 
 $connection->runQuery("SELECT * FROM states"); 
 foreach($result as $row)
 {
 echo "<option> {$row['state']}</option>";  
 }

}
/*
 * @param name of directory that file will be placed 
 * @param  name of submit Button 
 * @param  name of <input type = file> tag 
 * @param social security of the cadet 
 * @param category of the file
 */

function importFile($directory , $buttonName ,$inputFileName, $ssn, $category) //Allows for a file given to an applicant or cadet to be put onto the database.
{
    $directory = "cadets";
    if(isset($_POST[$buttonName]))
    {
        $attachment = $_FILES[$inputFileName]['name']; 
        $attachment_tmp_name = $_FILES[$inputFileName]['tmp_name'];
        
        //Send File Name to the database and date to the database 
        $connection = new DBController();
        $query = "INSERT INTO attachments (filename, ssn, category) VALUES ('$attachment', '$ssn', '$category')"; 
       $results = $connection->runQuery($query);
       
        if(is_dir($directory))
        {
        move_uploaded_file($attachment_tmp_name, $directory."/".$attachment); 
        }
        else 
        {
            mkdir($directory,0777);
            move_uploaded_file($attachment_tmp_name, $directory."/".$attachment); 
            
        }
		
    }

}
?>
