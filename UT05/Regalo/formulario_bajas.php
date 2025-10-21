<html>

<head></head>

<body>
	<form action="bajas.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Eliminar producto</legend>
			<select name="eliminar" id="eliminar">
				<?php
				include("conexion.php");
				$consulta = "SELECT * FROM productos";
				$result = mysqli_query($conn, $consulta);

				while ($row = mysqli_fetch_array($result)) {
					echo "<option value='".$row['codigo']."'>".$row['nombre']."</option>";
				}
				?>
			</select>
		</fieldset>
	</form>
	<p><a href="menu.php"> Volver al menu</a></p>
</body>

</html>