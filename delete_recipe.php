<?php
session_start();
include 'db_connection.php'; // Database connection

// Check if the recipe ID is provided in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Get the recipe ID from the URL

    // Prepare SQL query to delete the recipe
    $query = "DELETE FROM recipes WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    // Execute the query and check if successful
    if ($stmt->execute()) {
        // Log success
        error_log("Recipe with ID $id deleted successfully.", 0);
        $stmt->close();
        $conn->close();
        header("Location: user_content.php?message=" . urlencode("Recipe deleted successfully!"));
        exit();
    } else {
        // Log error if deletion fails
        error_log("Error deleting recipe with ID $id: " . $stmt->error, 0);
        echo "Error deleting recipe: " . $stmt->error;
    }
} else {
    echo "Invalid recipe ID.";
}

$conn->close();
?>
