<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DataPegawai";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE data_pegawai (
		id_pegawai INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nama VARCHAR(250) NOT NULL,
		email VARCHAR(50) NOT NULL,
		id_jabatan VARCHAR(2) NOT NULL
		)";

if ($conn->query($sql) === TRUE) {
  echo "Table data_pegawai created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>