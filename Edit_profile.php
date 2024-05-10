<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}

require("backend/dbconnect.php");

$userEmail = $_SESSION['email'];
$sql = "SELECT * FROM signup WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userEmail);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['sname'];
    $email = $row['email'];
    $contact = $row['contact'];
    $userType = $row['usrTyp'];
    $SkillName = $row['skillNm'];
    $city = $row['city'];
    $img = $row['pimg'];
    // Fetch other information as needed
} else {
    echo "User not found!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="./EditForm.css">
</head>
<body>
   <?php require("Navbar.php"); ?>
   <div class="container mt-4">
      <h2>Edit Profile</h2>
      <form action="backend/process_edit_profile.php" method="post">
         <div>
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
         </div>
         <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" readonly>
         </div>
         <div class="mb-3">
            <label for="contact" class="form-label">Contact:</label>
            <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $contact; ?>">
         </div>
         <div class="input-box Type mb-3">
            <label for="userType">User Type*</label>
            <select id="userType" name="userType" required>
                
                <option value="user" <?php if ($userType == 'user') echo 'selected'; ?>>User</option>
                <option value="labour" <?php if ($userType == 'labour') echo 'selected'; ?>>Professional</option>
                <option value="contractor" <?php if ($userType == 'contractor') echo 'selected'; ?>>Contractor</option>
            </select>
        </div>
        <div class="mb-3">
        <label class="mt-2" for="skillname" id="skillname">Select Skill Name:</label>
                <select class="mb-2 w-50" name="skillNm" id="skillname" class="skillname">
                    <option value="<?php echo $SkillName;?>"><?php echo $SkillName;?></option>
                    <option value="construction">Knowledge of Building and Construction</option>
                    <option value="painter">Painter</option>
                    <option value="welding">Welding</option>
                    <option value="electrician">Electrician</option>
                    <option value="barber">Barber</option>
                    <option value="plumber">Plumber</option>
                    <option value="ac_repair">AC & Home Appliance Repair</option>
                    <option value="chef">Chef</option> 
                    <option value="farmLabour">Farming Labour</option>
                    <option value="gnlabor">General Labour</option>
                    <option value="other">Other</option>
                </select>
               </div>

        <div class="mb-3">
            <label for="Desc" class="form-label">Description:</label>
            <input type="text" class="form-control" id="Desc" name="description" value="<?php echo $SkillName; ?>">
         </div>

        <div class="mb-3">
            <label for="city" class="form-label">City:</label>
            <input type="text" class="form-control" id="city" name="city" value="<?php echo $city; ?>">
         </div>

        <div class="mb-3">
            <label for="img" class="form-label">Profile</label>
            <input type="file" class="form-control" id="img" name="pimg">
         </div>
         <button type="submit" class="btn btn-primary">Save Changes</button>
      </form>
   </div>
   <?php require("footer.php"); ?>
</body>
</html>
