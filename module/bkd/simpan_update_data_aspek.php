<?php
	include 'module/koneksi.php'; 

	$id_aspek = $_POST['id_aspek'];
	$nama_aspek = $_POST['nama_aspek'];
	$bobot = $_POST['bobot'];
	$bobot_core = $_POST['bobot_core'];
	$bobot_secondary = $_POST['bobot_secondary'];
	$nama_singkat = $_POST['nama_singkat'];
      			

	$query_insert = mysqli_query($koneksi, "UPDATE aspek SET `nama_aspek`='$nama_aspek', `bobot`='$bobot', `bobot_core`='$bobot_core', `bobot_secondary`='$bobot_secondary', `nama_singkat`='$nama_singkat'  where `id_aspek`='$id_aspek'");

	echo "<script>window.location.href = '?module=aspek';</script>";
	
?>