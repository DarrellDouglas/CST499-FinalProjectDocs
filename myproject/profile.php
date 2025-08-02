<?php
session_start();
include 'db_connection.php';

if (!isset($_SESSION['USER_ID'])) {
    header("Location: login.php");
    exit();
}

$userId = $_SESSION['USER_ID'];

$conn = new mysqli("localhost", "root", "", "employee_portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email, password, firstName, lastName, address, phone, salary, SSN FROM tbluser WHERE id = $userId";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php require 'master.php'; ?>

<div class="container">
    <h2 class="text-center">Employee Profile</h2>
    <table class="table table-bordered">
        <tr><th>Email</th><td><?php echo htmlspecialchars($user['email']); ?></td></tr>
        <tr><th>Password</th><td><?php echo htmlspecialchars($user['password']); ?></td></tr>
        <tr><th>First Name</th><td><?php echo htmlspecialchars($user['firstName']); ?></td></tr>
        <tr><th>Last Name</th><td><?php echo htmlspecialchars($user['lastName']); ?></td></tr>
        <tr><th>Address</th><td><?php echo htmlspecialchars($user['address']); ?></td></tr>
        <tr><th>Phone</th><td><?php echo htmlspecialchars($user['phone']); ?></td></tr>
        <tr><th>Salary</th><td><?php echo htmlspecialchars($user['salary']); ?></td></tr>
        <tr><th>SSN</th><td><?php echo htmlspecialchars($user['SSN']); ?></td></tr>
    </table>
</div>

<?php require_once 'footer.php'; ?>
</body>
</html>
