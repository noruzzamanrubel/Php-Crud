<?php

$conn = new mysqli('localhost', 'root', '', 'school');

$sql = "INSERT INTO students VALUES(NuLL, 'Karim', 18, 3.28, 17, '2002-25-30');";

if ($conn->query($sql)) {
    echo "Information Inserted Successfully";
} else {
    echo "Information Not Inserted ";
}
