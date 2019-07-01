<?php
	require_once "display.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="styledetail.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<h2 class="text-title">Information</h2>
		<div class="col-xl-3 profile">
			<?php echo "<img src='uploadImg/".$image."'>"?>
		</div>
		<table class="col-xl-8 table table-bordered success bg">
				<thead>
					<tr >
						<th >First Name</th>
						<td><?php echo $First_Name ?></td>
					</tr>
					<tr >
						<th >Last Name</th>
						<td><?php echo $Last_Name ?></td>
					</tr>
					<tr>
						<th class="info">Gender</th>
						<td><?php echo $Gender ?></td>
					</tr>
					<tr>
						<th class="info">Email</th>
						<td><?php echo $Email ?></td>
					</tr>
					<tr>
						<th class="info">Phone Number</th>
						<td><?php echo $Phone ?></td>
					</tr>
				</thead>
			</table>
	</div>
	<form action="" method="POST">
			<div class="submit">
				<input type="submit" class="btnBack"  value="Logout" name="logout"/>
			</div>
	</form>
</div>
</body>

</html>

