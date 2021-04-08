<?php
$id = $_GET['id'];

require 'connect.php';

$sql = "SELECT * FROM students WHERE id = $id";
$result = $conn->query($sql);
$student = $result->fetch_assoc();
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Students </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-3"></div>
		<div class="col-md-6">

			<?php if( isset($_SESSION['msg']) ) { ?>
				<br>
				<div class="alert alert-success" role="alert">
				  <?php echo $_SESSION['msg']; ?>
				</div>
			<?php  session_destroy(); } ?>

			<a href="index.php" class="btn">Home</a>

			<h1> Student Information </h1>

			<a href="edit.php?id=<?php echo $student['id']; ?>" class="btn btn-primary btn-sm"> Edit </a>
			<br><br>
			<table class="table table-bordered table-sm">
				<tr>
					<th>Name</th>
					<td><?php echo $student['name']; ?></td>
				</tr>
				<tr>
					<th>Roll</th>
					<td><?php echo $student['roll']; ?></td>
				</tr>
				<tr>
					<th>Date of Birth</th>
					<td><?php echo $student['dob']; ?></td>
				</tr>
			</table>


		</div>
	</div>
</div>
	
</body>
</html>