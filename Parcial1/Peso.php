<?php 
	//inclusión del archivo de conexión de base de datos para utilizar la variable $conn

	include("database.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Peso</title>
</head>
<body>
	<div id="cabecera">
<h1>REGISTRO DE PESO</h1>
<div class="txtPresentaMenu">Menú</div>
<span><a href="Lechon.php">Lechon</a></span>
	<span><a href="Peso.php">Peso</a></span>
<hr/>
	<form action="Peso.php" method="POST">
  <p>Codigo del Animal: <input type="text" name="Codigo" size="4"></p>
  Peso en Libra: <input type="text" name="Peso" size="4"></p>
  

  <p>Registrar:
    <input type="submit" value="Enviar" name="enviar">
    <input type="reset" value="Borrar">
  </p>
</body>
</html>



<?php
	//comprobación del accionamiento del botón
	if(isset($_POST['enviar'])){
		$codigo = $_POST['Codigo'];
		$peso = $_POST['Peso']; 
		

		$query = "INSERT INTO peso (CodigoAnimal,PesoLibra) VALUES ('$codigo','$peso')";

		mysqli_query($conn, $query);


	}
?>