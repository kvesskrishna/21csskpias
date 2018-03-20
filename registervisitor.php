<?php
session_start();
if(isset($_POST['register'])){
	require_once('webservices/dbconfig.php');
	$sql="INSERT INTO registered_visitors" (fullname, email, contact, course) VALUES ('{$_POST['fullname']}','{$_POST['email']}','{$_POST['contact']}','{$_POST['course']}');
	$res=$mysqli->query($sql);
	if($res) {
		$_SESSION['visitor-registered']=1;
		header('Location:visitor-registration.php');
	}
}
?>