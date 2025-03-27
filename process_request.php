<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blood_type = $_POST['blood_type'];
    $quantity = $_POST['quantity'];
    $hospital_name = $_POST['hospital_name'];

    // Check if enough stock is available
    $result = $conn->query("SELECT * FROM blood_stock WHERE blood_type = '$blood_type'");
    $row = $result->fetch_assoc();

    if ($row && $row['quantity'] >= $quantity) {
        // Deduct from blood stock
        $new_quantity = $row['quantity'] - $quantity;
        $conn->query("UPDATE blood_stock SET quantity = $new_quantity WHERE blood_type = '$blood_type'");

        echo "Blood request for $quantity units of $blood_type approved. Hospital: $hospital_name";
    } else {
        echo "Insufficient blood stock for the requested blood type.";
    }

    $conn->close();
}
?>
