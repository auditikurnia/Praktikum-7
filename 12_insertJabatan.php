<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DataPegawai";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error);
}

$sql = "INSERT INTO jabatan (id_jabatan, nama_jabatan)
				VALUES
				('1','Direktur'),
				('2','Manager'),
				('3','Admin')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>