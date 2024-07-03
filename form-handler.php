<?php

$name=$_POST('name');
$visitors_email= $_POST('email');
$subject= $_POST('subject');
$message= $_POST('message');

$email_from='contact@miauniversity.com';
$email_subject='New Form Submission';
$email_body="User name: $name.\n".
             "User email: $visitors_email.\n".
             "Subject: $subject.\n".
             "User Message: $message.\n;";
   
$to='belindabiwott19@gmail.com';

$headers="From: $email_from \r\n";
$headers.= "Reply-to:  $visitors_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header('Location: contact.html');
?>