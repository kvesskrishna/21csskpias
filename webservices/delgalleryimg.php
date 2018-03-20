<?php
session_start();
require_once('dbconfig.php');
$sql="DELETE FROM kpias_galleryimg WHERE img_id=".$_POST['img_id'];
$res=$mysqli->query($sql);
if ($res) {
	# code...
	$_SESSION['message']="Gallery Image delete successfully!";
	header('Location:'.$_SERVER['HTTP_REFERER']);
}
?>