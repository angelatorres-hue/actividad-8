<?php
// Declaración e inicialización de variables
$c = 0;
$m_d = 0;
$m_igv = 0;
$p = 0;

if (isset($_POST['btnCalcular'])) {
    // Entrada de datos
    $c = (float)$_POST['txtConsumo'];

    // Proceso: Cálculo del descuento según el consumo
    if ($c <= 100) {
        $m_d = $c * 0.10;
    } else {
        $m_d = $c * 0.20;
    }

    // Cálculo del impuesto IGV (19% sobre el monto tras el descuento)
    $m_igv = ($c - $m_d) * 0.19;

    // Cálculo del importe final a pagar
    $p = ($c - $m_d) + $m_igv;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>document</title>
</head>
<body>
    <form method="post" action="ejercicio01.php">
        <table>
            <tr>
                <td colspan="2"><strong>Problema 19</strong></td>
            </tr>
            <tr>
                <td>Consumo</td>
                <td><input type="text" name="txtConsumo" value="<?php echo $c; ?>"></td>
            </tr>
            <tr>
                <td>Monto descuento</td>
                <td><input type="text" name="txtMontoDescuento" value="<?php echo $m_d; ?>" readonly></td>
            </tr>
            <tr>
                <td>Impuesto IGV</td>
                <td><input type="text" name="txtImpuesto" value="<?php echo $m_igv; ?>" readonly></td>
            </tr>
            <tr>
                <td>Importe a pagar</td>
                <td><input type="text" name="txtImporte" value="<?php echo $p; ?>" readonly></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnCalcular" value="Calcular"></td>
            </tr>
        </table>
    </form>
</body>
</html>

