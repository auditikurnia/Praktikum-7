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

$sql = "INSERT INTO data_pegawai (id_pegawai, nama, email, id_jabatan)
				VALUES
				('1','Audita Kurnianingrum','audita.ak@gmail.com','1'),
				('2','Auditi Kurnia Wijayanti','21082010013@student.upnjatim.ac.id','2')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>