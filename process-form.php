<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form input values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Email details
    $to = 'satwikdpshrit@gmail.com';
    $subject = 'New Contact Message';
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    // Send email
    if(mail($to, $subject, $body)) {
        echo 'Message sent successfully.';
    } else {
        echo 'Error sending message.';
    }
}
?>
