<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $Nombre = $_POST['txtnombre'];
    $Telefono = $_POST['txttelefono'];
    $Fecha = $_POST['txtfecha'];
    $Hora = $_POST['txthora'];
    $Cantidad = $_POST['txtcantidad'];
} 
else 
{
    header('Location: Registrar_cliente.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Reserva</title>
    <link rel="stylesheet" type="text/css" href="StyleSheetTW.CSS">
</head>
<body>
    <header>
        <h1>Confirmación de Reserva</h1>
        <h5>Revise los datos antes de confirmar</h5>
    </header>
    <form method="POST" action="Guardar.php">
        <table align="center" width="600">
            <tr>
                <th>Nombre:</th>
                <td><?php echo htmlspecialchars($Nombre); ?></td>
            </tr>
            <tr>
                <th>Teléfono:</th>
                <td><?php echo htmlspecialchars($Telefono); ?></td>
            </tr>
            <tr>
                <th>Fecha:</th>
                <td><?php echo htmlspecialchars($Fecha); ?></td>
            </tr>
            <tr>
                <th>Hora:</th>
                <td><?php echo htmlspecialchars($Hora); ?></td>
            </tr>
            <tr>
                <th>Número de personas:</th>
                <td><?php echo htmlspecialchars($Cantidad); ?></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="hidden" name="txtnombre" value="<?php echo htmlspecialchars($Nombre); ?>">
                    <input type="hidden" name="txttelefono" value="<?php echo htmlspecialchars($Telefono); ?>">
                    <input type="hidden" name="txtfecha" value="<?php echo htmlspecialchars($Fecha); ?>">
                    <input type="hidden" name="txthora" value="<?php echo htmlspecialchars($Hora); ?>">
                    <input type="hidden" name="txtcantidad" value="<?php echo htmlspecialchars($Cantidad); ?>">
                    <input type="submit" name="confirmar" value="Confirmar Reserva">
                </td>
            </tr>
        </table>
    </form>
    <center>
        <a href="Registrar_cliente.php">Regresar</a>
    </center>
</body>
</html>
