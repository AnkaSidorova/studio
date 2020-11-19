<?php
// Check for empty fields
if (empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['message'])) {
    http_response_code(500);
    exit();
}


$name = strip_tags(htmlspecialchars($_POST['name']));
$email = "anya_sidorova_2015@bk.ru";
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = "anya_sidorova_2015@bk.ru";
$subject = "Website Contact Form:  $name";
$body = "You have received a new message from your website contact form.\n\n" . "Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
$header = "From: noreply@yourdomain.com\n";
$header .= "Reply-To: $email";

//wp_mail( $to, $subject, $message, $header);
if (!mail($to, $subject, $body, $header))
    http_response_code(500);
?>
