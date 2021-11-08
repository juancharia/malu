<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>𝐌𝐀𝐋𝐔 | Contacto</title>
	<link rel="shortcut icon" href="img/icono.png">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<style type="text/css">
	*{padding: 0px;
		margin: 0px;
		font-family: Century Gothic;

	}
	form {
		border: black 1px solid;
		width: 730px;
		height: 520px;
		margin: auto;
		background: ;
	}

	input, textarea  {
		margin: 12px;
		padding: 8px;
		width: 700px;
		font-size: 18px;
	}
textarea{
	min-height: 200px;
	height: 200px;
	max-height: 200px;
}

.barraa1 {
	position: absolute;
	top: 850px;
	right: 30px;
	width: 1200px;
}


</style>
</head>
<body>
<?php 

include 'barra.php';
?>
<br>
<form method="post">
	<input type="text" placeholder="name" name="name" autocomplete="off" required>
	<input type="eemail"placeholder="eemail"  name="eemail" autocomplete="off" required>
	<input type="text" placeholder="asunto" name="asunto" autocomplete="off" required>
	<textarea placeholder="Mensaje" name="msg"></textarea>
	<input type="submit" name="enviar">
</form>
<?php 

include 'correo.php';

?>
<div class="barraa1">
	<img src="img/barraabajo.png" width="1100px">
</div>

</body>
</html>