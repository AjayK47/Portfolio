<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "ajaykommineni8@gmail.com";  // Replace with your email address
    $subject = "New Form Submission";
    $headers = "From: $email";

    $mailBody = "Name: $name\nEmail: $email\nMessage:\n$message";

    mail($to, $subject, $mailBody, $headers);
}
?>
