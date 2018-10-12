<?php
$to     = 'email';
$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['subject'];
$body = $_POST['message'];
$subject = 'New Inquiry';
$message = "New inquiry from " . $name . " (". $email ."): " . $body; //input subject
$headers = 'From: hello@annabellegoldsworthy.com' . "\r\n" .
    'Reply-To: hello@annabellegoldsworthy.com' . "\r\n" .
    'X-Mailer: PHP/' .phpversion();

if(mail($to, $subject, $message, $headers)){
    header("Location: ***");
} else {
    echo "Oops. It seems as though there was an error and your message failed to send";
}
?>
