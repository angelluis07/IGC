<!DOCTYPE html>
<html>
<head>
<style type="text/css">
#center{
	text-align: center;
	color: #00D7E6;
	font-size: 20px;
	font-family: cursive;
}
body{
	background-repeat:no-repeat;
	background-size:cover;
	background-attachment:fixed;
	background-position:center;   
}
	</style>
	<title></title>
</head>
<body background="gym.jpg">
<div id="center">
<form method="post" action="pagina1.php">
inserte su Nombre
<input type="text" name="nombre">
<br><br>
<br>
Sexo:
<input type="radio" name="sexo" value="femenino" checked="checked" onclick="mostrar()">femenino
	<input type="radio" name="sexo" value="masculino" onclick="ocultar()">masculino</br>
	<br>
	edad:
	<input type="text" name="edad">
	</br>
	<br>
	peso (kg):
	<input type="text" name="peso">
	</br>

	<h1> medidas requeridas</h1>

	ingrese las medidas de su altura:

	<input type="text" name="altura">
	<br><br>
	ingrese las medidas de su cuello:
	<input type="text" name="cuello">
	<br><br>
	ingrese las medidas de su cintura
	<input type="text" name="cintura">
	<br><br>
	<div id="cadera" style="display:block;">
	ingrese las medidas de su cadera
	<input type="text" name="cadera">
	</div>
	<br><br>
<input type="submit" value="aceptar">

	</div>
</div>
	
</div>
	
</form>

</body>
</html>

