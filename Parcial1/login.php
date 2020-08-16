<?php

session_start();
include("database.php");
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap"rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	

	<hl>Login</hl>
	<span> or <a href="Signup.php">SignUp</a></span>
	
	<form action="login.php"method ="post">
		<input type="text" name="email" placeholder="Ingrese su email">
	<input type="password" name="password" placeholder=" Ingrese su contraseña">
	<input type="submit" value="Enviar" name="enviar">
	</form>
	<span><a href="Lechon.php">Lechon</a></span>
	<span><a href="Registro.php">Registro de Venta</a></span>
	<span><a href="Pesp.php">Peso</a></span>
</body>
</html>



<?php
	//comprobación del accionamiento del botón
	if(isset($_POST['enviar'])){
		$email = $_POST['email'];
		$pass = $_POST['password']; 
		

		$query = "SELECT email, contraseña FROM usuario WHERE email = '$email' and  contraseña = '$pass'";

		$array = mysqli_query($conn, $query);

		if($array){
			

			$row = mysqli_fetch_array($array);

			$_SESSION['user'] = $row[0];
			header("Location: Lechon.php");
			
		}


	}
?>