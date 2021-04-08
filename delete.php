<?php 

$id = $_GET['id'];

require 'connect.php';

$sql = "DELETE FROM students WHERE id = $id";


if ( $conn->query($sql) ) {
	session_start();
	$_SESSION['msg'] = 'Deleted Successfully.';
	header("Location: index.php");
}