<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}

require("dbconnect.php");

$userEmail = $_SESSION['email'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$userType = $_POST['userType'];
$SkillName = $_POST['skillNm'];

$sql = "UPDATE signup SET sname = ?, contact = ?, usrTyp = ?, skillNm = ? WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $contact, $userType, $SkillName, $userEmail);

if ($stmt->execute()) {
    echo "<script>alert('Your Profile Update successfully');</script>";
    header("Refresh: 0; URL= ../index.php");
    exit;
} else {
    echo "Error updating profile.";
}
?>
