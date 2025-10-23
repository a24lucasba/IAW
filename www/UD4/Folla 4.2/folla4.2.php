<!DOCTYPE html>
<html>
<head>
<style>
	#contedor
	{
		width:70%;
		margin:20px auto;
		background-color:white;
			
		display: grid; 
		grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
		grid-gap: 5px; 
	}

	.tema
	{
		/* width:200px; */
		height:210px;
		background-color:white;
		border:1px black solid;
		text-align: center;
		padding-top:20px;
		font-family:Arial;
			
	}
	img
	{
	width:130px;
	height:130px;
		
	}
</style>


<meta charset="utf-8" />
<title></title>
</head>
<body>

	


<?php
	$conexion = mysqli_connect("db","usuario","abc123.","musica");

	if ($conexion){
		echo "<form method='get' action='folla4.2.php' class='tema'>
			<input type='submit' name='listaCompleta' value='Lista todos os temas'><br><br>
			<input type='submit' name='ordenTitulo' value='Listar ordenados polo título'><br><br>
			<input type='submit' name='ordenAutor' value='Lista ordenados polo autor'><br><br>
			<select name='grupo'>
				<option value='The Beatles'>The Beatles</option>
				<option value='The Rolling Stones'>The Rolling Stones</option>
				<option value='Outros'>Outros</option>
			</select>
			<input type='submit' name='filtrarGrupo' value='Filtrar por grupo'>
		</form>";





		echo "<article id='contedor'>";

		$consulta = mysqli_query($conexion,"SELECT * FROM tema");

		if (isset($_GET['listaCompleta'])){
			$consulta = mysqli_query($conexion,"SELECT * FROM tema");
		}
		if (isset($_GET['ordenTitulo'])){
			$consulta = mysqli_query($conexion,"SELECT * FROM tema order by Titulo");
		}
		if (isset($_GET['ordenAutor'])){
			$consulta = mysqli_query($conexion,"SELECT * FROM tema order by Autor");
		}
		if (isset($_GET['filtrarGrupo'])){
			$grupo = $_GET['grupo'];
			if ($grupo == 'Outros'){
				$consulta = mysqli_query($conexion,"SELECT * FROM tema WHERE Autor not like 'The Beatles' or 'The Rolling Stones'");
			}else{
				$consulta = mysqli_query($conexion,"SELECT * FROM tema WHERE Autor like '$grupo'");
			}
		}

		while ($fila = mysqli_fetch_array($consulta)){
			$imaxe = $fila['Imaxe'].".jpg";
			echo "<div class='tema'>
				<img src='imaxes/$imaxe'><br>"
				.$fila['Titulo']."<br>"
				.$fila['Autor']."<br>"
				.$fila['Ano'].
				"</div>";
		}

	}else{
		echo "Error al intentar conectar";
	}
?>

<article>
</body>
</html>






















