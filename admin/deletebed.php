<?php 
	require_once"class/bed.class.php";
	$bed=new Bed();
	$bed->set('bedID',$_GET['id']);
	$bed->remove();
	header('location:bedlists.php');
 ?>