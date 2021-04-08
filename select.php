<?php

$conn = new mysqli('localhost', 'root', '', 'school');

$sql = "SELECT * FROM students";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['id'].' Name :'.$row['name'].'</br>';
}
