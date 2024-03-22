<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];

$email_form = 'tech@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "UserMassage: $massage.\n";



$to = 'tarnumsayyad.1054@gmail.com';

$headers = "Form:$email_form\r\n";


$headers .= "Replay-to:$visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>
