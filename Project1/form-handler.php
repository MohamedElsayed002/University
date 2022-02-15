<?php 
$name = $_POST['name'];
$visitior_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n" .
                "User Email": $visitior_email.\n".
                "Subject: $subject.\n".
                "User Message: $message .\n";

$to = 'mohamed.madoo2016@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitior_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html.html");

?>