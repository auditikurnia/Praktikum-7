<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DataPegawai";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE jabatan (
		id_jabatan VARCHAR(2) PRIMARY KEY,
		nama_jabatan VARCHAR(50) NOT NULL
		)";

if ($conn->query($sql) === TRUE) {
  echo "Table jabatan created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>