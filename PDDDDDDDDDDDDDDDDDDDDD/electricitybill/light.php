<!DOCTYPE html>
<html>
<head>
	<title>Program to calculate electricity bill in PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

	<?php
	$amount = '';
	$kwh_usage = '';
	if (isset($_POST['submit'])) {
		$units = $_POST['kwh'];
		if (!empty($units)) {
			$kwh_usage = calculate_electricity_bill($units);
			$amount = '<strong>Total amount of ' . $units . ' units -</strong> ' . $kwh_usage;
		}
	}
	
	function calculate_electricity_bill($units) {
		$first_unit_cost = 3.5;
		$second_unit_cost = 4.00;
		$third_unit_cost = 5.20;
		$fourth_unit_cost = 6.50;

		if($units <= 50) {
			$bill = $units * $first_unit_cost;
		}
		else if($units > 50 && $units <= 100) {
			$temp = 100 * $first_unit_cost;
			$remaining_units = $units - 50;
			$bill = $temp + ($remaining_units * $second_unit_cost);
		}
		else if($units > 100 && $units <= 200) {
			$temp = (100 * $first_unit_cost) + (100 * $second_unit_cost);
			$remaining_units = $units - 150;
			$bill = $temp + ($remaining_units * $third_unit_cost);
		}
		else {
			$temp = (100 * $first_unit_cost) + (100 * $second_unit_cost) + (100 * $third_unit_cost);
			$remaining_units = $units - 250;
			$bill = $temp + ($remaining_units * $fourth_unit_cost);
		}
		return number_format((float)$bill, 2, '.', '');
	}
	?>


	<div class="container p-3 mb-2 bg-info text-black">
		<h1>Calculate electricity bill in PHP</h1>
		<div class="form-group">
		<form action="" method="post">
		<div class="form-group">
			<input type="number" name="kwh" placeholder="Please enter no. of Units" class="form-control" />
		</div>
		<div class="form-group">		
			<input type="submit" name="submit" class="btn btn-primary" value="Submit" />
		</div>	
		</form>
		</div>
		<div>
		    <?php echo '<br />' . $amount; ?>
		</div>
	</div>
	
</body>
</html>


