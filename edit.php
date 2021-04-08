<?php
$id = $_GET['id'];

require 'connect.php';

$sql = "SELECT * FROM students WHERE id = $id";
$result = $conn->query($sql);
$student = $result->fetch_assoc();
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
			<h1> Update Student Information </h1>

			<form action="update.php?id=<?php echo $student['id']; ?> " method="post">

			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" value="<?php echo $student['name']; ?>" class="form-control" name="name" placeholder="Enter Name">
			  </div>

			  <div class="form-group">
			    <label for="roll">Roll</label>
			    <input type="text"  value="<?php echo $student['roll']; ?>" class="form-control" name="roll" placeholder="Enter Roll">
			  </div>

			  <div class="form-group">
			    <label for="dob">Date of Birth</label>
			    <input type="date" value="<?php echo $student['dob']; ?>" class="form-control" name="dob" placeholder="Enter Date of Birth">
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>


		</div>
	</div>
</div>

</body>
</html>