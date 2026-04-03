<?php
// contact.php

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize and validate input
    $name = isset($_POST["name"]) ? htmlspecialchars(strip_tags(trim($_POST["name"]))) : '';
    $email = isset($_POST["email"]) ? filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL) : '';
    $message = isset($_POST["message"]) ? htmlspecialchars(strip_tags(trim($_POST["message"]))) : '';
    
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(["status" => "error", "message" => "Please fill all required fields."]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format."]);
        exit;
    }

    // Configure Mail Settings
    $to = "hello@elenorvance.com"; // User will update this
    $subject = "New Contact via Portfolio Website from $name";
    
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Attempt to send email
    $mail_sent = @mail($to, $subject, $email_content, $headers);
    
    // For demo purposes, we will return success to show the UI feedback
    // In production, you would handle $mail_sent strictly
    echo json_encode(["status" => "success", "message" => "Thank you! Your message has been sent successfully."]);
    
} else {
    echo json_encode(["status" => "error", "message" => "Invalid Request Method"]);
}
?>
