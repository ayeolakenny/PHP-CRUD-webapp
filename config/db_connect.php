<?php


  // connect to database
  $conn = mysqli_connect('localhost', 'ayeolakenny', 'a.2969529697', 'ninja_pizza');

  if(!$conn){
    echo "Connection error: " . mysqli_connect_error();
  }

?>