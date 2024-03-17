<?php
    include "service/database.php";

    session_start();
    if (isset($_SESSION["is_signin"])) {
        header("location: dashboard.php");
    }

    $signup_msg = "";
    if(isset($_POST["signup"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hash_pass = hash("sha256", $password);

        try {
            $sql = "INSERT INTO users (username, password) VALUES 
            ('$username','$hash_pass')";

            if($db->query($sql)){
                $signup_msg = "Anda berhasil mendaftarkan akun, silahkan masuk";
            } else {
                $signup_msg = "Anda gagal mendaftarkan akun, coba lagi";
            }
        } catch (mysqli_sql_exception) {
            $signup_msg = "username sudah digunakan";
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

    <div class="card">
    <p>Sign Up</p>
    <i><?= $signup_msg ?></i>
        <form action="signup.php" method="POST">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" name="signup">Sign Up</button>
        </form>
    </div>
    <?php include "layout/footer.html"; ?>
</body>
</html>