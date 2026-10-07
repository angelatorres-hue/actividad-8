<?php
//incialisamos variables
$n1=0;
$n2=0;
$suma=0;
$promedio=0;
$nombre=" ";

if(isset($_REQUEST["btnCalcular"]))
$nombre=$_REQUEST["nombre"];
echo "<h3>$nombre</h3>";
$suma=$_REQUEST["n1"]+$_REQUEST["n2"];
$promedio=$suma/2

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="script_m4.php">
        <b>Nombre :</b>
        <input type="text" name="nombre" size="30" value="<?php echo $nombre;?>"><br>
        <b>Nota 1 :</b>
        <input type="text" name="n1" value="?php echo $n1 ?>"><br>
        <b>Nota 2 :</b>
        <input type="text" name="n2" value="<?php=$n2?>"><br>
        <input type="submit" value="Calcular">
        <input type="reset" value="Limpiar">
        <br>




    </form>

</body>
</html>