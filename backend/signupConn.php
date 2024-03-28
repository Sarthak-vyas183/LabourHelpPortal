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

        $hash = password_hash($pass, PASSWORD_DEFAULT);

        $send = "insert into signup values('".$sname."','".$email."','".$hash."','".$contact."' ,'".$userType."' , '".$skilled."','".$skillname."')";
       
        if($conn->query($send) === TRUE) {
            echo "<script>alert('Registered successfully'); window.location.href='../index.php';</script>";
        } else {
            echo "error" . mysqli_error($conn);
             
        };

    }
?>