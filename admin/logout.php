<?php
session_start();

	# code...
	session_unset();
session_destroy();
	header('Location:signin');
?>