<html>
<head>
	<title></title>
	<script type="text/javascript" src="../public/js/vendor/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../public/js/main_02a.js"></script>
</head>
<body>
	
	<form class="form-mod-user">
		<div class="id_user"><?php echo $_GET['User']; ?></div>
		
		<input type="text" name="nombre" id="nombre" placeholder="Nombre"><br>
		
		<input type="text" name="apellido" id="apellido" placeholder="Apellido"><br>
		
		<img src="" id="imagen_actual"></img>
		
		<input type="file" id="file-imagen" name="imagen[]" multiple/><br>
		
		<select name="genero" id="genero">
			<option disabled selected>Genero</option>
			<option value="Masculino">Masculino</option>
			<option value="Femenino">Femenino</option>
		</select><br>
		
		<input type="text" name="sitio_web" id="sitio_web" placeholder="Sitio Web"><br>
		
		<input type="text" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de nacimiento"><br>
		
		<select name="pais" id="pais">
			
		</select><br>
		
		<select name="departamento" id="departamento">
		
		</select><br>
		
		<select name="municipio" id="municipio">
			
		</select><br>
		
		<select name="rol" id="rol" disabled>
			<option disabled selected>Rol</option>
			<option>Administrador</option>
			<option>Otro usuario</option>
		</select><br>
		
		<input type="text" name="email" id="email" placeholder="Correo" disabled><br>
		
		<button name=="btn-mod-usuario" id="btn-mod-usuario">Aceptar</button>
	
	</form>

</body>
</html>