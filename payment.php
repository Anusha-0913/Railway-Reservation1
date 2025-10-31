<?php
include('connect.php');

// Get train details using train_no from URL
if (isset($_GET['train_no'])) {
    $train_no = $_GET['train_no'];
    $sql = "SELECT * FROM trains WHERE train_no='$train_no'";
    $result = mysqli_query($conn, $sql);
    $train = mysqli_fetch_assoc($result);
} else {
    die("No train selected!");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | Railway Reservation System</title>
    <style>
        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            font-family: 'Poppins', sans-serif;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            width: 400px;
            margin: 80px auto;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
        }

        h2 {
            color: #ffdd57;
        }

        input,
        select {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 10px;
            border: none;
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

        .train-info {
            text-align: left;
            margin-bottom: 20px;
            padding: 10px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Train Payment</h2>

        <div class="train-info">
            <p><strong>Train No:</strong> <?php echo $train['train_no']; ?></p>
            <p><strong>Train Name:</strong> <?php echo $train['train_name']; ?></p>
            <p><strong>From:</strong> <?php echo $train['source']; ?></p>
            <p><strong>To:</strong> <?php echo $train['destination']; ?></p>
            <p><strong>Fare:</strong> ₹<?php echo $train['fare']; ?></p>
        </div>

        <form action="payment_sucess.php" method="post">
            <input type="hidden" name="train_no" value="<?php echo $train['train_no']; ?>">
            <label>Enter Passenger Name</label><br>
            <input type="text" name="passenger_name" required><br>

            <label>Payment Method</label><br>
            <select name="payment_method" required>
                <option value="">Select</option>
                <option value="UPI">UPI</option>
                <option value="Credit Card">Credit Card</option>
                <option value="Debit Card">Debit Card</option>
            </select><br>

            <button type="submit">Pay Now</button>
        </form>
    </div>

</body>

</html>