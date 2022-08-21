<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$mail.">\r\n";

$recepient = "nimai.leuenberger@gmail.com";

mail($recepient, $subject, $message, $mailheader) or die("Error!");

echo"message sent";

?>