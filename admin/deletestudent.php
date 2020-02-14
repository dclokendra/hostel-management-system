<?php 
	require_once"class/student.class.php";
	$student=new Student();
	$student->set('studentID',$_GET['id']);
	$student->remove();
	header('location:studentreports.php');
 ?>