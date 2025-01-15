<?php

include 'process.php';

$pdo = new PDO('mysql:host=localhost;dbname=runestats', 'username', 'password');

$skill = $_GET['skill'];
$playerId = $_SESSION['player_id'];

$sql = "SELECT $skill, last_updated FROM player_progress WHERE player_id = $playerId";
$stmt = $pdo->query($sql);
$player = $stmt->fetchAll(PDO::FETCH_ASSOC);


$firstValue = $player[0];
$firstValueTime = $firstValue['last_updated'];
$firstValueXp = $firstValue[$skill];

$lastValue = end($player);
$lastValueTime = $lastValue['last_updated'];
$lastValueXp = $lastValue[$skill];


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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Oriya:wght@400;700&display=swap" rel="stylesheet">
    <title>View More</title>
</head>

<body class="noto-serif-oriya-custom body-background">
    <nav class="navbar nav-bg">
        <div class="container-fluid ms-5">
            <a class="navbar-brand nav-color" href="index.php">
                <img src="./images/osrs.png" alt="osrs" class="img-navbar me-2">
                Runestats
            </a>
            <div class="navbar-text d-flex me-4 nav-color">
                <h5><?= $_SESSION['username'] ?></h5>
            </div>
        </div>
    </nav>
    <a href="page.php?player_id=<?= $playerId ?>" class="btn btn-danger nav-color"><i class="bi bi-arrow-left"></i></a>

    <div class="d-flex justify-content-center">
        <div class="col-6">
            <h2 class="text-center">Player Progress: <?= $skill ?></h2>
            <table class="table table-bordered mt-4">
                <thead class="table-danger">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Date</th>
                        <th scope="col">Experience Points</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>First Recorded Data</td>
                        <td><?= date("d-m-Y", strtotime($firstValueTime)) ?></td>
                        <td><?= $firstValueXp ?></td>
                    </tr>
                    <tr>
                        <td>Latest Data</td>
                        <td><?= date("d-m-Y", strtotime($lastValueTime)) ?></td>
                        <td><?= $lastValueXp ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center mt-4">
                <h5>Progress:</h5>
                <p>
                    XP Gained: <strong><?= $lastValueXp - $firstValueXp ?></strong>
                </p>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
