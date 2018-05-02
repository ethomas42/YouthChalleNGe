$(document).ready(function() 
{
	$('#current-table').DataTable( {
		responsive: true
	});
	$('#graduated-table').DataTable( {
		responsive: true
	});
	$('#all-table').DataTable( {
		responsive: true
	});
	
	$('#pending-table').DataTable( {
		responsive: true
	});
	$('#rejected-table').DataTable( {
		responsive: true
	});
	$('#reports-table').DataTable( {
		responsive: true
	});
	$('#general-table').DataTable( {
		responsive: true
	});
	
	// roles.php tables
	$('#admin-table').DataTable( {
		responsive: true
	});
	$('#cadre-table').DataTable( {
		responsive: true
	});
	$('#casemanager-table').DataTable( {
		responsive: true
	});
	$('#counselor-table').DataTable( {
		responsive: true
	});
	$('#medical-table').DataTable( {
		responsive: true
	});
	$('#medicalsup-table').DataTable( {
		responsive: true
	});
	$('#operations-table').DataTable( {
		responsive: true
	});
	$('#recruiter-table').DataTable( {
		responsive: true
	});
	$('#syl-table').DataTable( {
		responsive: true
	});
	$('#teacher-table').DataTable( {
		responsive: true
	});

	// sidebar functionality
	$('#sidebarCollapse').on('click', function () 
	{
        $('#sidebar').toggleClass('active');
    });
});