<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Connect to database
    $conn = new mysqli("localhost", "root", "", "employee_portal");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute secure query
    $stmt = $conn->prepare("SELECT id, firstName, password FROM tblUser WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verify result
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['USERNAME'] = $user['firstName'];
            $_SESSION['USER_ID'] = $user['id'];
            header("Location: profile.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
