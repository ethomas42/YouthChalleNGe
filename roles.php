<?php
/* 
 * @author Colton Thompson
 * Created by: A-Team (James Harrison, Charles Ramsey, Evan Thomas, and Colton Thompson)
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * The purpose of this file is to display all users that are currently assigned to one of the many types of roles, and to allow a connection between the pages that allow the creation of new users and viewing users.
 */
require_once 'dbcontroller.php';
require_once 'basicPage.php'; 

$db = new DBController(); 
basicPage("Users");
if($_SESSION['permissions']['admin'] == 0)
	header("Location: allCadetView.php");
?>
				<form method="post" action="newUser.php"><button type="submit" class="btn btn-primary">New User</button></form><p></br></p>
				<ul class="nav nav-tabs nav-justified" role="tablist">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#nav-admin"> Administrator </a> 
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#nav-cadre">Cadre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#nav-casemanager">Case Manager</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#nav-counselor">Counselor</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#nav-medical">Medical</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#nav-medicalsup">Medical Supervisor</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#nav-operation">Operations</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#nav-recruiter">Recruiter</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#nav-syl">SYL</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#nav-teacher">Teacher</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#nav-custom"> Custom Users </a> 
					</li>
				</ul>
				  
				<div class ="tab-content">

					<!-- Admin Tab -->
					<div class = "tab-pane container col-sm-12 active" id = "nav-admin">
						<table id="admin-table" class="table table-striped table-bordered"> 
							<thead>
								<tr>
									<th> View </th>
									<th> Name </th>
									<th> Email </th>
									<th> Password </th>
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
									echo "<br>";
									foreach($results as $row)
									{
										echo "<tr>";
										echo "<td><form method='post' action='userView.php'><input type='hidden' name='email' value='{$row['email']}'><button type='submit' class='btn btn-primary'>View User</button></form></td>";
										echo "<td>{$row['fName']} {$row['lName']}</td>"; 
										echo "<td>{$row['email']}</td>";
										echo "<td>{$row['password']}</td>";
										echo "</tr>";
									}
								}
							 ?>
							</tbody>
						</table>
					</div>
					<!-- Cadre Tab -->
					<div class = "tab-pane container col-sm-12" id = "nav-cadre">
						<table id="cadre-table" class="table table-striped table-bordered"> 
							<thead>
								<tr>
									<th> View </th>
									<th> Name </th>
									<th> Email </th>
									<th> Password </th>
								</tr>
							</thead>
							<tbody>
							<?php
							  $results = $db->runQuery("SELECT * FROM users WHERE role = 'cadre'"); 
								if($db->numRows("SELECT * FROM users WHERE role = 'cadre'") < 1) 
								{
									echo "<h1> Empty List</h1>"; 
								}
								else
								{
									echo "<br>";
									foreach($results as $row)
									{
										echo "<tr>";
										echo "<td><form method='post' action='userView.php'><input type='hidden' name='email' value='{$row['email']}'><button type='submit' class='btn btn-primary'>View User</button></form></td>";
										echo "<td>{$row['fName']} {$row['lName']}</td>"; 
										echo "<td>{$row['email']}</td>";
										echo "<td>{$row['password']}</td>";
										echo "</tr>";
									}
								}
							 ?>
							</tbody>
						</table>
					</div>
					<!-- Case Manager Tab -->
					<div class = "tab-pane container col-sm-12" id = "nav-casemanager">
						<table id="casemanager-table" class="table table-striped table-bordered"> 
							<thead>
								<tr>
									<th> View </th>
									<th> Name </th>
									<th> Email </th>
									<th> Password </th>
								</tr>
							</thead>
							<tbody>
							<?php
							  $results = $db->runQuery("SELECT * FROM users WHERE role = 'caseManager'"); 
								if($db->numRows("SELECT * FROM users WHERE role = 'caseManager'") < 1) 
								{
									echo "<h1> Empty List</h1>"; 
								}
								else
								{
									echo "<br>";
									foreach($results as $row)
									{
										echo "<tr>";
										echo "<td><form method='post' action='userView.php'><input type='hidden' name='email' value='{$row['email']}'><button type='submit' class='btn btn-primary'>View User</button></form></td>";
										echo "<td>{$row['fName']} {$row['lName']}</td>"; 
										echo "<td>{$row['email']}</td>";
										echo "<td>{$row['password']}</td>";
										echo "</tr>";
									}
								}
							 ?>
							</tbody>
						</table>
					</div>
					<!-- Counselor Tab -->
					<div class = "tab-pane container col-sm-12" id = "nav-counselor">
						<table id="counselor-table" class="table table-striped table-bordered"> 
							<thead>
								<tr>
									<th> View </th>
									<th> Name </th>
									<th> Email </th>
									<th> Password </th>
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
									echo "<br>";
									foreach($results as $row)
									{
										echo "<tr>";
										echo "<td><form method='post' action='userView.php'><input type='hidden' name='email' value='{$row['email']}'><button type='submit' class='btn btn-primary'>View User</button></form></td>";
										echo "<td>{$row['fName']} {$row['lName']}</td>"; 
										echo "<td>{$row['email']}</td>";
										echo "<td>{$row['password']}</td>";
										echo "</tr>";
									}
								}
							 ?>
							</tbody>
						</table>
					</div>
					<!-- Medical Tab -->
					<div class = "tab-pane container col-sm-12" id = "nav-medical">
						<table id="medical-table" class="table table-striped table-bordered"> 
							<thead>
								<tr>
									<th> View </th>
									<th> Name </th>
									<th> Email </th>
									<th> Password </th>
								</tr>
							</thead>
							<tbody>
							<?php
							  $results = $db->runQuery("SELECT * FROM users WHERE role = 'medical'"); 
								if($db->numRows("SELECT * FROM users WHERE role = 'medical'") < 1) 
								{
									echo "<h1> Empty List</h1>"; 
								}
								else
								{
									echo "<br>";
									foreach($results as $row)
									{
										echo "<tr>";
										echo "<td><form method='post' action='userView.php'><input type='hidden' name='email' value='{$row['email']}'><button type='submit' class='btn btn-primary'>View User</button></form></td>";
										echo "<td>{$row['fName']} {$row['lName']}</td>"; 
										echo "<td>{$row['email']}</td>";
										echo "<td>{$row['password']}</td>";
										echo "</tr>";
									}
								}
							 ?>
							</tbody>
						</table>
					</div>
					<!-- Medical Supervisor Tab -->
					<div class = "tab-pane container col-sm-12" id = "nav-medicalsup">
						<table id="medicalsup-table" class="table table-striped table-bordered"> 
							<thead>
								<tr>
									<th> View </th>
									<th> Name </th>
									<th> Email </th>
									<th> Password </th>
								</tr>
							</thead>
							<tbody>
							<?php
							  $results = $db->runQuery("SELECT * FROM users WHERE role = 'medicalSup'"); 
								if($db->numRows("SELECT * FROM users WHERE role = 'medicalSup'") < 1) 
								{
									echo "<h1> Empty List</h1>"; 
								}
								else
								{
									echo "<br>";
									foreach($results as $row)
									{
										echo "<tr>";
										echo "<td><form method='post' action='userView.php'><input type='hidden' name='email' value='{$row['email']}'><button type='submit' class='btn btn-primary'>View User</button></form></td>";
										echo "<td>{$row['fName']} {$row['lName']}</td>"; 
										echo "<td>{$row['email']}</td>";
										echo "<td>{$row['password']}</td>";
										echo "</tr>";
									}
								}
							 ?>
							</tbody>
						</table>
					</div>
					<!-- Operations Tab -->
					<div class = "tab-pane container col-sm-12" id = "nav-operation">
						<table id="operations-table" class="table table-striped table-bordered"> 
							<thead>
								<tr>
									<th> View </th>
									<th> Name </th>
									<th> Email </th>
									<th> Password </th>
								</tr>
							</thead>
							<tbody>
							<?php
							  $results = $db->runQuery("SELECT * FROM users WHERE role = 'operations'"); 
								if($db->numRows("SELECT * FROM users WHERE role = 'operations'") < 1) 
								{
									echo "<h1> Empty List</h1>"; 
								}
								else
								{
									echo "<br>";
									foreach($results as $row)
									{
										echo "<tr>";
										echo "<td><form method='post' action='userView.php'><input type='hidden' name='email' value='{$row['email']}'><button type='submit' class='btn btn-primary'>View User</button></form></td>";
										echo "<td>{$row['fName']} {$row['lName']}</td>"; 
										echo "<td>{$row['email']}</td>";
										echo "<td>{$row['password']}</td>";
										echo "</tr>";
									}
								}
							 ?>
							</tbody>
						</table>
					</div>
					<!-- Recruiter Tab -->
					<div class = "tab-pane container col-sm-12" id = "nav-recruiter">
						<table id="recruiter-table" class="table table-striped table-bordered"> 
							<thead>
								<tr>
									<th> View </th>
									<th> Name </th>
									<th> Email </th>
									<th> Password </th>
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
									echo "<br>";
									foreach($results as $row)
									{
										echo "<tr>";
										echo "<td><form method='post' action='userView.php'><input type='hidden' name='email' value='{$row['email']}'><button type='submit' class='btn btn-primary'>View User</button></form></td>";
										echo "<td>{$row['fName']} {$row['lName']}</td>"; 
										echo "<td>{$row['email']}</td>";
										echo "<td>{$row['password']}</td>";
										echo "</tr>";
									}
								}
							 ?>
							</tbody>
						</table>
					</div>
					<!-- SYL Tab -->
					<div class = "tab-pane container col-sm-12" id = "nav-syl">
						<table id="syl-table" class="table table-striped table-bordered"> 
							<thead>
								<tr>
									<th> View </th>
									<th> Name </th>
									<th> Email </th>
									<th> Password </th>
								</tr>
							</thead>
							<tbody>
							<?php
							  $results = $db->runQuery("SELECT * FROM users WHERE role = 'syl'"); 
								if($db->numRows("SELECT * FROM users WHERE role = 'syl'") < 1) 
								{
									echo "<h1> Empty List</h1>"; 
								}
								else
								{
									echo "<br>";
									foreach($results as $row)
									{
										echo "<tr>";
										echo "<td><form method='post' action='userView.php'><input type='hidden' name='email' value='{$row['email']}'><button type='submit' class='btn btn-primary'>View User</button></form></td>";
										echo "<td>{$row['fName']} {$row['lName']}</td>"; 
										echo "<td>{$row['email']}</td>";
										echo "<td>{$row['password']}</td>";
										echo "</tr>";
									}
								}
							 ?>
							</tbody>
						</table>
					</div>
					<!-- Teacher Tab -->
					<div class = "tab-pane container col-sm-12" id = "nav-teacher">
						<table id="teacher-table" class="table table-striped table-bordered"> 
							<thead>
								<tr>
									<th> View </th>
									<th> Name </th>
									<th> Email </th>
									<th> Password </th>
								</tr>
							</thead>
							<tbody>
							<?php
							  $results = $db->runQuery("SELECT * FROM users WHERE role = 'teacher'"); 
								if($db->numRows("SELECT * FROM users WHERE role = 'teacher'") < 1) 
								{
									echo "<h1> Empty List</h1>"; 
								}
								else
								{
									echo "<br>";
									foreach($results as $row)
									{
										echo "<tr>";
										echo "<td><form method='post' action='userView.php'><input type='hidden' name='email' value='{$row['email']}'><button type='submit' class='btn btn-primary'>View User</button></form></td>";
										echo "<td>{$row['fName']} {$row['lName']}</td>"; 
										echo "<td>{$row['email']}</td>";
										echo "<td>{$row['password']}</td>";
										echo "</tr>";
									}
								}
							 ?>
							</tbody>
						</table>
					</div>
					<!-- Custom Role Tab -->
					<div class = "tab-pane container col-sm-12" id = "nav-custom">
						<table id="custom-table" class="table table-striped table-bordered"> 
							<thead>
								<tr>
									<th> View </th>
									<th> Name </th>
									<th> Email </th>
									<th> Password </th>
									<th> Role </th>
								</tr>
							</thead>
							<tbody>
							<?php
							  $results = $db->runQuery("SELECT * FROM users, roles WHERE roles.custom = 1 AND users.role = roles.role"); //Pulls all users that have a role that is custom. Due to these being custom but still being named, many roles will be here
								if($db->numRows("SELECT * FROM users, roles WHERE roles.custom = 1 AND users.role = roles.role") < 1) 
								{
									echo "<h1> Empty List</h1>"; 
								}
								else
								{
									echo "<br>";
									foreach($results as $row)
									{
										echo "<tr>";
										echo "<td><form method='post' action='userView.php'><input type='hidden' name='email' value='{$row['email']}'><button type='submit' class='btn btn-primary'>View User</button></form></td>";
										echo "<td>{$row['fName']} {$row['lName']}</td>"; 
										echo "<td>{$row['email']}</td>";
										echo "<td>{$row['password']}</td>";
										echo "<td>{$row['role']}</td>";
										echo "</tr>";
									}
								}
							 ?>
							</tbody>
						</table>
					</div>
				</div> 
				<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>
