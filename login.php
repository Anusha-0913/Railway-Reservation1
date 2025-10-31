<?php
session_start();
include('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
  $_SESSION['username'] = $username; // store user session
  header("Location: home.php"); // redirect directly to home
  exit();
} else {
  echo "<script>alert('Invalid Credentials'); window.location='index.html';</script>";
}
?>