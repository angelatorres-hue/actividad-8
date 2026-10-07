<?php
$t = 0;
$c = 0;


if(isset($_POST['btnCalcular'])){
    $t = (float)$_POST['txtTemperatura'];
    // Proceso: Determinar el tipo de clima
    if ($t < 10) {
        $c = "FRÍO";
    } elseif ($t >= 10 && $t <= 20) {
        $c = "NUBLADO";
    } elseif ($t >= 21 && $t <= 30) {
        $c = "CALOR";
    } elseif ($t > 30) {
        $c = "TROPICAL";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="ejercicio02.php">
        <table>
            <tr>
                <td colspan="2"><strong>ejercicio02</strong></td>
            </tr>
            <tr>
                <td>Dia</td>
                <td><input type="text" name="txtTemperatura" value="<?php echo $t; ?>"></td>
            </tr>
            <tr>
                <td>Mes</td>
                <td><input type="text" name="txtClima" value="<?php echo $c; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnCalcular" value="Calcular"></td>
            </tr>
        </table>
    </form>
</body>
</html>