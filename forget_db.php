<?php
	require_once 'server.php';
	if(ISSET($_POST['forget'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password_1 = $_POST['password_1'];
		$password_2 = $_POST['password_2'];
		mysqli_query($conn,"UPDATE `user` SET , `username` = '$username', `email` ='$email', `password_1` = '$password_1', `password_2` = '$password_2' WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		header("location:forget.php");
	}	