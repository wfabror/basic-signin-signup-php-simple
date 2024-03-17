<?php
session_start();

if (!isset($_SESSION["is_signin"])) {
    header("location: signin.php");
}
if (isset($_POST["signout"])) {
    session_unset();
    session_destroy();
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/dashboard.css">
</head>

<body class="page">
    <?php include "layout/header.php"; ?>
    <div id="content">
        <div class="fullscreen-element">
            <h1>Selamat Datang, <?= $_SESSION["username"] ?> di Dashboard</h1>
            <form action="dashboard.php" method="POST">
                <button type="submit" name="signout">Sign Out</button>
            </form>
        </div>
        <?php include "layout/footer.html" ?>
    </div>
</body>
</html>