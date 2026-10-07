<?php
//entrada de las formulas
$d = 0;
$m = 0;
$e = 0;

if(isset($_POST['btnCalcular'])){
    $d = (int)$_POST['txtDia']; //formulas
    $m = (int)$_POST['txtMes'];
//proceso para terminar calcular la respuesta
    if (($m == 12 && $d >= 21) || ($m == 1) || ($m == 2) || ($m == 3 && $d <= 20)) {
        $e = "VERANO";
    } elseif (($m == 3 && $d >= 21) || ($m == 4) || ($m == 5) || ($m == 6 && $d <= 21)) {
        $e = "OTOÑO";
    } elseif (($m == 6 && $d >= 22) || ($m == 7) || ($m == 8) || ($m == 9 && $d <= 22)) {
        $e = "INVIERNO";
    } elseif (($m == 9 && $d >= 23) || ($m == 10) || ($m == 11) || ($m == 12 && $d <= 20)) {
        $e = "PRIMAVERA";
    } else {
        $e = "Fecha no válida";
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
    <form method="post" action="ejercicio03.php">
        <table>
            <tr>
                <td colspan="2"><strong>ejercicio03</strong></td>
            </tr>
            <tr>
                <td>Dia</td>
                <td><input type="text" name="txtDia" value="<?php echo $d; ?>"></td>
            </tr>
            <tr>
                <td>Mes</td>
                <td><input type="text" name="txtMes" value="<?php echo $m; ?>"></td>
            </tr>
            <tr>
                <td>Estacion</td>
                <td><input type="text" name="txtEstacion" value="<?php echo $e; ?>" readonly></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnCalcular" value="Calcular"></td>
            </tr>
        </table>
    </form>
</body>
</html>