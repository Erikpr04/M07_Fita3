<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>INTRODUEIX DADES</h1>

<?php
if(isset($_POST["comentari"]) && isset($_POST["separador"])) {
    $fp = fopen("comentaris.txt", "w");
    fwrite($fp, str_replace(" ", $_POST["separador"], $_POST["comentari"]) );
}

?>

<form action="ex32.php" method="POST">
<input type="textarea" name="comentari" id="comentari" >
<input type="text" name="separador" id="separador">
<input type="submit">
</form>


    
</body>
</html>