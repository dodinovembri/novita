<?php
	include 'module/koneksi.php'; 

	$aspek = $_POST['id_aspek'];
	$nama_kriteria = $_POST['nama_kriteria'];
	$target = $_POST['target'];
	$jenis = $_POST['jenis'];
	

	$query_insert = mysqli_query($koneksi, "INSERT INTO kriteria (`aspek`, `nama_kriteria`, `target`,  `jenis`) VALUES ('$aspek', '$nama_kriteria', '$target', '$jenis')");

	echo "<script>window.location.href = '?module=kriteria';</script>";
	
?>