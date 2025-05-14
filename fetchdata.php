<?php

$conn = new mysqli("localhost", "root", "", "mydatabase");

if ($conn->connect_error) die("Connection failed!!" . $conn->connect_error);

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Username: " . $row["username"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No users found <br>";
}

$conn->close();
