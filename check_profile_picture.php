<?php
session_start(); // Always start session at the top

if (!isset($_SESSION['user_id'])) {
    die("Error: User ID is not set in the session.");
}

include "db_connection.php"; 

$user_id = $_SESSION['user_id'];
$query = $conn->prepare("SELECT file_path FROM profile_pictures WHERE user_id = ?");
$query->execute([$user_id]);
$row = $query->fetch();

if ($row) {
    echo "Profile picture found: " . $row['file_path'];
} else {
    echo "No profile picture found for user ID: " . $user_id;
}
?>
