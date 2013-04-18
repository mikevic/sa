<html>
<link href="css/jquery.dataTables.css" rel="stylesheet">
<script src="js/jquery-1.8.2.js"></script>
<script src="js/jquery.dataTables.min.js" ></script>
<script>
	$(document).ready(function() {
	$('#example').dataTable( {
		"bProcessing": true,
		"bServerSide": true,
		"aaSorting": [[ 7, "desc" ]],
		"sAjaxSource": "includes/load_registration_table.php"
	} );
} );
</script>
<table class="display" id="example" width="100%">
	<thead>
		<tr>
			<th >Name</th>
			<th >Phone</th>
			<th >Email</th>
			<th width="5%">Age</th>
			<th >University</th>
			<th >LC</th>
			<th >Programme</th>
			<th width="10%">Registration Time</th>
		</tr>
	</thead>
	<tbody>
		
	</tbody>
	<tfoot>
		<tr>
			<th >Name</th>
			<th >Phone</th>
			<th >Email</th>
			<th >Age</th>
			<th >University</th>
			<th >LC</th>
			<th >Programme</th>
			<th >Registration Time</th>
		</tr>
	</tfoot>
</table>

</html>
