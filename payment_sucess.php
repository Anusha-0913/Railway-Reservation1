<?php
include('connect.php');

if (isset($_POST['train_no']) && isset($_POST['passenger_name']) && isset($_POST['payment_method'])) {
    $train_no = $_POST['train_no'];
    $passenger = $_POST['passenger_name'];
    $method = $_POST['payment_method'];
    $date = date('Y-m-d H:i:s');

    // Optional: insert into a bookings table if you have one
    // $sql = "INSERT INTO bookings (train_no, passenger_name, payment_method, booking_date)
    //         VALUES ('$train_no', '$passenger', '$method', '$date')";
    // mysqli_query($conn, $sql);
} else {
    die("Invalid payment request!");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            width: 450px;
            margin: 100px auto;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
        }

        h2 {
            color: #ffdd57;
        }

        button {
            background-color: #ffdd57;
            border: none;
            color: black;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #ffc107;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>✅ Payment Successful!</h2>
        <p>Thank you, <strong><?php echo $passenger; ?></strong>.</p>
        <p>Your booking for train no <strong><?php echo $train_no; ?></strong> has been confirmed.</p>
        <p>Payment Method: <strong><?php echo $method; ?></strong></p>
        <br>
        <a href="home.php"><button>Go to Home</button></a>
    </div>

</body>

</html>