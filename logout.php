<?php
	session_start();
	session_destroy();
 
	// if (isset($_COOKIE["logininfo"]) AND isset($_COOKIE["loginpassword"])){
	// 	setcookie("logininfo", '', time() - 60*60*24*30);
	// 	setcookie("loginpassword", '', time() - 60*60*24*30);
	// }
 
	header('location:index.php');
 
?>