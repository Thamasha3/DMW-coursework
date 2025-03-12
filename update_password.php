<?php
session_start();
include('db_connection.php'); // Include DB connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT); // Hash the new password

    // Update the user's password in the database
    $query = "UPDATE users SET password='$new_password', reset_token=NULL WHERE reset_token='$token'";
    if (mysqli_query($conn, $query)) {
        echo "Password updated successfully! You can now log in.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
