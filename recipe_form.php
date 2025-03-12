<?php
   include 'theam/header.php'; // Header content
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submit Your Recipe</title>
    <!-- Include Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        body {
            background: url('Images/top-view-table-full-delicious-food-composition.jpg') no-repeat center center;
            background-size: cover;
            padding: 80px 20px;
            border-radius: 10px;
            position: relative;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 0 auto;
            backdrop-filter: blur(5px);
        }
        .help {
            font-size: 0.9em;
            color: #4a4a4a;
        }
    </style>
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>


    <div class="form-container">
        <h2 class="title is-3 has-text-centered has-text-success">
            <i class="fas fa-utensils"></i> Your Recipe Deserves the Spotlight – Share It Today! <i class="fas fa-star"></i>
        </h2>

        <!-- Recipe Submission Form -->
        <form method="post" action="process_recipe.php" enctype="multipart/form-data" class="recipe-form">

        
                    
            <div class="field">
                <label class="label" for="title">Recipe Title:</label>
                <div class="control has-icons-left">
                    <input class="input" type="text" id="title" name="title" placeholder="Enter recipe title" pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed" required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-heading"></i>
                    </span>
                </div>
                <p class="help">The name of your recipe.</p>
            </div>

        

            <div class="field">
                <label class="label" for="ingredients">Ingredients:</label>
                <div class="control">
                    <textarea class="textarea" id="ingredients" name="ingredients" rows="5" placeholder="List the ingredients" required></textarea>
                </div>
                <p class="help">Separate each ingredient with a comma.</p>
            </div>

            <div class="field">
                <label class="label" for="method">Method:</label>
                <div class="control">
                    <textarea class="textarea" id="method" name="method" rows="5" placeholder="Describe the method" required></textarea>
                </div>
                <p class="help">Provide step-by-step instructions.</p>
            </div>

            <div class="field">
                <label class="label" for="author">Author:</label>
                <div class="control has-icons-left">
                    <input class="input" type="text" id="author" name="author" placeholder="Your name" pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed" required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-user-edit"></i>
                    </span>
                </div>
                <p class="help">Your full name.</p>
            </div>

            <div class="field">
                <label class="label" for="image">Recipe Image:</label>
                <div class="control">
                    <div class="file has-name is-fullwidth">
                        <label class="file-label">
                            <input class="file-input" type="file" id="image" name="image" accept="image/*">
                            <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label">Choose an image...</span>
                            </span>
                            <span class="file-name">No file chosen</span>
                        </label>
                    </div>
                </div>
                <p class="help">Upload an image of your recipe.</p>
            </div>

            <!-- Submit Button -->
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-success is-fullwidth">
                        Submit Recipe
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>