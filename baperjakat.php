<?php  
	session_start();
	if ($_SESSION['id_role'] != 4) {
		header("location: index.php");
	}
	else
	{
		if (!isset($_GET['module']) || $_GET['module']==''){
			$_GET['module']='home'; 
		}	
	?>

	<?php 
		include 'module/templates/head.php'; 
		include 'module/templates/header.php';
		include 'module/baperjakat/templates/leftbar.php';
	?>

	<body class="hold-transition skin-blue sidebar-mini"> 
	  <div class="wrapper">
	  	<?php require_once('module/baperjakat/'.$_GET['module'].'.php'); ?>
	  </div> 
	</body>

<?php } ?> 