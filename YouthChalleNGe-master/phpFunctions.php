<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'dbcontroller.php';

function statesDropdown()
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
 * @ name of <input type = file> tag 
 */

function importFile($directory , $buttonName ,$inputFileName, $ssn, $category)
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
		if($results)
			return true;
		else
			return false;
    }
}
?>