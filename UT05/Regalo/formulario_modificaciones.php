<html>

<head></head>

<body>
	<form action="mod_producto.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend><strong>BAJAS</strong></legend>
			<p><strong>Seleccione producto a eliminar:</strong></p>
			<select name="product" id="product">
				<?php
				include("conexion.php");

				$consulta = "SELECT * FROM productos";
				$result = mysqli_query($conn, $consulta);

				while ($row = mysqli_fetch_array($result)) {
					echo "<option value='" . $row['codigo'] . "'>" . $row['detalle'] . "</option>";
				}
				mysqli_close($conn);
				?>

			</select>
			<input type="submit" value="Modificar">
			<p><a href="menu.php"> Volver al menu</a></p>
		</fieldset>
	</form>
</body>
