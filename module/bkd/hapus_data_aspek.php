<?php
	include 'module/koneksi.php';

	$id_aspek = $_GET['id_aspek'];

	$query_hapus = mysqli_query($koneksi, "DELETE FROM `aspek` where `id_aspek`='$id_aspek'");
	
	if (!$query_hapus)
		die ("Penghapusan gagal!!!");
	
	echo "<script>window.location.href = '?module=aspek';</script>";

?>