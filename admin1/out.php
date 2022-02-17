<?php 
session_start();


if (isset($_POST['logout'])) {
	# code...
	session_destroy();
	header("location:../index-2.html");
}




?>