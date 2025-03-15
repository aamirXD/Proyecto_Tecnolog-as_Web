<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.1">
	<title>Página de registro</title>
	<link rel="stylesheet" type="text/css" href="StyleSheetTW.CSS">
</head>
<body>
	<header>
		<img src="Logo.png" class="logo" width="150" height="150" border="1">
		<h1>Realizar reserva en línea</h1>
		<h5>Rellene los datos adecuadamente</h5>
	</header>
			<form method="POST" action="Confirmar.php">
				<table align="center" width="600">
					<tr>
						<th>Ingrese Nombre:</th>
						<td><input type="text" name="txtnombre" required></td>
					</tr>
					<tr>
						<th>Ingrese número de teléfono:</th>
						<td><input type="tel" name="txttelefono" required></td>
					</tr>
					<tr>
						<th>Ingrese Fecha:</th>
						<td><input type="date" name="txtfecha" required></td>
					</tr>
					<tr>
						<th>Ingrese Hora:</th>
						<td><input type="time" name="txthora" required></td>
					</tr>
					<tr>
						<th>Ingrese número de personas:</th>
						<td><input type="number" min="1" max="4" name="txtcantidad" required></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="guardar" value="Guardar">
							<input type="reset" name="cancelar" value="Cancelar">
						</td>
					</tr>
				</table>
			</form>
<center>
<a href="Index.php">Regresar a la página principal</a>
</center>
</body>
</html>
