<?php
session_start();
include('db_connection.php'); // Include DB connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Prepare the update query
    $query = "UPDATE users SET full_name='$full_name', email='$email', phone='$phone'";
    
    // Check if a new password is provided
    if (!empty($_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the new password
        $query .= ", password='$password'"; // Include password update
    }
    
    $query .= " WHERE user_id='$user_id'";

    if (mysqli_query($conn, $query)) {
        // Redirect to dashboard after successful update
        header("Location: dashboard.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
