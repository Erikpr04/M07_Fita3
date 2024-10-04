<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php

if(isset($_POST["text"])) {
    $content = file_get_contents("ex33.txt");
    $fp = fopen("ex33.txt", "w");
    fwrite($fp, $content . $_POST["text"]. "\n");
    fclose($fp);
}

echo str_replace("\n","<hr>",file_get_contents("ex33.txt"));

?>

<form action="ex33pagina1.php" method="POST">
    <input type="textarea" name="text" id="text">
    <input type="submit">
</form>
    
</body>
</html>