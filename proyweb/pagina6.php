<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTRUCTURA CONDICIONAL (if)</title>
</head>
<body>
<?PHP
    $valor = rand(1, 10);
    echo "el valor sorteado es $valor<br>";
    if ($valor <= 5) {
        echo "es menor o igual a 5";
    } else {
        echo "Es mayor a 5";
    }
?> 
</body>
</html>