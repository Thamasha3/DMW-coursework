<?php
session_start(); // Start the session

include "db_connection.php"; 

// Check if the user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['full_name'])) {
    header("Location: login.html"); // Redirect to login page
    exit();
}

// Predefined profile pictures
$profile_pictures = [
    "avatar1.jpeg", "avatar2.avif", "avatar3.png", "avatar4.webp"
];

// Set default profile picture if not selected
if (!isset($_SESSION['profile_picture'])) {
    $_SESSION['profile_picture'] = "avatar1.jpeg"; // Default avatar
}

// Handle profile picture selection
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['profile_picture'])) {
    $selected_picture = $_POST['profile_picture'];
    if (in_array($selected_picture, $profile_pictures)) {
        $_SESSION['profile_picture'] = $selected_picture;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Around the World in 80 Plates</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css"> 
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        /* Custom Styling */
        body {
            background-color:rgb(121, 68, 0);
            font-family: 'script', cursive;
            padding-top: 50px;
            background-image: url('images/ab11.jpg'); /* Wood Texture Background */
            background-size: cover;

        }

        .container {
            padding: 20px;
            text-align: center;
            background: rgba(255, 255, 255, 0.8); /* Light background for text */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
            padding-top: 20px;
        }

        /* Sidebar Styling */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color:rgb(18, 88, 0); /* Wood-like color */
            padding-top: 30px;
            padding-right: 10px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    font-size: 18px;
    display: block;
    margin: 10px 0;
    border-radius: 5px;
    transition: background-color 0.3s;
    font-weight: bold;  /* Bold text */
    font-style: italic; /* Optional: italic text */
    font-family: 'Roboto', sans-serif; /* Custom font */
}

        .sidebar a:hover {
            background-color: #8e7a56; /* Lighter shade for hover */
        }

        /* Main Content Styling */
        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            padding: 20px;
            text-align: center;
            background-color: #fdf7e6; /* Light background for cards */
        }

        .card:hover {
            transform: scale(1.05);
        }

        .btn-custom {
            background-color:rgb(255, 175, 3); /* A vibrant food-inspired color */
            color: white;
            width: 100%;
            margin: 10px 0;
            padding: 12px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }
        .btn-custom:hover {
            background-color: #8e7a56;
            transform: scale(1.05);
        }

        .navbar {
            width: 100%;
            max-width: 100%;
            padding-left: 20px;
            padding-right: 20px;
            height: 85px;
        }

        .btn-custom i {
            margin-right: 10px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 0;
            }

            h1 {
                font-size: 24px;
            }

            .container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <a href="profile.php"><i class="fas fa-user-circle"></i> Profile</a>
    <a href="index.html"><i class="fas fa-home"></i> Home</a>
    <a href="view_recipe.php"><i class="fas fa-utensils"></i> Recipes</a>
    <a href="recipe_form.php"><i class="fas fa-book"></i> Recipe Book</a>
    <a href="#"><i class="fas fa-award"></i> Achievements</a>
    <a href="#"><i class="fas fa-chart-line"></i> Leaderboard</a>
    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<!-- Main Content -->
<div class="main-content">
    <div class="container">
        <h1>👋 Hi <?php echo htmlspecialchars($_SESSION['full_name']); ?>!</h1>
        <p>🍽️ Let's explore some delicious recipes together.</p>

        <!-- Profile Picture Section -->
        <h2 class="section-title">👤 Profile Picture</h2>
        <img src="images/avatars/<?php echo htmlspecialchars($_SESSION['profile_picture']); ?>" 
             alt="Profile Picture" class="rounded-circle" width="150" height="150">
        
        <form method="POST" class="mt-3">
            <label for="profile_picture">Choose a profile picture:</label>
            <select name="profile_picture" class="form-select d-inline-block w-auto">
                <?php foreach ($profile_pictures as $picture): ?>
                    <option value="<?php echo htmlspecialchars($picture); ?>" 
                            <?php echo ($_SESSION['profile_picture'] === $picture) ? 'selected' : ''; ?>>
                        <?php echo ucfirst(pathinfo($picture, PATHINFO_FILENAME)); ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- User Activities Section -->
    <div class="section">
        <h2 class="section-title"><span>🎯</span> Your Activities</h2>
        <div class="row">
            <div class="col-md-4"><a href="#" class="btn btn-custom"><i class="fas fa-tachometer-alt"></i> Dashboard</a></div>
            <div class="col-md-4"><a href="view_recipe.php" class="btn btn-custom"><i class="fas fa-utensils"></i> Recipe Tried 🍲</a></div>
            <div class="col-md-4"><a href="recipe_form.php" class="btn btn-custom"><i class="fas fa-book"></i> Recipe Book 📖</a></div>
            <div class="col-md-4"><a href="#" class="btn btn-custom"><i class="fas fa-award"></i> Achievements 🏅</a></div>
            <div class="col-md-4"><a href="#" class="btn btn-custom"><i class="fas fa-chart-line"></i> Leaderboard 📊</a></div>
            <div class="col-md-4"><a href="profile.php" class="btn btn-custom"><i class="fas fa-user-edit"></i> Edit Profile ✏️</a></div>
        </div>
    </div>
</div>

</body>
</html>
