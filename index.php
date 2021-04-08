<?php

require 'connect.php';

$sql = 'SELECT * FROM students';
$result = $conn->query($sql);
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
		<div class="col-md-2">

		</div>
		<div class="col-md-8">

			<?php if (isset($_SESSION['msg'])) {?>
				<br>
				<div class="alert alert-success" role="alert">
				  <?php echo $_SESSION['msg']; ?>
				</div>
			<?php session_destroy();}?>

			<h1> Student list </h1>

			<a href="insert.php" class="btn btn-primary"> Add Student </a>
			<br><br>
			<table class="table table-bordered table-sm">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Roll</th>
						<th>Date of Birth</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

				<?php while ($row = $result->fetch_assoc()) {?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['roll']; ?></td>
						<td><?php echo $row['dob']; ?></td>
						<td>
							<a href="show.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm"> View </a>
							<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"> Edit </a>
							<a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm"> Delete </a>
						</td>
					</tr>
				<?php }?>

				</tbody>


			</table>


</div>
</div>
</div>

</body>
</html>