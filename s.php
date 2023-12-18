<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Your email address where you want to receive messages
    $to = "aimanhussain378@gmail.com";

    // Subject of the email
    $subject = "New Contact Form Submission";

    // Email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $body);

    // Optionally, you can redirect the user to a thank you page
    header("Location: thank_you.html");
    exit;
}

?>
