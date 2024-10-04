<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php

    $content = file_get_contents("ex34.txt");
    $fp = fopen("ex34.txt", "r");
    $array = explode("##", $content);
    for ($i = 0; $i < count($array); $i++) {
        echo "<h1>".$array[$i]."</h1>";
    }
    fclose($fp);
?>
    
</body>
</html>