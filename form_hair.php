<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mobno = $_POST['mobno'];
$messege = $_POST['messege'];


$email_from = 'info@mirrorunisexsaloon.in';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email Address: $email.\n".
              "User Mobile No: $mobno.\n".
              "User Messege: $messege.\n";

$to = 's8699632@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: hair_care.html");


?>