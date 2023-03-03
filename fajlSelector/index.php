<?php

$path    = '../';
$files = array_diff(scandir($path), array('.', '..'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Selector</title>
</head>

<body>
   
   <?php
   
    foreach ($files as $file) { ?>

        <a href="<?=$path.$file ?>"><?=$file ?></a>
        <br>
        
    <?php } ?>

</body>


</html>