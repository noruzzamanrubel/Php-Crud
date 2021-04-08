<?php 
require 'connect.php';

$name = $_POST['name'];
$roll = $_POST['roll'];
$dob = $_POST['dob'];

$sql = "INSERT INTO students
		VALUES(NULL, '$name', $roll, '$dob')";

if ( $conn->query($sql) ) {
	session_start();
	$_SESSION['msg'] = 'Student Added Successfully';
	header("Location: index.php");
} else {
	echo "Not inserted";
}