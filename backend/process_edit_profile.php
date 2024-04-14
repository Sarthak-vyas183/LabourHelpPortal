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
$description = $_POST['description'];
$city = $_POST['city'];

$sql = "UPDATE signup SET sname = ?, contact = ?, usrTyp = ?, skillNm = ?, description = ?, city = ? WHERE email = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sssssss", $name, $contact, $userType, $SkillName, $description, $city, $userEmail);

    if ($stmt->execute()) {
        echo "<script>alert('Your Profile Update successfully');</script>";
        header("Refresh: 0; URL=../welcome.php");
        exit;
    } else {
        echo "Error updating profile.";
    }
} else {
    echo "Error preparing statement: " . $conn->error;
}
?>
