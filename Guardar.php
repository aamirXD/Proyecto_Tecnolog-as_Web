<<?php
$Nombre=$_POST['txtnombre'];
$Telefono=$_POST['txttelefono'];
$Fecha=$_POST['txtfecha'];
$Hora=$_POST['txthora'];
$Cantidad=$_POST['txtcantidad'];

$cn=mysqli_connect("localhost","root","","reservas_bd");
mysqli_select_db($cn,"reservas_bd");

$sql="insert into clientes(user_name,user_tel,user_date,user_time,user_cant)values('$Nombre','$Telefono','$Fecha','$Hora','$Cantidad')";
mysqli_query($cn,$sql);

header('location:Index.php');
?>
