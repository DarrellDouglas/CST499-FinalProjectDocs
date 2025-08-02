<?php
require_once 'db_connection.php';

$db = new DBConnection();
$con = $db->connect();

if ($con) {
    echo "Database connection successful!";
} else {
    echo "Database connection failed!";
}
?>
