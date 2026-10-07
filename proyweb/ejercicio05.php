<?php
$ni = "";
$nf = "";
$cp = 0;
$cn = 0;

if (isset($_POST['btnCalcular'])) {
    $ni = (int)$_POST['NumInicial'];
    $nf = (int)$_POST['NumFinal'];

    $i = $ni;
    while ($i <= $nf) {
        if ($i > 0) {
            $cp++;
        } elseif ($i < 0) {
            $cn++;
        }
        $i++;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ejercicio05 - While</title>
</head>
<body>
    <form method="post" action="">
        <table>
            <tr><td colspan="2"><strong>ejercicio05(While)</strong></td></tr>
            <tr><td>Num. Inicial</td><td><input type="text" name="txtNumInicial" value="<?php echo $ni; ?>"></td></tr>
            <tr><td>Num. Final</td><td><input type="text" name="txtNumFinal" value="<?php echo $nf; ?>"></td></tr>
            <tr><td>Cant. Positivos</td><td><input type="text" name="txtCantPositivos" value="<?php echo $cp; ?>" readonly></td></tr>
            <tr><td>Cant. Negativos</td><td><input type="text" name="txtCantNegativos" value="<?php echo $cn; ?>" readonly></td></tr>
            <tr><td></td><td><input type="submit" name="btnCalcular" value="Calcular"></td></tr>
        </table>
    </form>
</body>
</html>