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
	
	$('#sidebarCollapse').on('click', function () 
	{
        $('#sidebar').toggleClass('active');
    });
});