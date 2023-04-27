<!DOCTYPE html>
<html>
<head>
	<title>Halaman Data Pegawai</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		.lt:link, .lt:visited {
		  background-color: white;
		  color: black;
		  border: 2px solid blue;
		  padding: 2px 6px;
		  margin-left: 73%;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  border-radius: 5px;
		}

		.lt:hover, .lt:active {
		  background-color: blue;
		  color: white;
		}

		.le:link, .le:visited {
		  background-color: white;
		  color: black;
		  border: 2px solid #d39e00;
		  padding: 3px 18px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  border-radius: 5px;
		}

		.le:hover, .le:active {
		  background-color: #d39e00;
		  color: white;
		}

		.lh:link, .lh:visited {
		  background-color: white;
		  color: black;
		  border: 2px solid red;
		  padding: 3px 10px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  border-radius: 5px;
		}

		.lh:hover, .lh:active {
		  background-color: red;
		  color: white;
		}
	</style>
</head>
<body>
<h1 align="center" style="margin-top: 20px">Data Pegawai</h1>
<a href=tambah.php class=lt>Tambah Data</a>
<table border="2" align="center" style="margin-top: 8px">
	<tr align="center">
		<th width="50" bgcolor="lightpink">No</th>
		<th width="150" bgcolor="lightpink">Nama</th>
		<th width="150" bgcolor="lightpink">Email</th>
		<th width="150" bgcolor="lightpink">Jabatan</th>
		<th colspan="3" bgcolor="lightpink">Action</th>
	</tr>

	<?php
	$conn = mysqli_connect("localhost","root","","datapegawai");

	$nomor=1;
	$ambildata = mysqli_query($conn,"SELECT * FROM data_pegawai, jabatan WHERE data_pegawai.id_jabatan = jabatan.id_jabatan") or die (mysqli_error($conn));
	while($yangtampil = mysqli_fetch_array($ambildata)){
		echo "
		<tr align=center>
			<td>$nomor</td>
			<td>$yangtampil[nama]</td>
			<td>$yangtampil[email]</td>
			<td>$yangtampil[nama_jabatan]</td>
			<td style=padding:10px;>
			<a href='edit.php?update=$yangtampil[id_pegawai]' class=le>Edit</a>
			<a href='?hapus=$yangtampil[id_pegawai]' onClick=\"return confirm('Yakin akan menghapus data?');\" class='lh'>Hapus</a>
			</td>
		</tr>";
		$nomor++;
	}
	?>
</table>

<?php
if (isset($_GET['hapus'])) {
	mysqli_query($conn,"DELETE FROM data_pegawai where id_pegawai='$_GET[hapus]'") or die(mysqli_error($conn));
}
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>