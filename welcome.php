<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo "<script>alert(' Please Login First !');</script>";
          header("Refresh: 0; URL= index.php");
    exit;
} else {
    echo "
    <style>
        .profilebtn  {
            display:none;
        }
    </style>
    ";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="design.css">
</head>
<body>
   <?php
   require("Navbar.php");
   ?>
   <div id="main">
    <h1> Welcome page : </h1>
   </div>
   <?php
   require("footer.php");
   ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></>
</html>