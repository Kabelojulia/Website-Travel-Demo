<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$number = $_POST['number'];
$date = $_POST['date'];

$email_from = "hello@inchubplk.co.za";

$email_subject = 'New Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n"
              "Subject: $subject.\n"
              "Number: $number.\n"
              "Date: $date.\n";

$to = 'plkinchub@gmail.com';

$headers = "From: $email_from \r\n"; 

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html")         
?>