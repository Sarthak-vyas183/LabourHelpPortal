<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'], $_POST['email'], $_POST['msg'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['msg'];

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'vedant999vyas@gmail.com';
        $mail->Password   = 'bsqq ljje yhih dacz';                               //SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('vedant999vyas@gmail.com', 'contact form');
        $mail->addAddress('vyassarthak183@gmail.com');
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "Name: $name\nEmail: $email\nMessage:\n$message";

        // Enable debugging
      
        $mail->Debugoutput = function($str, $level) { echo "debug level $level; message: $str"; };

        if ($mail->send()) {
            echo "<script>alert('Submit Successfully ! We will contact with you Soon'); window.location.href='contact.php';</script>";

            exit;
        } else {
            echo "Email sending failed: " . $mail->ErrorInfo;
        }
    } else {
        echo "All form fields are required!";
    }
} else {
    header("Location: index.php");
    exit;
}
?>
