<?php

$myemail = 'adolfolimonc@gmail.com';
$subject = 'Nueva reservacion';


$date    = $_POST['date'];
$email   = $_POST['email'];
$time    = $_POST['time'];
$persons = $_POST['persons'];

function sendEmail($subject,$myemail,$me)
// $to            = $myemail;
// $email_subject = "Table reservation";
// $email_body    = "\n Date: $date \n Email: $email \n Subject: Table reservation \n Time: $time \n People: $persons";
// $headers       = "From: $email";
 
// mail($to, $email_subject, $email_body, $headers);

?>