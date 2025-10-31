<?php
include("db_connect.php");

$source = $_GET['source'];
$destination = $_GET['destination'];

$sql = "SELECT * FROM trains WHERE source='$source' AND destination='$destination'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Available Trains</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Trains from <?= $source ?> to <?= $destination ?></h2>
        <table border="1">
            <tr>
                <th>Train Name</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Seats</th>
                <th>Fare</th>
                <th>Action</th>
            </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
            <td>{$row['train_name']}</td>
            <td>{$row['departure_time']}</td>
            <td>{$row['arrival_time']}</td>
            <td>{$row['seats_available']}</td>
            <td>{$row['fare']}</td>
            <td><a href='book_ticket.php?train_id={$row['train_id']}'>Book</a></td>
        </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No trains found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>