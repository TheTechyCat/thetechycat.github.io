<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["firstname"];
    $message = $_POST["subject"];
    
    $to = "abhijitacosta@outlook.com"; // Replace with your email address
    $subject = "New Contact From TheTechyCat";
    $body = "Name: $firstName\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Thank you, $firstName! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
