<?php 
	session_start();
	$fname=$_SESSION['fullname'];
	$uid=$_SESSION['uid'];
	if(!(isset($uid)))
	{
		header('location:index.php');
	}
?>