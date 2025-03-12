<?php
session_start();
include('db_connection.php'); // Include DB connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];

    // Prepare the update query
    $query = "UPDATE users SET full_name='$full_name', email='$email', phone='$phone', address='$address', date_of_birth='$date_of_birth', gender='$gender' WHERE user_id='$user_id'";

    if (mysqli_query($conn, $query)) {
        // Redirect to admin dashboard after successful update
        header("Location: admin_dashboard.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
