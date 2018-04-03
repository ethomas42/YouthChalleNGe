<!DOCTYPE html>
<?php
	include_once "basicPage.php";
	basicPage("Report Templates");
?>

			<div class="container col-sm-12">
				<table id="reports-table" class="table table-striped table-bordered" cellspacing="0">
					<thead>
						<tr>
							<th>View</th>
							<th>Name</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include_once "dbcontroller.php";
							$db = new DBController();
							if ($db->numRows("SELECT name FROM reports"))
							{
								$results = $db->runQuery("SELECT name FROM reports");
								foreach($results as $row)
								{
									echo <<<_END
											<tr>
												<td><form method="post" action="reportView.php?{$row['name']}"><input type="hidden" value="0"><button type="button" class="btn btn-primary">View Report</button></form></td>
												<td>{$row['name']}</td>
											</tr>
_END;
								}
							}
						?>
					</tbody>
				</table>
			</div>
			
			<!-- These div's make the page display correctly -->
			
			<div class='col-sm-1'>
			</div>
			<div class='col-sm-1'>
			</div>
			<div class='col-sm-1'>
			</div>
			<div class='col-sm-1'>
			</div>
			<div class='col-sm-1'>
			</div>
			<div class='col-sm-1'>
			</div>
			<div class='col-sm-1'>
			</div>
			<div class='col-sm-1'>
			</div>
			<div class='col-sm-1'>
			</div>
			<div class='col-sm-1'>
			</div>
			<div class='col-sm-1'>
			</div>
			<div class='col-sm-1'>
			</div>
			
				<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>