<?php

/* 
 * @author Colton Thompson
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'dbcontroller.php';
require_once 'basicPage.php'; 

$db = new DBController(); 
basicPage("Users");

?>

				  <ul class="nav nav-tabs nav-justified" role="tablist">
					<li class="nav-item active">
					  <a class="nav-link" data-toggle="tab" href="#nav-general">General Users</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#nav-recruiter">Recruiter</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#nav-counselor">Counselor</a>
					</li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#nav-admin"> Administrator </a> 
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#nav-custom"> Custom Users </a> 
                                        </li>
				  </ul>
<div class ="tab-content">
    <div class ="tab-pane active container col-sm-12" id = "nav-general"> 
        <table id ="current-table" class="table table-striped table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th> Name</th>
                    <th> Email </th> 
                </tr>
            </thead>
            <tbody>
                <?php
                $results = $db->runQuery("SELECT * FROM users WHERE role = 'general'"); 
                if($db->numRows("SELECT * FROM users WHERE role = 'general'") < 1) 
                {
                    echo "<h1> Empty List</h1>"; 
                }
                else
                {
                    foreach($results as $row)
                    {
                        echo "<td>{$row['fName']} {$row['lName']}</td>"; 
                        echo "<td>{$row['email']}</td>";
                    }
                }
                ?>
            </tbody>
        </table>
    
    
    
    </div>
 <!-- END OF GENERAL USERS LIST-->  
 <div class = "tab-pane container col-sm-12" id = "nav-recruiter">
     <table class="table table-striped table-bordered"> 
         <thead>
             <tr>
                 <th> Name </th>
                 <th> Email /th>
             </tr>
         </thead>
         <tbody>
             <?php
              $results = $db->runQuery("SELECT * FROM users WHERE role = 'recruiter'"); 
                if($db->numRows("SELECT * FROM users WHERE role = 'recruiter'") < 1) 
                {
                    echo "<h1> Empty List</h1>"; 
                }
                else
                {
                    foreach($results as $row)
                    {
                        echo "<td>{$row['fName']} {$row['lName']}</td>"; 
                        echo "<td>{$row['email']}</td>";
                    }
                }
             ?>
         </tbody>
     </table>
 </div>
  <div class = "tab-pane container col-sm-12" id = "nav-counselor">
       <table class="table table-striped table-bordered"> 
         <thead>
             <tr>
                 <th> Name </th>
                 <th> Email /th>
             </tr>
         </thead>
         <tbody>
             <?php
              $results = $db->runQuery("SELECT * FROM users WHERE role = 'counselor'"); 
                if($db->numRows("SELECT * FROM users WHERE role = 'counselor'") < 1) 
                {
                    echo "<h1> Empty List</h1>"; 
                }
                else
                {
                    foreach($results as $row)
                    {
                        echo "<td>{$row['fName']} {$row['lName']}</td>"; 
                        echo "<td>{$row['email']}</td>";
                    }
                }
             ?>
         </tbody>
     </table>
 </div>
  <div class = "tab-pane container col-sm-12" id = "nav-admin">
       <table class="table table-striped table-bordered"> 
         <thead>
             <tr>
                 <th> Name </th>
                 <th> Email /th>
             </tr>
         </thead>
         <tbody>
             <?php
              $results = $db->runQuery("SELECT * FROM users WHERE role = 'admin'"); 
                if($db->numRows("SELECT * FROM users WHERE role = 'admin'") < 1) 
                {
                    echo "<h1> Empty List</h1>"; 
                }
                else
                {
                    foreach($results as $row)
                    {
                        echo "<td>{$row['fName']} {$row['lName']}</td>"; 
                        echo "<td>{$row['email']}</td>";
                    }
                }
             ?>
         </tbody>
     </table>
 </div>
  <div class = "tab-pane container col-sm-12" id = "nav-custom">
       <table class="table table-striped table-bordered"> 
         <thead>
             <tr>
                 <th> Name </th>
                 <th> Email /th>
             </tr>
         </thead>
         <tbody>
             <?php
              $results = $db->runQuery("SELECT * FROM users WHERE role = 'custom'"); 
                if($db->numRows("SELECT * FROM users WHERE role = 'custom'") < 1) 
                {
                    echo "<h1> Empty List</h1>"; 
                }
                else
                {
                    foreach($results as $row)
                    {
                        echo "<td>{$row['fName']} {$row['lName']}</td>"; 
                        echo "<td>{$row['email']}</td>";
                    }
                }
             ?>
         </tbody>
     </table>
 </div>
</div> 
                                