<?php
	session_start();
	unset($_SESSION['admin']['username']);
	setcookie('adminusername','',time()-1,'/');
	//session_destroy();
	header("location:../index.php");
?>