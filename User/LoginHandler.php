<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "newsDB";

$conn = mysqli_connect($server_name, $user_name, $password, $database_name);

$user_name = $_POST["userName"];
$password = $_POST["password"];

$sql = "select * from users where email='$user_name' and password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION["user_name"] = $user_name;
    $_SESSION["user_password"] = $password;
    header("location: http://localhost/NewsSite/user/Home.php");
} else {
    setcookie("failed", "fail", time() + 1);
    header("location: http://localhost/NewsSite/user/Login.php");
}
