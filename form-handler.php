<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$ubject = $_POST['subject'];
$message = $_POST['message'];

$email_from= 'destinyparra@hotmail.com';

$email_subject= 'New Submission Form';

$email_body= "User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject.\n".  
             "User Message: $message.\n";


$to = 'destinyparra@hotmail.com';

$headers = "From: $email_from \r\n";

$headers .="Reply to: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html"); #where you want to direct the user after submitting the form



?>

    <!-- have to upload a website to an php server to have this working oor else it just directs you to a text pad-->