<?php
	include("seguridad.php");
?>

<?php 
	include("headNormal.php");
?>
	<title>GESTIÓN - CES VEGA MEDIA</title>
</head>

<body>
	<!--Cabecera-->
	<?php
	include("headerNormal.php");;
	?>

	<!--Barra de navegación-->
	<?php
	include("navNormal.php");
	?>
	<!--Contenido de la página-->
	<section>
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-9 col-sm-8 col-md-6 col-xl-4 mb-5 mt-3">
					<div class="row justify justify-content-center titulos mt-5 mb-4">
						<div class="col-12 mt-5">
							<p class="h2 text-center">WELCOME<?php echo $_SESSION['name'];?></p>
						</div>
						<div class="col-8 mt-4">
							<div class="row">
								<h1>Soy normal</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--Footer-->
	<?php
		include("footerNormal.php");;
	?>

	<script src="../Bootstrap/js/bootnavbar.js"></script>
	<script>
		new bootnavbar();
	</script>

</body>

</html>