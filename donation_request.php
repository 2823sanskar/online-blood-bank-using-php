<!DOCTYPE html>
<html>
<head>
    <title>Request Blood</title>
</head>
<body>
    <h2>Request Blood</h2>
    <form action="process_request.php" method="POST">
        <label>Blood Type:</label><br>
        <select name="blood_type" required>
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="AB+">AB+</option>
            <option value="O+">O+</option>
        </select><br><br>

        <label>Quantity (Units):</label><br>
        <input type="number" name="quantity" required><br><br>

        <label>Hospital Name:</label><br>
        <input type="text" name="hospital_name" required><br><br>

        <input type="submit" value="Request Blood">
    </form>
</body>
</html>
