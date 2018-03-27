<?php
require_once 'basicPage.php';
require_once 'dbcontroller.php'; 

basicPage("Milledgeville");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$id = null; 
if(isset($_POST['cadetID']))
{
    $id = $_REQUEST['id']; 
    $query = "SELECT * FROM cadets WHERE "
}
else

?> 