<!DOCTYPE html>
<html>
<head>
    <title>Donor Registration</title>
</head>
<body>
    <h2>Register as a Blood Donor</h2>
    <form action="register.php" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Blood Type:</label><br>
        <select name="blood_type" required>
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="AB+">AB+</option>
            <option value="O+">O+</option>
        </select><br><br>

        <label>Contact Number:</label><br>
        <input type="text" name="contact_number"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Donation Date:</label><br>
        <input type="date" name="donation_date" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
