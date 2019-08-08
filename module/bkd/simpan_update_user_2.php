<?php 
include 'module/koneksi.php';
$username = $_POST['username'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$jk = $_POST['jk'];
$pangkat_golongan = $_POST['pangkat'];
$pendidikan = $_POST['pendidikan'];
$jabatan = $_POST['jabatan'];	
$password = md5($_POST['password']);

if($_POST['upload']){
	$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
	$nama_photo = $_FILES['file']['name'];
	$x = explode('.', $nama_photo);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	

	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 1044070){			
			move_uploaded_file($file_tmp, 'assets/photo_profil/'.$nama_photo);
			$query = mysqli_query($koneksi, "UPDATE pegawai SET `nama_pegawai`='$nama',  `tempat_lahir`='$tempat_lahir',  `tanggal_lahir`='$tanggal_lahir',  `alamat`='$alamat',  `agama`='$agama',  `jk`='$jk', `pangkat_golongan`='$pangkat_golongan',  `pendidikan`='$pendidikan' WHERE `id_pegawai`='$username'");
			$query_user = mysqli_query($koneksi, "UPDATE user SET `nama`='$nama', `jabatan`='$jabatan', `photo`='$nama_photo', `password`='$password' WHERE `username`='$username' ");

			if($query){
				echo "<script>window.location.href = '?module=home';</script>";
			}else{
				echo "<script>
								window.alert('Data Gagal di Upload');
								window.location.href = '?module=profile';
	 					</script>";
			}
		}else{
			echo 'UKURAN FILE TERLALU BESAR';
		}
	}else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	}
}
?>