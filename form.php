<html>
<head>
<title> Contact Me - fill out the form</title>
</head>
<body>
<h2>Contact Form results</h2>
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	//email formatting
	$to = 'youraddress@youremail.com';
	$subject_full = "$name - $subject";
	$message_full =
		"Name: $name \n " . 
		"Email: $email \n" .
		"Phone Number: $phone \n" .
		"Subject: $subject \n" .
		"Message: $message \n";

	mail($to, $subject, $message_full, 'From: ' . $email);

	echo "The form has been submitted. <br/>";
	echo "<strong>Name:</strong> $name <br/>";
	echo "<strong>Email:</strong> $email  <br/>";
	echo "<strong>Phone Number:</strong> $phone  <br/>";
	echo "<strong>Subject:</strong> $subject  <br/>";
	echo "<strong>Message:</strong><br/> $message  <br/>";
?>

</body>
</html>