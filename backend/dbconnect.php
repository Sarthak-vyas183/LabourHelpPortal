<?php
  $conn = new mysqli("localhost" , "root" ,"" , "labourhelpportal");

  if(!$conn) {
    die("connection failed : " .mysqli_connect_error());
  } else {
    echo "data base connected";
  }
?>