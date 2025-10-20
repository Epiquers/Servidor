<html>

<head></head>

<body>
	<form action="bajas.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Eliminar producto</legend>
			<select name="product" id="product">
				<?php
				include("conexion.php");

				$consulta = "SELECT * FROM productos";
				$result = mysqli_query($conn, $consulta);

				while ($row = mysqli_fetch_array($result)) {
					echo "<option value='" . $row['codigo'] . "'>" . $row['detalle'] . "</option>";
				}

				?>

			</select>
			<input type="submit" value="Eliminar">
		</fieldset>
	</form>
	<p><a href="menu.php"> Volver al menu</a></p>
</body>

</html>