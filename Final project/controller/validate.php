<?php 
	session_start();
	if(!ISSET($_SESSION['admin_id'])){
		header("location:../view/index.php");
	}
?>