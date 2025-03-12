<?php
session_start();
include('db_connection.php'); // Include DB connection

// Hardcoded admin credentials
$admin_email = 'admin@gmail.com';
$admin_password = 'admin123'; // Use the plain text password for this example

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user's email and password from the login form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the provided credentials match the admin credentials
    if ($email === $admin_email && $password === $admin_password) {
        // Set session variables for admin
        $_SESSION['user_id'] = 1; // Hardcoded user ID for admin
        $_SESSION['full_name'] = 'Admin User';
        $_SESSION['is_admin'] = true; // Set admin session variable
        header("Location: admin_dashboard.html"); // Redirect to admin dashboard
        exit(); // Ensure no further code is executed
    }

    // Check if the user exists in the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Set session variables for regular user
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['full_name'] = $user['full_name'];
            header("Location: dashboard.php"); // Redirect to user dashboard
            exit(); // Ensure no further code is executed
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this email.";
    }
}
?>
