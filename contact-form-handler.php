<?php
  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate input values
    if (empty($name) || empty($email) || empty($message)) {
      echo "Please fill out all fields.";
      exit;
    }

    // Send email
    $to = "vedantbadiger7@gamil.com"; // Replace with your email
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
      echo "Thank you for contacting us!";
    } else {
      echo "Error sending email.";
    }
  }
?>
