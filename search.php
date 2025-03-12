<?php
// Database connection
$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "tral";  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search query from the URL
if (isset($_GET['query'])) {
    $search = $_GET['query']; // Get user input
    $search = "%" . $search . "%"; // Add wildcards for LIKE search

    // SQL query to search for recipes based on name, ingredients, or steps
    $sql = "SELECT * FROM recepies WHERE name LIKE ? OR ingredients LIKE ? OR step LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $search, $search, $search);
    $stmt->execute();
    $result = $stmt->get_result();

    // Display search results
    echo "<h1>Search Results for '" . htmlspecialchars($_GET['query']) . "'</h1>";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>" . htmlspecialchars($row['name']) . "</strong></p>";
            echo "<p><b>Ingredients:</b> " . htmlspecialchars($row['ingredients']) . "</p>";
            echo "<p><b>Steps:</b> " . htmlspecialchars($row['step']) . "</p><hr>";
        }
    } else {
        echo "<p>No recipes found.</p>";
    }

    $stmt->close();
} else {
    echo "<p>Please enter a search query.</p>";
}

// Close connection
$conn->close();
?>
