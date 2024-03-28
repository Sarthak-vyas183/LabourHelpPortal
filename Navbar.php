<?php

  echo '
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="About.php">About</a>
        </li>

      
        <li class="nav-item">
          <a class="nav-link" href="services.php">services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="welcome.php">Welcome</a>
        </li>

      </ul>
      
      
      <button class="btn btn-outline-success mx-2" type="submit"><a class="text-decoration-none" style="color:black;" href="Register.php">Register</a></button>
      <button  class=" text-black btn btn-outline-success me-2 loginbtn" type="button" id="drop-btn" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-whatever="@getbootstrap">
        log-in
    </button>

    </div>
  </div>
</nav>
  ';
  require('loginModal.php');
?>