<!DOCTYPE html>
<?php
	/*
	Created by: A-Team (James Harrison, Charles Ramsey, Evan Thomas, and Colton Thompson)
	The purpose of this file is allow users to see all of the reports that have previously been created and the option 
	*/
	include_once "basicPage.php";
	basicPage("Report Templates");
	if(isset($_SESSION['loggedIn']) == false) //Checks to see if user is logged in; if they are not then they will be redirected to the login page.
	{
		header("Location: index.php"); 
	}
?>

			<div class="container col-sm-12">
				<form method="post" action="reportView.php"><input type="hidden" name="repName" value=""><button type="submit" class="btn btn-danger">New</button></form>
				
				<p><br></p>
				
				<table id="reports-table" class="table table-striped table-bordered" cellspacing="0">
					<thead>
						<tr>
							<th>View</th>
							<th>Name</th>
							<th>Date Created</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include_once "dbcontroller.php";
							$db = new DBController();
							if ($db->numRows("SELECT name, dateCreated FROM reports")) //If loop for if there are reports that have been previously generated.
							{
								$results = $db->runQuery("SELECT name, dateCreated FROM reports");
								foreach($results as $row) //Creates a table of reports 
								{
									$dateA = preg_split('/[-_ ]+/', $row['dateCreated']); //split by dash underscore and space
									echo <<<_END
											<tr>
												<td><form method="post" action="reportView.php"><input type="hidden" name="repName" value="{$row['name']}"><button type="submit" class="btn btn-primary">View Report</button></form></td>
												<td>{$row['name']}</td>
												<td>{$dateA[1]}/{$dateA[2]}/{$dateA[0]}</td> <!-- American date format -->
											</tr>
_END;
								}
							}
						?>
					</tbody>
				</table>
			</div>
			
			<!-- These div's make the page display correctly -->
			
			<div class='col-sm-1'></div>
			<div class='col-sm-1'></div>
			<div class='col-sm-1'></div>
			<div class='col-sm-1'></div>
			<div class='col-sm-1'></div>
			<div class='col-sm-1'></div>
			<div class='col-sm-1'></div>
			<div class='col-sm-1'></div>
			<div class='col-sm-1'></div>
			<div class='col-sm-1'></div>
			<div class='col-sm-1'></div>
			<div class='col-sm-1'></div>
			
				<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>
