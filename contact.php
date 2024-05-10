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
    <section class="form">
         <div class="contact-box">
            <div class="d-flex justify-content-center"><h1 class="text-white">Contact Form</h1></div>
            <form action="send.php" method="post">
                <div>   
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Enter your Name " name="name">
               </div>
             
                <div class="mt-4">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter your Email">
                </div>
                
                <div class="mt-4">
                <label for="msg">Message</label>
               <textarea class="text-white container-fluid bg-transparent border border-white" name="msg" id="msg" rows="4" cols="50" placeholder="Message"></textarea>
               </div>
                
                <button types="submit">Contact</button>
            </form>
        </div>
     </section>
    </div>

   <?php
   require("footer.php");
   ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>