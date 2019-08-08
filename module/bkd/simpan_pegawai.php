<?php
	include 'module/koneksi.php'; 

	$id_pegawai = $_POST['id_pegawai'];
	$id_role = $_POST['id_role'];
	// $pangkat = $_POST['pangkat'];
	// $pendidikan = $_POST['pendidikan'];
	// $jk = $_POST['jk'];
	$password = md5($_POST['password']);	
	

	$query_cek = "SELECT * FROM user WHERE username='$id_pegawai'";
	$hasil_cek = mysqli_query($koneksi, $query_cek);

	while ($id_pegawai_d = mysqli_fetch_array($hasil_cek)) {
		$id_pegawai_db = $id_pegawai_d['id_pegawai'];
	}
	
	if ($id_pegawai_db == $id_pegawai) {
		echo "<script>
					window.alert('Data user Sudah Ada Dalam Database');
					window.location.href = '?module=tambah_pegawai';
			 </script>";
	}
	else{
		
		$query_user = mysqli_query($koneksi, "INSERT INTO user (`username`, `password`, `role`) VALUES ('$id_pegawai', '$password', '$id_role')");
		$query_pegawai = mysqli_query($koneksi, "INSERT INTO pegawai (`id_pegawai`) VALUES ('$id_pegawai')");
		

		echo "<script>					
					window.location.href = '?module=pegawai_2';
			 </script>";
	}
	
?>