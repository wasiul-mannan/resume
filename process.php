<?php
// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Validate and sanitize the form data
$name = filter_var($name, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$phone = filter_var($phone, FILTER_SANITIZE_STRING);
$message = htmlspecialchars($message);

// Construct the email message
$to = "wasiul@atmotechisf.co";
$subject = "New Contact Message";
$body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

// Send the email
if (mail($to, $subject, $body)) {
    // Email sent successfully
    header("Location: contact.php?status=success");
} else {
    // Email failed to send
    header("Location: contact.php?status=error");
}
?>
