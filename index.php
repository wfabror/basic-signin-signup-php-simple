<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <title>Document</title>
    <link rel="stylesheet" href="style/landing.css">
</head>
<body>
    <?php include "layout/header.php"; ?>
    <main>
        <p class="fullscreen-text" data-aos="fade-up">Welcome</p>
    </main>
    <?php include "layout/footer.html"; ?>
    <script>
        AOS.init({duration: 1800, offset: 100});
    </script>
</body>
</html>