<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blood_type = $_POST['blood_type'];

    $result = $conn->query("SELECT * FROM blood_stock WHERE blood_type = '$blood_type'");
    $row = $result->fetch_assoc();

    echo "<h2>Blood Availability for Blood Type: $blood_type</h2>";
    if ($row) {
        echo "Available stock: " . $row['quantity'] . " units";
    } else {
        echo "Blood type not found!";
    }

    $conn->close();
}
?>
