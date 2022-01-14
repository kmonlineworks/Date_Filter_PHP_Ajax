<?php 
include 'config.php';
	
if (isset($_POST['date1']) && isset($_POST['date2'])) {
	
	$sql = "SELECT * FROM user WHERE signup_date BETWEEN '".$_POST['date1']."' AND '".$_POST['date2']."'";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		
		$x = 0;
		while ($row = mysqli_fetch_assoc($result)) {

			$output = '<tr>
							<td>'.++$x.'</td>
							<td>'.$row["name"].'</td>
							<td>'.$row["email"].'</td>
							<td>'.$row["age"].'</td>
							<td>'.$row["signup_date"].'</td>
						</tr>';

			echo $output;
		}
	}
	else{
		echo "<tr><td colspan='5'>No Data Found</td></tr>";
	}
}
else{
	$sql = "SELECT * FROM user";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		
		$x = 0;
		while ($row = mysqli_fetch_assoc($result)) {

			$output = '<tr>
							<td>'.++$x.'</td>
							<td>'.$row["name"].'</td>
							<td>'.$row["email"].'</td>
							<td>'.$row["age"].'</td>
							<td>'.$row["signup_date"].'</td>
						</tr>';

			echo $output;
		}
	}
	else{
		echo "<tr><td colspan='5'>No Data Found</td></tr>";
	}
}