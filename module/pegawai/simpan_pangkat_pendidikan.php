<?php 
include 'module/koneksi.php';

$username = $_POST['username'];
$pangkat = $_POST['pangkat'];
$pendidikan = $_POST['pendidikan'];	

$q = mysqli_query($koneksi, "SELECT * FROM pangkat_pendidikan WHERE id_pegawai='$username'");
if (mysqli_num_rows($q)) {
	$query = mysqli_query($koneksi, "UPDATE pangkat_pendidikan SET `pangkat`='$pangkat', `pendidikan`='$pendidikan' WHERE `id_pegawai`='$username'");
	if (!$query) {
		die("Perubahan gagal");
	}
	echo "<script>window.location.href = '?module=home';</script>";	
}
else{
	$i = mysqli_query($koneksi, "INSERT INTO pangkat_pendidikan (`id_pegawai`, `pangkat`, `pendidikan`) VALUES ('$username', '$pangkat', '$pendidikan')");
	$queryy = mysqli_query($koneksi, "UPDATE pegawai SET `status`='after_upload' WHERE `id_pegawai`='$username'");
	if (!$i) {
		die("Penyimpanan gagal");
	}
	echo "<script>window.location.href = '?module=home';</script>";		
}


?>