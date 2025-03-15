<?php
$cn = mysqli_connect("localhost", "root", "", "reservas_bd");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $Codigo = $_POST['id'];

    $sql = "DELETE FROM clientes WHERE user_cod = '$Codigo'";
    $result = mysqli_query($cn, $sql);

    if ($result) 
    {
        echo "Reserva eliminada correctamente.";
    } 
    else 
    {
        echo "Error al eliminar la reserva.";
    }
}

mysqli_close($cn);
header("Location: Administrador.php");
exit();
?>
