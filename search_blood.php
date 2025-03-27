<!DOCTYPE html>
<html>
<head>
    <title>Search for Blood Availability</title>
</head>
<body>
    <h2>Search for Blood Availability</h2>
    <form action="search_result.php" method="POST">
        <label>Blood Type:</label><br>
        <select name="blood_type" required>
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="AB+">AB+</option>
            <option value="O+">O+</option>
        </select><br><br>
        <input type="submit" value="Check Availability">
    </form>
</body>
</html>
