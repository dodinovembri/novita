<?php
	include 'module/koneksi.php'; 

	$nama_aspek = $_POST['nama_aspek'];
	$bobot = $_POST['bobot'];
	$bobot_core = $_POST['bobot_core'];
	$bobot_secondary = $_POST['bobot_secondary'];
	$nama_singkat = $_POST['nama_singkat'];	
	

	$query_insert = mysqli_query($koneksi, "INSERT INTO aspek (`nama_aspek`, `bobot`, `bobot_core`,  `bobot_secondary`, `nama_singkat`) VALUES ('$nama_aspek', '$bobot', '$bobot_core', '$bobot_secondary', '$nama_singkat')");

	echo "<script>window.location.href = '?module=aspek';</script>";
	
?>