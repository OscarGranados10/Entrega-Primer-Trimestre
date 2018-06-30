
<!DOCTYPE html>
<html lang"es">
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Sitio Web que abarca tematicas relacionadas con el espacio">
	<meta name="author" content="Oscar Granados">
	<meta name="copyright" content="&copy; 2018 Servicio Nacional de aprendizaje">
	<meta name="date" content="2018-02-27">
	<title>Explora un Gran Vacío</title>
	<link rel="stylesheet" type="text/css" href="css/Contactenos.css">
</head>
<body>
<?php include('Templates/Header.php'); ?>
<div id="container" class="rgba">
<center>
<a name="arriba"></a>
<a href="#abajo" class="blancouno">▼</a>
</center>
<center>
<h2> SIGUENOS EN NUESTRAS REDES SOCIALES </h2>
        <a href="https://www.facebook.com/" target="_blank" class="clicf"  ><img src="imagenes/face.png" class="globaltam" alt="Facebook"></a>
		<a href="https://www.instagram.com/" target="_blank" class="clici" ><img src="imagenes/insta.png" class="globaltam"  alt="Instagram"></a>
		<a href="https://twitter.com/?lang=es" target="_blank" class="clict" ><img src="imagenes/twi.png" class="globaltam"  alt="Twitter"></a>
		<a href="https://www.youtube.com/" target="_blank" class="clicy" ><img src="imagenes/youtu.png" class="globaltam"  alt="Youtube"></a>
		<a href="https://co.linkedin.com/" target="_blank" class="clicin" ><img src="imagenes/in.png" class="globaltam"  alt="Linkedin"></a>
		<a href="https://co.pinterest.com/" target="_blank" class="clicp"><img src="imagenes/pinter.png" class="globaltam"  alt="Pinterest"></a>
</center>
<hr></hr>
<center>
<h2> PARA MÁS INFORMACIÓN </h2>
</center>
<div id="ajustes">
<form >
	<p>
		<label>Año de petición</label>
		<select name="anio">
			<script type="text/javascript">
			var f=2018;
			var f=1968;
			while(i+f){
				document:write("<option>" + i + "</option>");
				i==:
			)
			</script>
		</select>
	</p>
		<input type="radio" name="servicio" value="cliente" checked> Cliente
		<input type="radio" name="servicios" value="particular">Particular
	</p>
	<p>
		<label>Motivo del mensaje</label>
	</p>
	<p>
		<select name="motivo">
			<option>Quejas</option>
			<option>Sugerencias</option>
			<option>Soporte técnico</option>
			<option>Nuevo Servicio</option>
			<option selected="selected">--Seleccionar--</option>
		</select>
	</p>
	<div>
		<label for="name">Tu nombre:</label><br/>
		<hr></hr>
		<input name="name" type="text" value="" size="50"/><br/>
	</div>
    <div>
    	<label for="email">Tu email:</label><br/>
    	<hr></hr>
    	<input name="email" type="text" value="" size="50"/><br/>
    </div>
    <div>
    	<label for="message">Tu mensaje:</label><br/>
    	<hr></hr>
    	<textarea name="message" rows="10" cols="100"></textarea><br/>
    </div>
    <input type="submit" value="Enviar Mensaje"/>
    <input type="reset" value="Limpiar Datos"/>
</form>
</div>
<hr></hr>
<center>
	<div>
		<img src="">
	</div>
</center>
<hr></hr>
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15905.320097697657!2d-74.1181233!3d4.712615850000001!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1520436725707" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
<hr></hr>
<center>
<a href="#arriba" class="blancouno">▲</a>
<a name="abajo"></a>
</center>
</div>
<?php include('Templates/Pie de Página.php'); ?>
</body>
</html>