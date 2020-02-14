<?php 
	require_once"class/room.class.php";
	$room=new Room();
	$room->set('roomID',$_GET['id']);
	$room->remove();
	header('location:roomreports.php');
 ?>