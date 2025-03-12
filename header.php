<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Around the World in 80 Plates</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS -->
</head>
<body>
    <style>
    /* Navbar Styling */
    .navbar {
        height: 60px; /* Set navbar height */
        background-color: #00970d !important; /* Background color */
        width: 100vw; /* Full viewport width */
        position: fixed; /* Fixed at the top */
        top: 0;
        left: 0;
        z-index: 1000;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Shadow effect */
    }

    /* Logo Styling */
    .navbar-logo {
        height: 60px; /* Same as navbar height */
        width: auto; /* Maintain aspect ratio */
    }

    /* Navbar Links */
    .navbar-nav .nav-link {
        line-height: 60px; /* Center links vertically */
        font-weight: bold;
        color: #000000 !important;
    }

    .navbar-nav {
        display: flex;
        align-items: center;
        justify-content: right;
        width: 100%;
    }

    .navbar-brand, .nav-link {
        color: #000000 !important;
        font-size: 20px; /* Adjust the font size as needed */
        font-weight: bold; /* Optional: Make text bold */
    }

    .navbar-brand:hover, .nav-link:hover {
        color: #701ccf !important;
    }
    </style>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">Around the World in 80 Plates</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="recipes.php">Recipes</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-warning text-dark" href="login.php">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
