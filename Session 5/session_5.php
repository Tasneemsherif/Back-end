<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        
        <div class="alert alert-info">
            <strong>Info!</strong> 
            <?php
            $age = 30;
            if ($age  <= 30){
                echo "You are less than or equal 30 ";
            }else{
                echo "You are greater than 30"; 
            }
            ?>
        </div>
    </div>
</body>

</html>
