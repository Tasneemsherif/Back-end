<?php
session_start();

if (!isset($_COOKIE["username"])) {
    header("Location: index.html");
    exit();
}

$username = $_COOKIE["username"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Welcome</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Welcome,
            <?php echo $username; ?>!
        </h2>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>

</html>