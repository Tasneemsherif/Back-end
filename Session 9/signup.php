<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];


    setcookie("username", $username, time() + 3600, "/"); 
    header("Location: welcome.php");
    exit();
}
?>
