<?php
if (isset($_POST["submit"])) {

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$from = "Play Your Way Contact Form"; 
$to = "castlecarlin@gmail.com"; 
$subject = "Message from Play Your Way Contact Form";
$body = "From: $name\n E-Mail: $email\n Message:\n $message";

//error handling
//for name, just looking for text
if (!$_POST["name"]) {
    $errName = "Please enter your name";
}
//for email, check that it is a valid email address
if (!$_POST["email"] || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errEmail = "Please enter a valid email address";
}
//make sure the message is not blank
if (!$_POST["message"]) {
    $errMessage = "Please enter your message";
}

//if no errors, send email
if (!$errName && !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}

}
?>