<?php
		//Session start.
		session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<!-- Título-->
	<h2>Número aleatorio</h2>
	<!-- Formulario-->
	<form method="post">
	<?php
		echo"<label>Introduce un número:</label></br>";
		//Variable session
		$_SESSION["num"] = $_POST["numero"];
	?>
			<input type="text" name="numero" value="<?php isset($_SESSION["num"]) and print $_SESSION["num"];?>">
	<?php
		//Lógica del programa.
		
		if(isset($_POST['enviar'])==""){
			
			echo"<p>No has enviado nada.</p><br>";

		}else{		
			if(!isset($_POST['numero'])){
				echo"<p>Envia un numero</p><br>";
			}else{
				if(!is_numeric($_POST['numero'])){
					echo"<p>No es un numero</p><br>";
				}else{
					echo"<p>Es un numero</p><br>";
					//Variable que obtiene un nuúmero aleatorio.
					$numeroAleatorio = rand(1, 3);
					if($_POST['numero']==$numeroAleatorio){
						echo"<p>Has acertado el número aleatorio.</p>";
					}else{
						echo"<p>No has acertado el número aleatorio.</p>";
					}
				}
			}
		}
	?>
	<?php
		//Boton enviar
		echo"<input type='submit' value='enviar' name='enviar'/></br>";
	?>
	<?php
		//Session destruida
		session_destroy();
	?>
	</form>
</body>
</html>