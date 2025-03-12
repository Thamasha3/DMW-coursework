<?php
session_start();
include 'db_connection.php'; // Your database connection file

if (isset($_POST['profile_picture']) && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $profile_picture = $_POST['profile_picture'];

    $query = "UPDATE users SET profile_picture = ? WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $profile_picture, $user_id);

    if ($stmt->execute()) {
        $_SESSION['profile_picture'] = $profile_picture; // Update session
        header("Location: dashboard.php");
    } else {
        echo "Error updating profile picture!";
    }
}
?>
