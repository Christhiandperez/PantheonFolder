<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$to = "christhiandperez@gmail.com";

	$email_subject = "New Form Submission";

	mail($to, $email_subject, $message, "From: " . $name);

	echo "Your Message has been sent"; 
?>