<?php 
	$_POST['emailAddress'] = "beccahmuir@yahoo.com";
	$to = "beccahmuir@yahoo.com";
	$subject = "test";
	$body = "This is a test email.";
	$headers = "From: " . $_POST['emailAddress'] . "\n";
	mail($to,$subject,$body,$headers);
?>