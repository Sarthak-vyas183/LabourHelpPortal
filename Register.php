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
     <section  class="w-40 bg-white h-75 ps-4">
        <h1 class="text-center">Register</h1>
      <form action="/" method="get" class="d-block justify-content-center">

       <div class="name d-block mt-2">
        <label  for="name">Name*</label>
        <input  type="text" id="name" name="sname" require>
       </div>

       <div class="email mt-2">
        <label for="email">Email*</label>
        <input type="email" id="email" name="email" require>
       </div>

       <div class="pass mt-2">
        <label for="pass">Create Password*</label>
        <input type="pass" id="pass" name="pass" require>
       </div>

       <div class="contact mt-2">
        <label for="contact">Contact*</label>
        <input type="text" id="contact" name="contact" require>
       </div>

       <div class="Type mt-2">
        <label for="userTyp">User Type*</label>
        <select id="userTyp" name="userTyp" require>
            <option value="user">User</option>
            <option value="labour">professional</option>
            <option value="contractor">Contractor</option>
        </select>
       </div>

  <div class="pro-Detail mt-2">
       <label  for="skilled">Are you Skilled</label>
        <select id="skilled" name="skilled">
            <option value="no">No</option>
            <option value="yes">Yes</option>
        </select>
       
    <label for="skillname" id="skillname">select skill Name:</label>
     <select name="skillname" id="skillname" class="skillname">
        <option value="">---select---</option>
        <option value="construction">knowledge of building and construction</option>
        <option value="painter">Painter</option>
        <option value="Welding">Welding</option>
        <option value="electrician">electrician</option>
        <option value="barber">barber</option>
        <option value="plumber">plumber</option>
        <option value="AC_repair">AC & home appliance repair</option>
        <option value="Cook">chef</option> 
        <option value="FarmLabour">Farming Labour</option>
        <option value="other">other</option>
      </select>

    </div>

       </form>
   </section>
</div>
   <?php
   require("footer.php");
   ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>