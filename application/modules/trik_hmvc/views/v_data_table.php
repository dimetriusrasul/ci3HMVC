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
				<th>No.</th>
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
				<th>No.</th>
				<th>Name</th>
				<th>Position</th>
				<th>Office</th>
				<th>Age</th>
				<th>Start</th>
				<th>Salary</th>
			</tr>
		</tfoot>
		<tbody>
			<?php $no=1; ?>
			<?php foreach($grid as $row) :?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $row->name; ?></td>
				<td><?php echo $row->position; ?></td>
				<td><?php echo $row->office; ?></td>
				<td><?php echo $row->age; ?></td>
				<td><?php echo $row->start_date; ?></td>
				<td><?php echo $row->salary; ?></td>
			</tr>
			<?php $no++; ?>
			<?php endforeach;?>
		</tbody>
	</table>
	<?php echo($row->name); ?>
</body>
</html>