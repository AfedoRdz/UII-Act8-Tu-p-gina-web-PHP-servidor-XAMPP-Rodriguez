<?php include ("extras/header.php"); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Empleado</h1>
			</div>

			<div class="articulo">
			<article><h2>Para iniciar cesion ingresa tus datos en el formulario :</h2><br>

<form action="/action_page.php" method="get">
  <label for="fname">Nombre:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Apellido:</label>
  <input type="text" id="lname" name="lname"><br><br>

<form action="welcome.php" method="post">
E-mail: <input type="text" name="email"><br><br>
  <input type="submit" value="Aceptar"><br><br>			
	</div>
		<?php  include ("extras/sidebar.php"); ?>
		</div>
	</section>
	<?php  include ("extras/footer.php"); ?>
</body>
</html>