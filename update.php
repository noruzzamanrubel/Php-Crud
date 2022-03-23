<?php

$id = $_GET['id'];

$name = $_POST['name'];
$roll = $_POST['roll'];
$dob  = $_POST['dob'];

require 'connect.php';

$sql = "UPDATE students
		SET name = '$name', roll = $roll, dob = '$dob'
		WHERE id = $id ";

if ( $conn->query( $sql ) ) {
    session_start();
    $_SESSION['msg'] = 'Update Successfully.';
    header( "Location: show.php?id=" . $id );
}
