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
	$('#recruiter-table').DataTable( {
		responsive: true
	});
	$('#counselor-table').DataTable( {
		responsive: true
	});
	$('#admin-table').DataTable( {
		responsive: true
	});
	$('#custom-table').DataTable( {
		responsive: true
	});
	
	$('#sidebarCollapse').on('click', function () 
	{
        $('#sidebar').toggleClass('active');
    });
});