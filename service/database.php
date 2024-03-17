<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "YOUR_DATABASE"; // your database

$db = mysqli_connect($hostname, $username, $password, $db_name);

if($db->connect_error) {
    echo "Koneksi database error";
    die();
}

?>