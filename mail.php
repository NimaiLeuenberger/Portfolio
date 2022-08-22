<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "nimai.leuenberger@gmail.com";
$body = "";

$body .= "From: ".$name. "\r\n";
$body .= "Email: ".$mail. "\r\n";
$body .= "Message: ".$message. "\r\n";

mail($to, $subject, $body);

?>