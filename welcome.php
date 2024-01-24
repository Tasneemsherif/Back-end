<?php 
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if ($username == "admin" && $password == "123456") {
        echo "Welcome admin to website";
    } else {
        echo "Login failed";
    }
}
?>