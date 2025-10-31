<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html"); // redirect if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Railway Reservation System</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            text-align: center;
            height: 100vh;
        }

        header {
            background: rgba(0, 0, 0, 0.3);
            padding: 20px;
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        nav {
            margin: 20px 0;
        }

        nav a {
            text-decoration: none;
            color: white;
            margin: 0 15px;
            padding: 10px 20px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.2);
            transition: 0.3s;
        }

        nav a:hover {
            background: #ffdd57;
            color: black;
        }

        .container {
            margin-top: 80px;
        }

        h1 {
            color: #ffdd57;
            font-size: 36px;
        }

        p {
            font-size: 18px;
            margin: 20px;
        }

        .btn {
            display: inline-block;
            background: #ffdd57;
            color: black;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background: #ffc107;
        }
    </style>
</head>

<body>

    <header>🚆 Indian Railway Reservation System</header>

    <nav>
        <a href="home.php">🏠 Home</a>
        <a href="search.html">🔍 Search Train</a>
        <a href="payment_success.php">🎟 My Bookings</a>
        <a href="logout.php">🚪 Logout</a>
    </nav>

    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['username']; ?> 👋</h1>
        <p>Book your train tickets easily and securely from anywhere, anytime.</p>
        <a href="search.html" class="btn">Search for Trains</a>
    </div>

</body>

</html>