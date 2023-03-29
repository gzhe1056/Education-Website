<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_sender = 'info@emailfromdomain.com';
$email_subject = 'New Submission';
$email_body = "User Name: $name.\n".
              "User Email: $email.\n".
              "UserSubject: $subject.\n".
              "User Message: $message.\n";

$recipient = 'gzhe1056@gmail.com';
$headers = "From: $email_sender \r\n";
$headers. = "Reply: $email \r\n";

mail($recipient,$email_subject, $email_body, $headers);

header("Location: contact.html");
?>