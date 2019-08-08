<?php
	include 'module/koneksi.php';

	$id_kriteria = $_GET['id_kriteria'];

	$query_hapus = mysqli_query($koneksi, "DELETE FROM `kriteria` where `id_kriteria`='$id_kriteria'");
	
	if (!$query_hapus)
		die ("Penghapusan gagal!!!");
	
	echo "<script>window.location.href = '?module=kriteria';</script>";

?>