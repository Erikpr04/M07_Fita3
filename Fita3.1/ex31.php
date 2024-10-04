<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

    <h1>PROCESSA CONTACTES</h1>

    <?php
    $arraydades = file("contactes31.txt");

    echo "<table style='border: 1px solid black; border-collapse: collapse;'>";
    echo "<tr><td>Nom</td><td>Cognoms</td><td>Edat</td><td>Telefon</td></tr>";
    foreach ($arraydades as $dades) {
        echo "<tr>";
        $array = explode(",", $dades);
        echo "<td>$array[0]</td><td>$array[1]</td><td>$array[2]</td><td>$array[3]</td>";

        echo "</tr>";
    }
    echo "</table>";

    $stringdadestotal = file_get_contents("contactes31.txt");


    $stringdadestotal = str_replace(",", "#", $stringdadestotal);

    file_put_contents("contactes31b.txt", $stringdadestotal);
    ?>



    
</body>
</html>