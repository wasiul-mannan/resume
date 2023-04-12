<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'your_email@example.com';
    $subject = 'New message from your website';
    $body = "Name: $name\nPhone: $phone\nEmail: $email\nSubject: $subject\nMessage: $message";

    if(mail($to, $subject, $body)) {
        header('Location: index.html');
    } else {
        header('Location: index.html');
    }
}

?>
