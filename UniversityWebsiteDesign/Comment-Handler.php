<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$comment = $_POST['comment'];

$email_from = 'info@aibooster.com';

$email_subject = 'New Comment';

$email_body = "User name: $name.\n".
              "User email: $visitor_email.\n".
              "User Comment: $comment.\n";
            
$to = 'rgixpro@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Replay-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: Blog.html")
?>