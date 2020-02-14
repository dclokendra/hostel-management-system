<?php 
	require_once"class/admin.class.php";
	$admin=new Admin();
	$admin->set('adminID',$_GET['id']);
	$admin->remove();
	header('location:list_user.php');
 ?>