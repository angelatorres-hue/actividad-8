<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTRUCTURA CONDICIONAL (if)</title>
</head>
<body>
<?php
$valor = rand(1, 100);
echo "El valor sorteado es $valor<br>";
if ($valor <= 9) {
    echo "Tiene un digito";
} else {
    if ($valor < 100){
     echo "Tiene 2 digitos";   
    } else { 
     echo "Tiene 3 digitos";   
    } 
}
?>
</body>
</html>