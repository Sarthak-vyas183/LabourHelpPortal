<?php

  echo "
  
  <nav class='navbar navbar-expand-lg bg-body-tertiary'>
  <div class='container-fluid'>
    <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
      <ul class='navbar-nav me-auto mb-2 mb-lg-0'>

        <li class='nav-item'>
          <a class='nav-link active' aria-current='page' href='index.php'>Home</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='About.php'>About</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='service.php'>Services</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='welcome.php'>Welcome</a>
        </li> 

        <li class='nav-item'>
          <a class='nav-link' href='contact.php'>Contact</a>
        </li> 

      </ul>

      <li class='nav-item logbtn'>
          <a class='btn btn-outline-success' href='login.php'>login</a>
       </li>

      <li class='nav-item logbtn'>
          <a class='btn btn-outline-success' href='singup.php'>singUP</a>
       </li>

     <form class='d-flex' role='search'>
        <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'>
        <button class='btn btn-outline-success' type='submit'>Search</button>
      </form>
    </div>
  </div>
</nav>


  ";
?>