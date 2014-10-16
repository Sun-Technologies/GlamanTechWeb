<?php
session_start();
include 'database.php';
include 'admin_functions.php';
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conn = connect($config);
  validateUser($conn, $email, $password);
}
?>