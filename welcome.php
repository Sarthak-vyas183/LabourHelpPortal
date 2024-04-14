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
require("./backend/dbconnect.php");

if (isset($_SESSION['email'])) {
    $userEmail = $_SESSION['email']; // Retrieve email from session

    $sql = "SELECT * FROM signup WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $userEmail); // Use "s" for string type
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['sname'];
        $email = $row['email'];
        $contact = $row['contact'];
        $userType = $row['usrTyp'];
        $SkillName = $row['skillNm'];
        $description = $row['description'];
        $city = $row['city'];
        // Fetch other information as needed
    } else {
        echo "User not found!";
    }
} else {
    echo "Email not found in session!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./design.css">
</head>
<body>
   <?php
   require("Navbar.php");
   ?>
<div class="profile-main w-100 h-100 bg-dark justify-content-center">
    <h1 class="text-white">welcome : <?php echo $name; ?> </h1>
    <h3 class="text-white">Name: <?php echo $name; ?> </h3>
    <h3 class="text-white">your email : <?php echo $email; ?> </h3>
    <h3 class="text-white">Contact Detail :<?php echo $contact; ?>  </h3>
    <h3 class="text-white">What you are : <?php echo $userType; ?></h3>
    <h3 class="text-white">Skill Name : <?php echo $SkillName; ?></h3>
    <h3 class="text-white">City : <?php echo $city; ?></h3>
    <h3 class="text-white">About Your self : <?php echo $description; ?></h3>
    <button><a class="text-decoration-none text-black bg-primary" href="Edit_profile.php">Edit Profile</a></button>

</div> 
   <?php
   require("footer.php");
   ?> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
