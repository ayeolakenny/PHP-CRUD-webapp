<?php


  // connect to database
  $conn = mysqli_connect('localhost', '', '', '');

  if(!$conn){
    echo "Connection error: " . mysqli_connect_error();
  }

?>