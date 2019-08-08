<?php 
include 'module/koneksi.php';

$username = $_POST['username'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];	
$nama_jabatan = $_POST['nama_jabatan'];	
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$unit_kerja = $_POST['unit_kerja'];
$instansi_kerja = $_POST['instansi_kerja'];
$alamat = $_POST['alamat'];

$tgl = date('Y-m-d');

if ($tanggal_lahir > $tgl) { ?>
	<script type="text/javascript">
		alert('Tanggal Lahir Tidak Valid');
		history.go(-1);
	</script>
<?php } else {
	$query = mysqli_query($koneksi, "UPDATE pegawai SET `nama_pegawai`='$nama', `jabatan`='$jabatan', `nama_jabatan`='$nama_jabatan',  `tempat_lahir`='$tempat_lahir',  `tanggal_lahir`='$tanggal_lahir', `jk`='$jk',  `agama`='$agama', `unit_kerja`='$unit_kerja', `instansi_kerja`='$instansi_kerja',  `alamat`='$alamat' WHERE `id_pegawai`='$username'");
if (!$query) {
	die("Perubahan gagal");
}
echo "<script>window.location.href = '?module=profile';</script>";
}
?>