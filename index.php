<?php 
require 'header.php';

?>

	<h4>WELCOME</h4>
	<h4>DATE FILTER IN PHP AJAX</h4>
	<div class="main">
		
		<!-- Date Range Picker -->
		<div style="width: 100%; text-align: center;">
			<label for="from">From</label>
			<input type="text" id="from" name="from" autocomplete="off">
			<label for="to">to</label>
			<input type="text" id="to" name="to" autocomplete="off">
		</div>
		<br>

		<!-- DataTable -->
		<table width="100%" border="1" style="text-align: center;">
			<thead>
				<tr>
					<th colspan="5">DataTable</th>
				</tr>
				<tr>
					<th>S#</th>
					<th>User</th>
					<th>Email</th>
					<th>Age</th>
					<th>Signup Date</th>
				</tr>
			</thead>
			<tbody id="date-range">
				
			</tbody>
		</table>
		
	</div> <!-- End of Main Div -->

<?php require 'footer.php'; ?>