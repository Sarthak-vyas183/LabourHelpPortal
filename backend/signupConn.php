<?php
require("dbconnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sname = $_POST['sname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $contact = $_POST['contact'];
    $userType = $_POST['userType'];
    $skilled = $_POST['skilled'];
    $skillname = $_POST['skillname'];

    // Check if the email already exists
    $checkEmailQuery = "SELECT * FROM signup WHERE email = ?";
    $stmtEmail = $conn->prepare($checkEmailQuery);
    $stmtEmail->bind_param("s", $email);
    $stmtEmail->execute();
    $resultEmail = $stmtEmail->get_result();

    // Check if the contact number already exists
    $checkContactQuery = "SELECT * FROM signup WHERE contact = ?";
    $stmtContact = $conn->prepare($checkContactQuery);
    $stmtContact->bind_param("s", $contact);
    $stmtContact->execute();
    $resultContact = $stmtContact->get_result();

    if ($resultEmail->num_rows > 0) {
        // Email already exists, show a prompt
        echo "<script>alert('Email already in use. Please use a different email.'); window.location.href='../register.php';</script>";
    } elseif ($resultContact->num_rows > 0) {
        // Contact number already exists, show a prompt
        echo "<script>alert('Contact number already in use. Please use a different contact number.'); window.location.href='../register.php';</script>";
    } else {
        // Neither email nor contact exists, proceed with registration
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $send = "INSERT INTO signup VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($send);
        $stmt->bind_param("sssssss", $sname, $email, $hash, $contact, $userType, $skilled, $skillname);

        if ($stmt->execute()) {
            echo "<script>alert('Registered successfully'); window.location.href='../index.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}
?>
