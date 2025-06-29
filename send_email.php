<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "akaiandrei825@gmail.com"; // Schimbă cu adresa ta de email
    $subject = $_POST["subject"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $fullMessage = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Invalid request.";
}
?>
