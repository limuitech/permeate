<?php
	include "../demon.php";
	include "../../conf/dbconfig.php";
	include "../../includes/mysql_func.php";
	include "../../includes/del_func.php";


	if(empty($_SERVER['HTTP_REFERER'])){
		exit('非法请求！');
	}
	
	$id = @$_REQUEST['id'];
	$zd = @$_REQUEST['zd'];
	$table = @$_REQUEST['table'];
	
	if(!empty($id)&&!empty($zd)&&!empty($table)){
		del($id,$zd,$table);
	}
	
	if(!$row){
		echo "<script>alert('删除用户失败，请稍后再试'!)</script>";
		echo "<script>window.location.href='../index.php?m=fri&a=list'</script>";
		exit;
	}
	echo "<script>window.location.href='../index.php?m=fri&a=list'</script>";
	exit;
?>