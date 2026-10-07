<?php
// Declaración de variables
$c = "";
$p = "";
$precio = 0;
if (isset($_POST['btnCalcular'])) {
    // Entrada de datos
    $c = (int)$_POST['Calidad'];
    $p = (int)$_POST['Producto'];
    // Proceso mediante Matriz/Arreglo bidimensional
    $precios = [
        1 => [1 => 5000, 2 => 4500, 3 => 4000],
        2 => [1 => 4500, 2 => 4000, 3 => 3500],
        3 => [1 => 4000, 2 => 3500, 3 => 3000]
    ];
    // Verificación e identificación del precio
    if (isset($precios[$p][$c])) {
        $precio = $precios[$p][$c];
    } else {
        $precio = "No válido";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ejercicio04</title>
</head>
<body>
    <form method="post" action="Problema04.php">
        <table>
            <tr>
                <td colspan="2"><strong>ejercicio04</strong></td>
            </tr>
            <tr>
                <td>Calidad</td>
                <td><input type="text" name="Calidad" value="<?php echo $c; ?>"></td>
            </tr>
            <tr>
                <td>Producto</td>
                <td><input type="text" name="Producto" value="<?php echo $p; ?>"></td>
            </tr>
            <tr>
                <td>Precio</td>
                <td><input type="text" name="Precio" value="<?php echo $precio; ?>" readonly></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnCalcular" value="Calcular"></td>
            </tr>
        </table>
    </form>
</body>
</html>