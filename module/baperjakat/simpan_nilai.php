<?php  
	include 'module/koneksi.php';

	$id_pegawai = $_POST['id_pegawai'];
	$nama = $_POST['nama'];

	//untuk kompetensi teknis
	$diklat_teknis = $_POST['diklat_teknis'];
	$diklat_PIM = $_POST['diklat_PIM'];
	$pengalaman_jabatan = $_POST['pengalaman_jabatan'];
	$hukuman_disiplin = $_POST['hukuman_disiplin'];
	$usia = $_POST['usia'];
	$lama_bekerja = $_POST['lama_bekerja'];
	
	//untuk kompetensi manajerial
	$integritas = $_POST['integritas'];
	$kerja_sama = $_POST['kerja_sama'];
	$komunikasi = $_POST['komunikasi'];
	$orientasi_hasil = $_POST['orientasi_hasil'];
	$pelayanan_publik = $_POST['pelayanan_publik'];
	$pengembangan_diri = $_POST['pengembangan_diri'];
	$mengelola_perubahan = $_POST['mengelola_perubahan'];
	$pengambilan_keputusan = $_POST['pengambilan_keputusan'];
	
	
	//untuk kompetensi sosial kulutural	
	$perekat_bangsa = $_POST['perekat_bangsa'];
	$empati = $_POST['empati'];
	$interaksi = $_POST['interaksi'];
	

	$array_nilai = [$diklat_teknis, $diklat_PIM, $pengalaman_jabatan, $hukuman_disiplin, $usia, $lama_bekerja, $integritas, $kerja_sama, $komunikasi, $orientasi_hasil, $pelayanan_publik, $pengembangan_diri, $mengelola_perubahan, $pengambilan_keputusan,  $perekat_bangsa,  $empati, $interaksi ];

	$update_status = mysqli_query($koneksi, "UPDATE pegawai set `status`='sudah' where `id_pegawai`='$id_pegawai'");

	$b = 0;
	foreach ($array_nilai as $key => $value) {
	$b++;
	$query = mysqli_query($koneksi, "INSERT INTO alternatif (`pegawai`, `kriteria`, `nilai`) VALUES ('$id_pegawai', '$b', '$value')");
	}



	echo "<script>window.location.href = '?module=input_nilai';</script>";

?>
