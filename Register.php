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
    <section class="content">
        <h1 class="title">Register</h1>

        <form class="res-form" action="backend/signupConn.php" method="post">

            <div class="input-box name">
                <label for="name">Name*</label>
                <input type="text" id="name" name="sname" required>
            </div>

            <div class="input-box email">
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-box pass">
                <label for="pass">Create Password*</label>
                <input type="password" id="pass" name="pass" required>
            </div>

            <div class="input-box contact">
                <label for="contact">Contact*</label>
                <input type="text" id="contact" name="contact" required>
            </div>

            <div class="input-box Type">
                <label for="userType">User Type*</label>
                <select id="userType" name="userType" required>
                    <option value="">--------select-------</option>
                    <option value="user">User</option>
                    <option value="labour">Professional</option>
                    <option value="contractor">Contractor</option>
                </select>
            </div>

            <div class="input-box pro-Detail">
                <label for="skilled">Are you Skilled?</label>
                <select class='w-50 ' id="skilled" name="skilled">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>

                <label class="mt-2" for="skillname" id="skillname">Select Skill Name:</label>
                <select class="mb-2 w-50" name="skillname" id="skillname" class="skillname">
                    <option value="null">---Select---</option>
                    <option value="construction">Knowledge of Building and Construction</option>
                    <option value="painter">Painter</option>
                    <option value="welding">Welding</option>
                    <option value="electrician">Electrician</option>
                    <option value="barber">Barber</option>
                    <option value="plumber">Plumber</option>
                    <option value="ac_repair">AC & Home Appliance Repair</option>
                    <option value="cook">Chef</option> 
                    <option value="farmLabour">Farming Labour</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <button class="res-btn w-75 border border-light" type="submit">Submit</button>
        </form>
   </section>
</div>
   <?php
   require("footer.php");
   ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</html>