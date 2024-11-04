<?php
require 'process.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Oriya:wght@400..700&display=swap" rel="stylesheet">
    <title>RuneStats</title>
</head>

<body class="noto-serif-oriya-custom body-background">
    <nav class="navbar nav-bg">
        <div class="container-fluid ms-5">
            <a class="navbar-brand nav-color" href="index.php">
                <img src="./images/osrs.png" alt="osrs" class="img-navbar me-2">
                Runestats
            </a>
        </div>
    </nav>
    <div class="container-fluid main-container d-flex align-items-center justify-content-center mt-5 container-bg">
        <div class="col-4 d-flex flex-column mt-5">
            <h3 class="text-color">Runestats</h3>
            <p class="text-color">Enter a name to see the player's statistics.</p>
            <form method="POST" action="page.php">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" required id="usernameInput" name="username" placeholder="Enter player name" maxlength="12" required>
                    <button class="btn btn-danger nav-color d-flex" id="searchButton" type="submit">
                        Statistics <i class="bi bi-arrow-right ms-1"></i>
                    </button>
                </div>
            </form>
        </div>
</body>

</html>