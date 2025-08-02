<?php
// process_registration.php

include 'db_connection.php'; // contains your database class

// Collect form data
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$salary = $_POST['salary'];
$SSN = $_POST['SSN'];

// Insert query
$sql = "INSERT INTO tblUser (email, password, firstName, lastName, address, phone, salary, SSN)
        VALUES ('$email', '$password', '$firstName', '$lastName', '$address', '$phone', $salary, '$SSN')";

// Execute
$conn = new mysqli("localhost", "root", "", "employee_portal");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($conn->query($sql) === TRUE) {
    echo "User registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
