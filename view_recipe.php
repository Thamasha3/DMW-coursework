<?php
include 'db_connection.php'; // Database connection

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
<!-- Carousel code remains unchanged -->

<div class="container mt-5">
    <h1 class="text-center">Recipe Categories</h1>

    <!-- Main Course (Breakfast, Lunch, Dinner) -->
    <div class="category-title">🍽 Main Course (Breakfast, Lunch, Dinner)</div>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <!-- Recipe Cards (Example) -->
        <div class="col">
            <div class="card" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Pancake" data-description="Fluffy pancakes topped with syrup and fresh berries." data-ingredients="1 cup flour, 1 cup milk, 2 eggs, 1 tbsp sugar, 1 tsp baking powder" data-method="Mix all ingredients, cook in a pan until golden, serve with syrup." data-image="Images/OIP (1).jpeg">
                <img src="Images/OIP (1).jpeg" class="card-img-top" alt="Pancakes">
                <div class="card-body">
                    <h5 class="card-title">Pancake</h5>
                    <p class="card-text">Fluffy pancakes topped with syrup and fresh berries.</p>
                </div>
            </div>
        </div>
        <!-- Add more recipe cards here -->
        <div class="col">
            <div class="card" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Cheeseburger" data-description="Juicy cheeseburger with crispy fries." data-ingredients="1/2 lb ground beef, 2 slices cheese, 1 burger bun, 1 potato" data-method="Grill beef, melt cheese, assemble burger, fry potatoes." data-image="Images/OIP (2).jpeg">
                <img src="Images/OIP (2).jpeg" class="card-img-top" alt="Cheeseburger">
                <div class="card-body">
                <h5 class="card-title">Cheeseburger</h5>
                    <p class="card-text">Juicy cheeseburger with crispy fries.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Grilled Steak" data-description="Perfectly grilled steak with roasted veggies." data-ingredients="1 lb steak, 1 cup veggies, 1 tbsp olive oil, salt, pepper" data-method="Season steak, grill to desired doneness, roast veggies." data-image="Images/R.png">
                <img src="Images/R.png" class="card-img-top" alt="Grilled Steak">
                <div class="card-body">
                <h5 class="card-title">Grilled Steak</h5>
                    <p class="card-text">Perfectly grilled steak with roasted veggies.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Alfredo Pasta" data-description="Creamy Alfredo pasta with Parmesan cheese." data-ingredients="1 cup pasta, 1/2 cup cream, 1/4 cup Parmesan, salt, pepper" data-method="Cook pasta, heat cream, add cheese, toss with pasta." data-image="Images/OIP (3).jpeg">
                <img src="Images/OIP (3).jpeg" class="card-img-top" alt="Pasta">
                <div class="card-body">
                <h5 class="card-title">Alfredo Pasta</h5>
                    <p class="card-text">Creamy Alfredo pasta with Parmesan cheese.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Appetizers -->
    <div class="category-title">🥗 Appetizers</div>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Bruschetta" data-description="Toasted bread with fresh tomatoes and basil." data-ingredients="1 baguette, 2 tomatoes, 1/4 cup basil, 2 cloves garlic" data-method="Toast bread, chop tomatoes, mix with basil, garlic." data-image="Images/greek-bruschetta-recipe.jpg">
                <img src="Images/greek-bruschetta-recipe.jpg" class="card-img-top" alt="Bruschetta">
                <div class="card-body">
                <h5 class="card-title">Toasted bread </h5>
                    <p class="card-text">Toasted bread with fresh tomatoes and basil.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="Images/R.jpeg" class="card-img-top" alt="Mozzarella Sticks">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Mozzarella Sticks" data-description="Crispy mozzarella sticks with marinara sauce." data-ingredients="1 cup mozzarella, 1/2 cup breadcrumbs, 1 egg, 1/4 cup marinara" data-method="Coat cheese, dip in egg, roll in breadcrumbs, fry until golden." data-image="Images/R.jpeg">
                <h5 class="card-title"> Mozzarella sticks</h5>
                    <p class="card-text">Crispy mozzarella sticks with marinara sauce.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="Images/R (1).jpeg" class="card-img-top" alt="Spring Rolls">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Spring Rolls" data-description="Crispy spring rolls filled with veggies and chicken." data-ingredients="1 cup veggies, 1/2 cup chicken, 1/4 cup soy sauce, 1 pack spring roll wrappers" data-method="Mix veggies, chicken, soy sauce, wrap in wrappers, fry until crispy." data-image="Images/R (1).jpeg">
                <h5 class="card-title">Spring rolls </h5>
                    <p class="card-text">Crispy spring rolls filled with veggies and chicken.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="Images/R (2).jpeg" class="card-img-top" alt="Nachos">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Nachos" data-description="Loaded nachos with cheese, jalapenos, and salsa." data-ingredients="1 bag tortilla chips, 1 cup cheese, 1/4 cup jalapenos, 1/2 cup salsa" data-method="Layer chips, cheese, jalapenos, bake until cheese melts, top with salsa." data-image="Images/R (2).jpeg">
                <h5 class="card-title"> Nachos</h5>
                    <p class="card-text">Loaded nachos with cheese, jalapenos, and salsa.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Soups & Salads -->
    <div class="category-title">🥣 Soups & Salads</div>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card">
                <img src="Images/homemade-tomato-soup-recipe.jpg" class="card-img-top" alt="Tomato Soup">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Tomato Soup" data-description="Creamy tomato soup with croutons." data-ingredients="2 cups tomatoes, 1/2 cup cream, 1/4 cup croutons" data-method="Blend tomatoes, heat with cream, serve with croutons." data-image="Images/homemade-tomato-soup-recipe.jpg">
                <h5 class="card-title"> Tomato soup</h5>
                    <p class="card-text">Creamy tomato soup with croutons.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="Images/caesar-salad-10.jpg" class="card-img-top" alt="Caesar Salad">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Caesar Salad" data-description="Classic Caesar salad with crispy lettuce and Parmesan." data-ingredients="1 head lettuce, 1/4 cup Parmesan, 1/4 cup croutons" data-method="Toss lettuce with dressing, top with cheese and croutons." data-image="Images/caesar-salad-10.jpg">
                <h5 class="card-title"> Caesar salad</h5>
                    <p class="card-text">Classic Caesar salad with crispy lettuce and Parmesan.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="Images/Minestrone-Soup-foodiecrush.com-018.webp" class="card-img-top" alt="Minestrone Soup">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Italian Minestrone" data-description="Hearty Italian minestrone soup with vegetables and beans." data-ingredients="2 cups veggies, 1 cup beans, 1/2 cup pasta, 1/4 cup tomato sauce" data-method="Simmer veggies, beans, pasta, sauce until tender." data-image="Images/Minestrone-Soup-foodiecrush.com-018.webp">
                <h5 class="card-title"> Italian minestrone</h5>
                    <p class="card-text">Hearty Italian minestrone soup with vegetables and beans.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="Images/OIP (4).jpeg" class="card-img-top" alt="Greek Salad">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Greek Salad" data-description="Fresh Greek salad with olives and feta cheese." data-ingredients="1 head lettuce, 1/4 cup olives, 1/4 cup feta cheese" data-method="Toss lettuce with olives, cheese, dressing." data-image="Images/OIP (4).jpeg">
                <h5 class="card-title"> Greek salad</h5>
                    <p class="card-text">Fresh Greek salad with olives and feta cheese.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Desserts -->
    <div class="category-title">🍰 Desserts</div>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card">
                <img src="Images/OIP (5).jpeg" class="card-img-top" alt="Chocolate Cake">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Chocolate Cake" data-description="Moist chocolate cake with ganache." data-ingredients="1 cup flour, 1/2 cup cocoa, 1 cup sugar, 1/2 cup butter" data-method="Mix dry ingredients, add wet ingredients, bake until done." data-image="Images/OIP (5).jpeg">
                <h5 class="card-title"> Chocolate cake</h5>
                    <p class="card-text">Moist chocolate cake with ganache.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="Images/715.jpg" class="card-img-top" alt="Tiramisu">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Tiramisu" data-description="Classic tiramisu with espresso and mascarpone." data-ingredients="1 cup espresso, 1 cup mascarpone, 1/2 cup sugar, 1 pack ladyfingers" data-method="Dip ladyfingers in coffee, layer with mascarpone, chill." data-image="Images/715.jpg">
                <h5 class="card-title"> Tiramisu</h5>
                    <p class="card-text">Classic tiramisu with espresso and mascarpone.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="Images/cheesecake-with-berries-raspberries-plate_865967-142863.jpg" class="card-img-top" alt="Cheesecake">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Cheesecake" data-description="Creamy cheesecake with a graham cracker crust." data-ingredients="1 cup cream cheese, 1/2 cup sugar, 1/4 cup graham cracker crumbs" data-method="Mix cream cheese, sugar, pour into crust, bake until set." data-image="Images/cheesecake-with-berries-raspberries-plate_865967-142863.jpg">
                <h5 class="card-title"> Cheesecake</h5>
                    <p class="card-text">Creamy cheesecake with a graham cracker crust.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="Images/Classic-Apple-Pie-Recipe-2-scaled.jpg" class="card-img-top" alt="Apple Pie">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Apple Pie" data-description="Homemade apple pie with cinnamon filling." data-ingredients="2 cups apples, 1/2 cup sugar, 1 tsp cinnamon, 1 pie crust" data-method="Mix apples, sugar, cinnamon, bake in crust until golden." data-image="Images/Classic-Apple-Pie-Recipe-2-scaled.jpg">
                <h5 class="card-title"> Apple pie</h5>
                    <p class="card-text">Homemade apple pie with cinnamon filling.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Beverages -->
    <div class="category-title">🥤 Beverages</div>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card">
                <img src="Images/Mixed-Berry-Smoothie-Recipe-3.jpg" class="card-img-top" alt="Smoothie">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Smoothie" data-description="Refreshing fruit smoothie with yogurt." data-ingredients="1 cup berries, 1/2 cup yogurt, 1/4 cup honey" data-method="Blend berries, yogurt, honey until smooth." data-image="Images/Mixed-Berry-Smoothie-Recipe-3.jpg">
                <h5 class="card-title"> Smoothie</h5>
                    <p class="card-text">Refreshing fruit smoothie with yogurt.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="Images/Lemonade-Pex.jpg" class="card-img-top" alt="Lemonade">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Lemonade" data-description="Freshly squeezed lemonade with mint." data-ingredients="2 lemons, 1/2 cup sugar, 1/4 cup mint leaves" data-method="Juice lemons, mix with sugar, mint, serve over ice." data-image="Images/Lemonade-Pex.jpg">
                <h5 class="card-title"> Lemonade</h5>
                    <p class="card-text">Freshly squeezed lemonade with mint.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="Images/R (3).jpeg" class="card-img-top" alt="Hot Chocolate">
                <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Hot Chocolate" data-description="Creamy hot chocolate topped with whipped cream." data-ingredients="1 cup milk, 1/4 cup cocoa, 1/4 cup sugar, whipped cream" data-method="Heat milk, mix with cocoa, sugar, top with cream." data-image="Images/R (3).jpeg">
                <h5 class="card-title"> Hot chocalate</h5>
                    <p class="card-text">Creamy hot chocolate topped with whipped cream.</p>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="card">
            <img src="Images/R (4).jpeg" class="card-img-top" alt="Coffee">
            <div class="card-body" data-bs-toggle="modal" data-bs-target="#recipeModal" data-title="Coffee" data-description="Rich and aromatic freshly brewed coffee." data-ingredients="1 cup coffee, 1/4 cup milk, 1 tbsp sugar" data-method="Brew coffee, heat milk, mix with sugar." data-image="Images/R (4).jpeg">
            <h5 class="card-title"> Coffee</h5>
                <p class="card-text">Rich and aromatic freshly brewed coffee.</p>
            </div>
        </div>
    </div>
    </div>

</div>

<!-- Recipe Modal -->
<div class="modal fade" id="recipeModal" tabindex="-1" aria-labelledby="recipeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img id="recipeImage" class="img-fluid" alt="Recipe Image">
                    </div>
                    <div class="col-md-6">
                        <h6>Ingredients:</h6>
                        <p id="ingredients"></p>
                        <h6>Method:</h6>
                        <p id="method"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Script to populate modal with dynamic content when a card is clicked
    $('#recipeModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Card that triggered the modal
        var title = button.data('title');
        var description = button.data('description');
        var ingredients = button.data('ingredients');
        var method = button.data('method');
        var image = button.data('image');
        
        var modal = $(this);
        modal.find('.modal-title').text(title);
        modal.find('#recipeImage').attr('src', image);
        modal.find('#ingredients').text(ingredients);
        modal.find('#method').text(method);
    });
</script>

</body>
</html>