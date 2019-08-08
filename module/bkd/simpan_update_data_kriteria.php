<?php
	include 'module/koneksi.php'; 

	$id_kriteria = $_POST['id_kriteria'];
	$aspek = $_POST['id_aspek'];
	$nama_kriteria = $_POST['nama_kriteria'];
	$target = $_POST['target'];
	$jenis = $_POST['jenis'];
	

	$query_insert = mysqli_query($koneksi, "UPDATE kriteria SET `aspek`='$aspek', `nama_kriteria`='$nama_kriteria', `target`='$target', `jenis`='$jenis' where `id_kriteria`='$id_kriteria'");

	echo "<script>window.location.href = '?module=kriteria';</script>";
	
?>