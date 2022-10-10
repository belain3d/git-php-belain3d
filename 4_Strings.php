<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4_Strings.php</title>
    <style>
        body{
            background-color: black;
            color:white;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $author = "belain3d";
        $sky = "Look! It's a bird! It's a plane! Oh, it's $author.";
        echo $sky, "<br>";
        echo "This is in lowercase: ", strtolower($sky), "<br>";
        echo "This is in uppercase: ", strtoupper($sky), "<br>";
        echo "This shit is ", strlen($sky), " characters", $sky[4];

    ?>
</body>
</html>