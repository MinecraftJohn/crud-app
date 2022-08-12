<?php
    session_start();
    if (!empty($_SESSION["sessionLoginEmail"])) {
        header("Location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience the 4 Function - Crudhub</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <script src="assets/js/variables.js" defer></script>
    <script src="assets/js/navigation.js" defer></script>
</head>
<body>
    <?php include "navigation.php"; ?>
    <div class="homeSection" style="height: calc(90vh - 80px)">
        <div class="homeContainer">
            <div class="homeBox">
                <h1 class="homeBoxTitle">CRUD APP</h1>
                <p class="homeBoxSubtitle">Experience Create Read Update and Delete on a live page!</p>
                <a class="homeBoxButton" href="register.php">GET STARTED</a>
            </div>
            <div class="homeBox">
                <img src="assets/img/crud_logo_representaion.png" class="homeBoxLogo" draggable="false" alt="Home Page CRUD Logo">
            </div>
        </div>
    </div>
</body>
</html>