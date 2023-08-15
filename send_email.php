<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "anusuabiswas0@gmail.com";
    $subject = "New Contact Form Submission";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $headers = "From: $name <$email>";
    $success = mail($recipient, $subject, $message, $headers);

    if ($success) {
        $response = array("message" => "Message sent successfully!");
    } else {
        $response = array("message" => "Failed to send message.");
    }

    echo json_encode($response);
}
?>

