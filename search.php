<?php
include('connect.php');

$source = $_POST['source'];
$destination = $_POST['destination'];

$query = "SELECT * FROM trains WHERE source='$source' AND destination='$destination'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div style='background:#fff;color:#000;padding:10px;margin:10px;border-radius:10px;'>";
        echo "<h3>" . $row['train_name'] . " (" . $row['train_no'] . ")</h3>";
        echo "<p>From: " . $row['source'] . " | To: " . $row['destination'] . "</p>";
        echo "<p>Fare: ₹" . $row['fare'] . "</p>";
        echo "<a href='train_details.html'><button>Book Now</button></a>";
        echo "</div>";
    }
} else {
    echo "<h3>No trains found!</h3>";
}
?>