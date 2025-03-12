<?php
include 'db_connection.php'; // Database connection
 include 'theam/header.php'; // Header content
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Submitted Recipes</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css?v=1.0">
    <script defer src="script.js"></script> <!-- External JavaScript -->

    <style>
        .card {
            width: 18rem;
            height: 100%; /* Ensures all cards have the same height */
        }
        .card-img-top {
            height: 180px; /* Fixed height for all images */
            object-fit: cover; /* Ensures images cover the space without distortion */
        }
        .category-title {
            margin: 40px 0 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .submit-btn {
            display: block;
            margin: 20px auto;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
        }
        .submit-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>


<div class="container mt-5">
    <div class="recipe-container">
        <?php
        // Fetch recipes from the database
        $sql = "SELECT id, title, author, ingredients, method, image FROM recipes ORDER BY created_at DESC";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
                <div class="recipe-card" id="recipe-<?= $row['id'] ?>">
                    <h3><?= htmlspecialchars($row['title']) ?></h3>
                    <?php if (!empty($row["image"])) { ?>
                      <img src="data:image/jpeg;base64,<?= base64_encode($row['image']) ?>" class="recipe-img" alt="Recipe Image">
                    <?php } ?>
                    <p><strong>By:</strong> <?= htmlspecialchars($row['author']) ?></p>
                    <!-- <button class="see-more-btn" data-id="<?= $row['id'] ?>">See More</button> -->
                    <button class="edit-btn" onclick="window.location.href='edit_recipe_form.php?id=<?= $row['id'] ?>'">Edit</button> 
                    <button class="delete-btn" data-id="<?= $row['id'] ?>">Delete</button>
                    <div class="recipe-details hide" id="details-<?= $row['id'] ?>">
                        <p><strong>Ingredients:</strong> <?= nl2br(htmlspecialchars($row['ingredients'])) ?></p>
                        <p><strong>Method:</strong> <?= nl2br(htmlspecialchars($row['method'])) ?></p>
                    </div>
                </div>
            <?php }
        } else {
            echo "<p>No recipes found. Be the first to submit one!</p>";
        }

        $conn->close();
        ?>
    </div>
</div>

<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            const recipeId = this.getAttribute('data-id');
            if (confirm('Are you sure you want to delete this recipe?')) {
                window.location.href = delete_recipe.php?id=${recipeId};
            }
        });
    });
</script>

</body>
</html>