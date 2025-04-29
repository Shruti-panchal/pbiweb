<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "powerbankindia1@gmail.com"; // Change this to your receiving email
    $headers = "From: $email\r\nReply-To: $email\r\n";
    $fullMessage = "You have received a new message from $name ($email):\n\nSubject: $subject\n\nMessage:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message. Please try again.";
    }
}
?>
