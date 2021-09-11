<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$visitor_email = $_POST['visitor_email'];
$mobile_number = $_POST['mobile_number'];
$visitor_address = $_POST['visitor_address'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'contact@sujandarji.com.np';

$email_subject = 'Philomath | contact form submission';

$email_body = "User first_Name: $first_name.\n".
              "User last_Name: $last_name.\n".
              "User email: $visitor_email.\n".
              "User mobile_number: $mobile_number.\n".
              "User address: $visitor_address.\n".
              "Subject: $subject.\n".
              "User message: $message.\n";


$to = 'sujan.official.work.214@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");


?>