<?php
	include 'module/koneksi.php'; 

	$username = $_GET['username'];
	echo $username;
	
	$query_insert = mysqli_query($koneksi, "UPDATE pegawai SET `status`='acc_admin' where `id_pegawai`='$username'");

	echo "<script>window.location.href = '?module=pegawai';</script>";
	
?>