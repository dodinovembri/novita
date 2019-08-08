<?php  
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

	$id_role = "";
	while ($row = mysqli_fetch_array($query)) {
		$id_role = $row['role'];
		echo $id_role;
	}

	if ($id_role == 1) {
		session_start();
		$_SESSION["username"] = $username;	
		$_SESSION['id_role'] = 1;
		
		header("location: ../pegawai.php");
	}
	else if ($id_role == 2) {
		session_start();
		$_SESSION["username"] = $username;	
		$_SESSION['id_role'] = 2;	
		header("location: ../pimpinan.php");
	}
	else if ($id_role == 3) {
		session_start();
		$_SESSION["username"] = $username;	
		$_SESSION['id_role'] = 3;	
		header("location: ../bkd.php");
	}
	else if ($id_role == 4) {
		session_start();
		$_SESSION["username"] = $username;	
		$_SESSION['id_role'] = 4;	
		header("location: ../baperjakat.php");
	}
	else{
		header("location: ../index.php");		
	}
?>