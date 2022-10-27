<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'kruthikbhupal7@gmail.com';
$email_subject = 'New form submission'
$email_body = "User Name: $name. \n";
              "User Email: $visitor_email. \n";
              "User Subject: $subject. \n";
              "User Message: $message. \n";
$to = '1da19cs077.cs@drait.edu.in'
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>