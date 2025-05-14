<?php

$conn = new mysqli("localhost", "root", "", "mydatabase");

if ($conn->connect_error) die("Connection failed!!" . $conn->connect_error);

$sql = "DELETE FROM users WHERE id = 1";

if($conn->query($sql)) {
    echo "Record deleted!! <br>";
} else {
    echo "Error occurred!! <br>";
}

$conn->close();