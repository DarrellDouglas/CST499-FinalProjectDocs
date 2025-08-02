<!-- register.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Employee Portal - Register</title>
</head>
<body>
    <h2>Employee Registration</h2>
    <form action="process_registration.php" method="POST">
        <label>Email:</label><br>
        <input type="email" name="email" required><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br>

        <label>First Name:</label><br>
        <input type="text" name="firstName" required><br>

        <label>Last Name:</label><br>
        <input type="text" name="lastName" required><br>

        <label>Address:</label><br>
        <textarea name="address" required></textarea><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" required><br>

        <label>Salary:</label><br>
        <input type="number" step="0.01" name="salary" required><br>

        <label>SSN:</label><br>
        <input type="text" name="SSN" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
