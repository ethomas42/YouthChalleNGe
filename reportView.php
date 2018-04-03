<!DOCTYPE html>
<?php
	include_once "basicPage.php";
	basicPage("Report Generation");
?>
			
            <script>
            $(document).ready(function(){
                $("#roleSettings").hide();
                $('#inputRole').on('change', function() {
                  if ( this.value == '1')
                  {
                    $("#roleSettings").show();
                  }
                  else
                  {
                    $("#roleSettings").hide();
                  }
                });
            });
            </script>

			<div class="row">
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label for="inputWeekNum">Week Number</label>
							<select class="form-control" id="inputTable">
								<option value="0" selected>1</option>
								<option value="0">2</option>
								<option value="0">3</option>
								<option value="0">4</option>
								<option value="1">5</option>
								<!-- Pull week numbers? -->
							</select>
						</div>
						<div class="form-group col-sm-12">
							<label for="inputTable">Table Name</label>
							<select class="form-control" id="inputTable">
								<option selected value="0">Cadets</option>
								<option value="0">Applicants</option>
								<option value="0">Users</option>
							</select>
						</div>
						<div class="form-group col-sm-12">
							<button type='button' class='btn btn-success'>Add Field</button>
						</div>
						<div class="form-group col-sm-12">
							<button type='button' class='btn btn-danger'>Remove Field</button>
						</div>
						<div class="form-group col-sm-12">
							<button type='button' class='btn btn-primary' data-toggle="modal" data-target="#genModal">Generate Report</button>
						</div>
					</div>
				<div class="column col-sm-6">
					
				</div>
			</div>
			
			<!-- MODAL START -->
			<div class="modal fade" id="genModal" tabindex="-1" role="dialog" aria-labelledby="genModalTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="genModalTitle">Generate Report</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<p>Name your report if you would like to save it as a template for future use.</p>
					<form>
					    <div class="form-group col-sm-6">
							<input type="text" class="form-control" id="inputTemplateName" placeholder='Report Template X'>
						</div>
					</form>
				  </div>
				  <div class="modal-footer">
						<button type="button" class="btn btn-primary">Just Generate</button>
						<button type="button" class="btn btn-primary">Generate & Save</button>
				  </div>
				</div>
			  </div>
			</div>			

			<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>