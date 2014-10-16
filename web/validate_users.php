<?php
include 'database.php';
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conn = connect($config);
  validateUser($conn, $email, $password);
}
function validateUser($conn, $email, $password) {
  $sql = "SELECT email FROM users WHERE email = '" . mysql_real_escape_string($email) . "' AND password = '" . $password . "'"; 
  $query = mysql_query($sql) or trigger_error("Query Failed: " . mysql_error()); 
  // If one row was returned, the user was logged in! 
  if ($query) { 
    echo "Hi";
  }  
  return false; 
}
?>