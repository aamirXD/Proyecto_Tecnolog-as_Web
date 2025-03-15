<?php
$Código = $_POST['id']; // Identificador del registro a modificar
$Nombre = $_POST['txtnombre'];
$Telefono = $_POST['txttelefono'];
$Fecha = $_POST['txtfecha'];
$Hora = $_POST['txthora'];
$Cantidad = $_POST['txtcantidad'];

$cn = mysqli_connect("localhost", "root", "", "reservas_bd");

// Consulta para actualizar los datos
$sql = "UPDATE clientes SET 
        user_name = '$Nombre', 
        user_tel = '$Telefono', 
        user_date = '$Fecha', 
        user_time = '$Hora', 
        user_cant = '$Cantidad' 
        WHERE user_cod = '$Código'";

mysqli_query($cn, $sql);
header('Location: Administrador.php');
?>
