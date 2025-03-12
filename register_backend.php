<?php

session_start();
include('db_connection.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $date_of_birth = isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $is_admin = 0; 
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email already exists. Please use a different email.";
    } else {
       
        $insert_query = "INSERT INTO users (username, email, password, full_name, phone, address, date_of_birth, gender, is_admin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_query);
        $insert_stmt->bind_param("sssssssss", $username, $email, $password, $full_name, $phone, $address, $date_of_birth, $gender, $is_admin);
        
        // Debugging output
        echo "Inserting values: Username: $username, Email: $email, Full Name: $full_name, Phone: $phone, Address: $address, Date of Birth: $date_of_birth, Gender: $gender, Is Admin: $is_admin";

        if ($insert_stmt->execute()) {
            // Set session variables for the newly registered user
            $_SESSION['user_id'] = $conn->insert_id; // Get the last inserted user ID
            $_SESSION['full_name'] = $full_name; // Set the full name
            
            // Redirect to dashboard after successful registration
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Error: " . $insert_stmt->error; // Log the error
        }
    }
}
?>
