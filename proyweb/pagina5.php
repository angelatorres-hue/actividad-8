<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nota1 = 10;
    $nota2 = 7;
    $nota3 = 8;

    $suma=$nota1+$nota2+$nota3;
    $promedio=($suma)/3;

    echo "Juan aprobo la materia con las notas $nota1, $nota2 y $nota3";
    echo "<hr>";
    echo "Juan aprobo la materia con las notas ".$nota1.", ".$nota2.", ".$nota3;
    echo "<hr> SUMATORIA: ".$suma;
    echo "<hr> PROMEDIO: ".$promedio;



    ?>
</body>
</html>