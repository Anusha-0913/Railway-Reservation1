<?php
include("db_connect.php");

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Signup Successful! Please Login'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Railway Reservation System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="signup-body">

    <div class="signup-container">
        <div class="signup-card">
            <div class="signup-header">
                <i class="fas fa-user-plus"></i>
                <h2>Create Your Account</h2>
            </div>

            <form method="POST" action="">
                <div class="input-group">
                    <label><i class="fas fa-user"></i> Username</label>
                    <input type="text" name="username" placeholder="Enter username" required>
                </div>

                <div class="input-group">
                    <label><i class="fas fa-envelope"></i> Email</label>
                    <input type="email" name="email" placeholder="Enter email" required>
                </div>

                <div class="input-group">
                    <label><i class="fas fa-lock"></i> Password</label>
                    <input type="password" name="password" placeholder="Enter password" required>
                </div>

                <button type="submit" name="signup" class="btn-signup">Sign Up</button>

                <p class="login-text">Already have an account? <a href="login.php">Login here</a></p>
            </form>
        </div>
    </div>

</body>

</html>