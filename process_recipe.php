<?php
include 'db_connection.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is for updating or inserting
    if (isset($_POST["id"])) {
        // Update existing recipe
        $id = intval($_POST["id"]);
        $title = $_POST["title"];
        $ingredients = $_POST["ingredients"];
        $method = $_POST["method"];
        $author = $_POST["author"];

        // Prepare SQL query to update the recipe
        $query = "UPDATE recipes SET title = ?, ingredients = ?, method = ?, author = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssi", $title, $ingredients, $method, $author, $id);

        // Execute the query and check if successful
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            header("Location: user_content.php?message=" . urlencode("Recipe updated successfully!"));
            exit();
        } else {
            echo "Error updating recipe: " . $stmt->error;
        }
    } else {
        // Insert new recipe
        $title = $_POST["title"];
        $ingredients = $_POST["ingredients"];
        $method = $_POST["method"];
        $author = $_POST["author"];
        
        // Handle image upload if necessary
        $image = null;
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $image = file_get_contents($_FILES['image']['tmp_name']);
        }

        // Prepare SQL query to insert the new recipe
        $query = "INSERT INTO recipes (title, ingredients, method, author, image) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssss", $title, $ingredients, $method, $author, $image);

        // Execute the query and check if successful
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            header("Location: user_content.php?message=" . urlencode("Recipe added successfully!"));
            exit();
        } else {
            echo "Error adding recipe: " . $stmt->error;
        }
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>