<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Database_Auditi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE liga (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		kode VARCHAR(3) NOT NULL,
		negara VARCHAR(30) NOT NULL,
		champion int(3)
		)";

if ($conn->query($sql) === TRUE) {
  echo "Table liga created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>