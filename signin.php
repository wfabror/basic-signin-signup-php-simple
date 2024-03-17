<?php 
    include "service/database.php";
    session_start();

    $signin_msg = "";

    if(isset($_SESSION["is_signin"])) {
        header("location: dashboard.php");
    }

    if(isset($_POST['signin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash_pass = hash('sha256', $password);
        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$hash_pass'";

        $result = $db->query($sql);

        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION["username"] = $data["username"];
            $_SESSION["is_signin"] = true;
            header("location: dashboard.php");
        } else {
            $signin_msg = "Akun tidak ditemukan";
        }
        $db->close();

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/form.css">
</head>
<body>
    <?php include "layout/header.php"; ?>
    <main>

        <div class="card">
            <p>Sign In</p>
            <i><?= $signin_msg ?></i>
            <form action="signin.php" method="POST">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" name="signin">Sign In</button>
            </form>
        </div>
    </main>
        <?php include "layout/footer.html"; ?>
    </body>
</html>