<head>
    <?php
    if (isset($_SESSION["is_signin"]) && $_SESSION["is_signin"]) {
        echo '<link rel="stylesheet" href="style/dashboard.css">';
    } else {
        echo '<link rel="stylesheet" href="style/landing.css">';
    }
    ?>
</head>
<header>

    <?php if (isset($_SESSION["is_signin"]) && $_SESSION["is_signin"] && basename($_SERVER['PHP_SELF']) != 'index.php') { ?>
                <div id="sidebar">
                    <div class="fulscreen-element">
                        <a href="index.php">Home</a>
                        <a href="dashboard.php">Dashboard</a>
                    </div>
                </div>
    <?php } else { ?>
        <div class="navbar">
            <a href="index.php">Home</a>
            <?php if (isset($_SESSION["is_signin"]) && $_SESSION["is_signin"]) { ?>
                <a href="dashboard.php">Dashboard</a>
            <?php } else { ?>
                <a href="signin.php">Signin</a>
                <a href="signup.php">Signup</a>
            <?php }?>
        </div>
    <?php } ?>
</header>