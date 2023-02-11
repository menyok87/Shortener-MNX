<?php
// config


$mysqli = mysqli_connect("localhost","reank","Menyok.12345","reank_shortener");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

?>