<?php 



include('database.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>LECHONES</title>
	<meta charset="utf-8">
</head>
<body>
<div id="cabecera">
<h1>REGISTRO DE LECHONES</h1>
<div class="txtPresentaMenu">Menú</div>
<span><a href="Venta.php">Registro de Venta</a></span>
<span><a href="Peso.php">Peso</a></span>
<hr/>

<?php  
	//action: indica la parte en donde se ejecuta la petición del form
	//method: POST es para envío de datos
?>

<form action="Lechon.php" method="POST">
  <p>CodigoAnimal: <input type="text" name="Codigo" size="4"></p>
  <p>Descripcion: <input type="text" name="Descripcion" size="25"></p>
  <p>Edad: <input type="text" name="Edad" size="4"></p>
  PesoLibra: <input type="text" name="Peso" size="4"></p>
  PesoCompra: <input type="text" name="Compra" size="4"></p>

  <p>Registrar:
    <input type="submit" value="Enviar" name="enviar">
    <input type="reset" value="Borrar">
  </p>
</form>
</body>
</html>


<?php
	//comprobación del accionamiento del botón
	if(isset($_POST['enviar'])){
		$codigo = $_POST['Codigo'];
		$descripcion = $_POST['Descripcion'];
		$edad = $_POST['Edad'];
		$peso = $_POST['Peso']; 
		$compra = $_POST['Compra'];

		$query = "INSERT INTO lechon (CodigoAnimal,PrecioCompra,PesoLibra,Descripcion,edad) VALUES ('$codigo','$compra','$peso','$descripcion','$edad')";

		mysqli_query($conn, $query);


	}
?>