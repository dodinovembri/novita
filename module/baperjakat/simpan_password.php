<?php 
include 'module/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);


$query = mysqli_query($koneksi, "UPDATE user SET `password`='$password' WHERE `username`='$username'");
if (!$query) {
	die("Perubahan gagal");
}
echo "<script>window.location.href = '?module=home';</script>";
?>