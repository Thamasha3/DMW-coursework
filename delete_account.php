<?php
session_start();
include('db_connection.php'); // Include DB connection

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$user_id = $_SESSION['user_id'];

// Delete user data from the database
$query = "DELETE FROM users WHERE user_id='$user_id'";

if (mysqli_query($conn, $query)) {
    // Clear session and redirect to home page
    session_destroy();
    header("Location: index.html");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
