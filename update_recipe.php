<?php
include 'db_connection.php'; // Database connection
include 'theam/header.php'; // Header content

// Check if the recipe ID is provided in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Get the recipe ID from the URL

    // Fetch the recipe details from the database
    $sql = "SELECT title, ingredients, method, author FROM recipes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); // Bind the recipe ID
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $recipe = $result->fetch_assoc();
    } else {
        echo "Recipe not found.";
        exit();
    }
} else {
    echo "Invalid recipe ID.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🍽 Edit Your Recipe - Make It Perfect! 🍜</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: url('images/delicious-food.jpg') no-repeat center center/cover;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: 'Poppins', sans-serif;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 600px;
            position: relative;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .form-container h2 {
            color: #e67e22;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .form-container p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }
        .btn-custom {
            background: linear-gradient(to right, #e67e22, #f39c12);
            color: white;
            font-weight: bold;
            border: none;
            padding: 12px;
            border-radius: 8px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: linear-gradient(to right, #d35400, #f1c40f);
            transform: scale(1.05);
        }
        textarea {
            resize: none;
            height: 150px;
        }
        .loading {
            display: none;
            font-size: 18px;
            color: #e67e22;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
    <script>
        function showLoading() {
            document.getElementById('loading').style.display = 'block';
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>🍳 Edit Your Recipe 🍕</h2>
            <p>✨ Perfect your recipe and make it shine! Adjust the ingredients, enhance the method, and share your masterpiece with food lovers around the world! 🌍</p>
            <form action="process_recipe.php" method="POST" onsubmit="showLoading()">
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="mb-3">
                    <label for="title" class="form-label">📌 Recipe Title:</label>
                    <input type="text" id="title" name="title" class="form-control" value="<?= htmlspecialchars($recipe['title']) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">👨‍🍳 Author:</label>
                    <input type="text" id="author" name="author" class="form-control" value="<?= htmlspecialchars($recipe['author']) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="ingredients" class="form-label">📝 Ingredients:</label>
                    <textarea id="ingredients" name="ingredients" class="form-control" required><?= htmlspecialchars($recipe['ingredients']) ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="method" class="form-label">📖 Cooking Method:</label>
                    <textarea id="method" name="method" class="form-control" required><?= htmlspecialchars($recipe['method']) ?></textarea>
                </div>
                <button type="submit" class="btn btn-custom w-100">✅ Save Changes</button>
                <div id="loading" class="loading">⏳ Updating your recipe... Please wait! 🍽</div>
            </form>
        </div>
    </div>
</body>
</html>