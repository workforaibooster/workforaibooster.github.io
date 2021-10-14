<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@aibooster.com';

$email_subject = 'New Submission Form';

$email_body = "User name: $name.\n".
              "User email: $visitor_email.\n".
              "User subject: $subject.\n".
              "User subject: $message.\n";
            
$to = 'rgixpro@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Replay-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")
?>