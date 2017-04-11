<?php
$name = $_POST['name'];
$email = $_POST['email'];

$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "reynaalevine@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";

if(grecaptcha.getResponse() == "6LfrLhATAAAAAN6MKQIhX5YSMhH9LvBkR2wgSS0g")
    alert("You can't proceed!");
else
    alert("Thank you");
?>


