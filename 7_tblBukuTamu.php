<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BukuTamu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE buku_tamu (
		id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nama VARCHAR(200) NOT NULL,
		email VARCHAR(50) NOT NULL,
		isi text NOT NULL
		)";

if ($conn->query($sql) === TRUE) {
  echo "Table buku_tamu created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>