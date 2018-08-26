<?php
	include"class.user.php";
	
	$user = new User();
	
	$user->logout();
	header("Location: index.html");
	
	?>