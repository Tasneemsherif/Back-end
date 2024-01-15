<?php
function Rec_area ($length, $width) {
    $area = $length * $width;
    return $area;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session 6</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=2">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container" >
        <h2>Session 6</h2>
        <div class="alert alert-info">
            <strong>Question 1:</strong> 
            <?php
            $sum = 0; 
            for ($i = 0; $i < 30; $i++) 
            {
                $sum += $i;
            }
            echo "The sum of all numbers from 0 to 30 is: " . $sum . "<br>";
            ?>
        </div>
        <div class="alert alert-info">
            <strong>Question 2</strong> 
            <?php
            echo "The area of rectangle: " . Rec_area(10,10). "<br>";
            ?>
        </div>
    </div>
</body>
</html>
