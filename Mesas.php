<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.1">
	<title>Página de mesas disponibles</title>
	<link rel="stylesheet" type="text/css" href="StyleSheetTW.CSS">
</head>
<body>
	<header>
	<h1>Mesas del local disponibles</h1>
	</header>

<?php
$cn = mysqli_connect("localhost", "root", "", "reservas_bd");

$sql = "SELECT * FROM clientes";
$fila = mysqli_query($cn, $sql);

echo "<table border='0' align='center'>";
echo "<tr colspan='5'>
		<th colspan='5'>Mesas ocupadas y datos</th>	
	  </tr>";
echo "<tr>
		<th>Nombre</th>
		<th>Teléfono</th>
		<th>Fecha</th>
		<th>Hora</th>
		<th>Cantidad</th>
	</tr>";

while ($r = mysqli_fetch_array($fila)) {
    echo "<tr align='center'>
			<td>{$r['user_name']}</td>
			<td>{$r['user_tel']}</td>
			<td>{$r['user_date']}</td>
			<td>{$r['user_time']}</td>
			<td>{$r['user_cant']}</td>
		  </tr>";
}
echo "</table>";
mysqli_close($cn);
?>
<center>
<a href="Index.php">Regresar a la página principal</a>
</center>
</body>
</html>
