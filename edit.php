<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Pegawai</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<h1 align="center" style="margin-top: 20px">Edit Data Pegawai</h1>

<?php
$conn = mysqli_connect("localhost","root","","datapegawai");

$sql=mysqli_query($conn,"SELECT * FROM data_pegawai, jabatan WHERE data_pegawai.id_jabatan = jabatan.id_jabatan and data_pegawai.id_pegawai='$_GET[update]'");

$isidata = mysqli_fetch_array($sql);
?>

<form method="POST">
	<table cellpadding="10" align="center" style="margin-top: 20px">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $isidata['nama']; ?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="<?php echo $isidata['email']; ?>"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>
				<select name="id_jabatan">
					<?php
					echo "<option value=$isi2[id_jabatan]> $isidata[status_jabatan]";
					$conn = mysqli_connect("localhost","root","","datapegawai");
					$sc2 = mysqli_query($conn,"SELECT * FROM jabatan") or die (mysqli_error($conn));
					while ($isi2 = mysqli_fetch_array($sc2)) {
						echo "<option value=$isi2[id_jabatan]> $isi2[nama_jabatan]</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Cek data dengan benar<br>Sudah benar? klik Edit</td>
			<td><input type="submit" value="Edit Data" class="btn btn-outline-warning" name="simpan"></td>
		</tr>
	</table>
</form>
<?php
if (isset($_POST['simpan'])) {
	mysqli_query($conn,"UPDATE data_pegawai set nama = '$_POST[nama]', email = '$_POST[email]', id_jabatan = '$_POST[id_jabatan]' WHERE id_pegawai=$_GET[update]")  or die(mysqli_error($conn));

	echo "<script>alert('Tambah Data Berhasil')</script>";
}
?>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>