<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazione 2B</title>
</head>
<body>
    <?php
        $b = $_POST["base"];        //name no id
        $h = $_POST["altezza"];

        $area = $b*$h; 
        $perimetro = ($b+$h)*2;
        $diagonale = round(sqrt(pow($b,2)+pow($h,2)));

        echo "Perimetro: " . $perimetro . "<br>";
        echo "Area: " . $area . "<br>";
        echo "Diagonale: " . $diagonale;

    ?>
    
</body>
</html>