<?php include 'theam/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - Around the World in 80 Plates</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .hero-section {
            background: url('images/2.png') center/cover no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed; /* Makes it look better on scrolling */
            background-repeat: no-repeat;
            color: rgb(255, 230, 0);
            text-align: center;
            padding: 100px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 60vh; /* Adjust height as needed */
        }
        .content-box {
            background:rgb(252, 255, 92);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            margin-bottom: 30px;
        }
        .cta-section {
            background: #014d01;
            color: white;
            padding: 50px;
            text-align: center;
            border-radius: 12px;
        }
        .icon {
            font-size: 50px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero-section">
        <h1>About Us</h1>
        <p>Discover flavors from around the world and become a global chef!</p>
    </div>

    <div class="container my-5">
        <!-- Our Mission -->
        <div class="row">
            <div class="col-md-12">
                <div class="content-box">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="images/ab30.jpg" class="img-fluid rounded" alt="Global Cuisine">
                        </div>
                        <div class="col-md-6">
                            <h2>Our Mission</h2>
                            <p>"Around the World in 80 Plates" is dedicated to connecting food lovers with authentic traditional dishes. We celebrate diverse cuisines by offering a platform for discovery, sharing, and learning.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <h2 class="text-center mb-4">What We Offer</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="content-box">
                    <i class="fas fa-utensils icon text-danger"></i>
                    <h4>Personalized Recipes</h4>
                    <p>Get tailored dish suggestions based on your preferences.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-box">
                    <i class="fas fa-star icon text-warning"></i>
                    <h4>Recipe Ratings</h4>
                    <p>Rate and review dishes, and share your cooking experiences.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-box">
                    <i class="fas fa-globe icon text-success"></i>
                    <h4>Global Challenges</h4>
                    <p>Take part in food challenges and earn exciting badges.</p>
                </div>
            </div>
        </div>

        <!-- Cultural Insights -->
        <div class="row">
            <div class="col-md-12">
                <div class="content-box">
                    <div class="row align-items-center">
                        <div class="col-md-6 order-md-2">
                            <img src="images/ab3.jpg" class="img-fluid rounded" alt="Cultural Insights">
                        </div>
                        <div class="col-md-6 order-md-1">
                            <h2>Cultural Insights</h2>
                            <p>Each recipe comes with rich cultural stories that highlight traditions, regional flavors, and the history behind famous dishes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="cta-section">
            <h2>Join the Adventure!</h2>
            <p>Sign up and start your culinary journey today.</p>
            <a href="login.html" class="btn btn-light btn-lg">Get Started</a>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
