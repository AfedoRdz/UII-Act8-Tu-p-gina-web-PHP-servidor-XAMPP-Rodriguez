<?php include ("extras/header.php"); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Contacto</h1>
				</div>

<div class="articulo">
<article><h2>Para contactarnos ingresa estos datos:</h2><br>

<form action="/action_page.php" method="get">
<label for="fname">Nombre:</label>
<input type="text" id="fname" name="fname"><br><br>
<label for="lname">Apellido:</label>
<input type="text" id="lname" name="lname"><br><br>
<form action="welcome.php" method="post">E-mail: <input type="text" name="email"><br><br>
<label for="lname">Contraseña:</label>
<input type="text" id="lname" name="lname"><br><br>
<label for="lname">Numero de telefono:</label>
<input type="text" id="lname" name="lname"><br><br>
<label for="lname">Direccion:</label>
<input type="text" id="lname" name="lname"><br><br>

<input type="submit" value="Aceptar"><br><br>			
</div>
		<?php  include ("extras/sidebar.php"); ?>
		</div>
	</section>
	<?php  include ("extras/footer.php"); ?>
</body>
</html>