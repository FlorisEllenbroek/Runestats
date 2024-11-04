<?php

include 'process.php';

$xpValues = $_SESSION['xpValues'] ?? [];

$playerId = $_SESSION['player_id'];

$skills = [
    'attack' => $xpValues['attack'] ?? [],
    'defence' => $xpValues['defence'] ?? [],
    'strength' => $xpValues['strength'] ?? [],
    'hitpoints' => $xpValues['hitpoints'] ?? [],
    'ranged' => $xpValues['ranged'] ?? [],
    'magic' => $xpValues['magic'] ?? [],
    'prayer' => $xpValues['prayer'] ?? [],
    'cooking' => $xpValues['cooking'] ?? [],
    'woodcutting' => $xpValues['woodcutting'] ?? [],
    'fletching' => $xpValues['fletching'] ?? [],
    'fishing' => $xpValues['fishing'] ?? [],
    'firemaking' => $xpValues['firemaking'] ?? [],
    'crafting' => $xpValues['crafting'] ?? [],
    'smithing' => $xpValues['smithing'] ?? [],
    'mining' => $xpValues['mining'] ?? [],
    'herblore' => $xpValues['herblore'] ?? [],
    'agility' => $xpValues['agility'] ?? [],
    'thieving' => $xpValues['thieving'] ?? [],
    'slayer' => $xpValues['slayer'] ?? [],
    'farming' => $xpValues['farming'] ?? [],
    'runecrafting' => $xpValues['runecrafting'] ?? [],
    'construction' => $xpValues['construction'] ?? [],
    'hunter' => $xpValues['hunter'] ?? []
];

arsort($skills);

$skillIcons = [
    'defence' => 'icons/defence_icon.png',
    'attack' => 'icons/attack_icon.png',
    'strength' => 'icons/strength_icon.png',
    'hitpoints' => 'icons/hitpoints_icon.png',
    'ranged' => 'icons/ranged_icon.png',
    'magic' => 'icons/magic_icon.png',
    'prayer' => 'icons/prayer_icon.png',
    'cooking' => 'icons/cooking_icon.png',
    'woodcutting' => 'icons/woodcutting_icon.png',
    'fletching' => 'icons/fletching_icon.png',
    'fishing' => 'icons/fishing_icon.png',
    'firemaking' => 'icons/firemaking_icon.png',
    'crafting' => 'icons/crafting_icon.png',
    'smithing' => 'icons/smithing_icon.png',
    'mining' => 'icons/mining_icon.png',
    'herblore' => 'icons/herblore_icon.png',
    'agility' => 'icons/agility_icon.png',
    'thieving' => 'icons/thieving_icon.png',
    'slayer' => 'icons/slayer_icon.png',
    'farming' => 'icons/farming_icon.png',
    'runecrafting' => 'icons/runecrafting_icon.png',
    'construction' => 'icons/construction_icon.png',
    'hunter' => 'icons/hunter_icon.png'
];

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
    <title>RuneStats</title>
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
    <a href="index.php" class="btn btn-danger nav-color"><i class="bi bi-arrow-left nav-color"></i></a>
    <div class="row mt-5 d-flex justify-content-center container-fluid">
        <div class="col-4">
            <table class="table table-striped table-light ">
                <thead>
                    <tr class="">
                        <th scope="col" style="color: #A11310"><?php echo $_SESSION['username'] ?></th>
                        <th scope="col">Level</th>
                        <th scope="col">Experience</th>
                        <th scope="col" id="view-more">View more</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($skills as $skill => $xp): ?>
                        <tr>
                            <th scope="row">
                                <img src="<?= $skillIcons[$skill] ?>" alt="<?= $skill ?> icon" width="24" height="24">
                                <?= ucfirst($skill) ?>
                            </th>
                            <td class="text-center"><?= calculateLevel($xpValues[$skill] ?? null) ?></td>
                            <td class="text-center"><?= $xpValues[$skill] ?? null ?></td>
                            <td class="text-center"><a href="viewMore.php?skill=<?= $skill ?>&player_id=<?= $playerId ?>" class="link-underline-danger link-underline-opacity-0 btn btn-danger nav-color"><i class="bi bi-arrow-right d-flex align-items-center nav-color"></i></a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>