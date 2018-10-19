<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Demo Data Table</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>	

</head>
<body>
	<script type="text/javascript">
		$(document).ready(function() {
		    $("#example").DataTable();
		});
	</script>
	<table id="example" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>Position</th>
				<th>Office</th>
				<th>Age</th>
				<th>Start</th>
				<th>Salary</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Name</th>
				<th>Position</th>
				<th>Office</th>
				<th>Age</th>
				<th>Start</th>
				<th>Salary</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Tiger Nixon</td>
				<td>System Architech</td>
				<td>Edingurgh</td>
				<td>61</td>
				<td>2011/04/25</td>
				<td>$320,800</td>
			</tr>
			<tr>
				<td>Garrett Winters</td>
				<td>Accountant</td>
				<td>Tokyo</td>
				<td>63</td>
				<td>2011/07/25</td>
				<td>$170,750</td>
			</tr>
			<tr>
				<td>Ashton</td>
				<td>Junior Technical Author</td>
				<td>San Francisco</td>
				<td>66</td>
				<td>2009/01/12</td>
				<td>$86,000</td>
			</tr>
			<tr>
				<td>Cedric Kelly</td>
				<td>Senior Javascript Developer</td>
				<td>Edingurgh</td>
				<td>22</td>
				<td>2012/03/29</td>
				<td>$433,800</td>
			</tr>
		</tbody>
	</table>
</body>
</html>