<?php
include('connect.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Registration Successful!'); window.location='index.html';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>