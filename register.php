<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $blood_type = $_POST['blood_type'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $donation_date = $_POST['donation_date'];

    $stmt = $conn->prepare("INSERT INTO donors (name, blood_type, contact_number, email, donation_date) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $blood_type, $contact_number, $email, $donation_date);
    $stmt->execute();

    // Update blood stock quantity
    $conn->query("UPDATE blood_stock SET quantity = quantity + 1 WHERE blood_type = '$blood_type'");

    echo "Donor registered successfully!";
    $stmt->close();
    $conn->close();
}
?>
