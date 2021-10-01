<?php
function dbconnect ($server, $user, $pass, $dbname)
{
  $conn = mysqli_connect($server, $user, $pass, $dbname);

  if (!$conn) {
    die("connection failed" . mysqli_connect_error());
  }
  return $conn;
}
