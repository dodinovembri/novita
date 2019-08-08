<?php
	include 'module/koneksi.php';

	$username = $_GET['username'];

	$query_pegawai = mysqli_query($koneksi, "DELETE FROM `pangkat_pendidikan` where `id_pegawai`='$username'");
	$query_pegawai = mysqli_query($koneksi, "DELETE FROM `pegawai` where `id_pegawai`='$username'");
	
	$query = "DELETE FROM `user` where `username`='$username'";
	$hasil = mysqli_query($koneksi,$query);
	
	if (!$hasil)
		die ("Penghapusan gagal!!!");
	
	echo "<script>window.location.href = '?module=pegawai_2';</script>";

?>