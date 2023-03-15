<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro Max</title>
    <link rel="stylesheet" href="./assets/styles/reset.css">
    <link rel="stylesheet" href="./assets/styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <?php
    require_once("pages/navbar.php");

    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
    }
    if (isset($_SESSION['message'])) {
        echo $_SESSION['gestion_admin'] . '<br>';
    }

    require_once("pages/main.php");

    require_once("pages/footer.php");
    ?>
</body>
</html>