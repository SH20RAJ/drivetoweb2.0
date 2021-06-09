<?php
$mysqli = new mysqli("remotemysql.com","qz5SfLgaac","jsRZm3bRN2","qz5SfLgaac");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
  echo "Yep! Database Connected.";
}
?>
