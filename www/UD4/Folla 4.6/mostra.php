<!DOCTYPE html>
<html>
<head>
<style>
	
	#contenedor
	{
		width:70%;
		margin:20px auto;
		background-color:white;
			
		display: grid; 
		grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
		grid-gap: 5px; 
		
	
	}

	.produto
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
<article id="contenedor">
<?php
	$servidor = "db";
	$base = "senderismo";
	$usuario = "proba";
	$passwd = "abc123.";
		
	$pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8", $usuario, $passwd);
	$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	if (isset($_GET["listaCompleta"])){
		$pdoStmt = $pdo->query("SELECT * FROM material");
		$pdoStmt->execute();
	};
	if (isset($_GET["ordenMarca"])){
		$pdoStmt = $pdo->query("SELECT * FROM material order by Marca");
		$pdoStmt->execute();
	};
	if (isset($_GET["ordenPrezo"])){
		$pdoStmt = $pdo->query("SELECT * FROM material order by Prezo");
		$pdoStmt->execute();
	};
	if (isset($_GET["filtrar"])){
		$texto = $_GET['filtroMarca'];
		$pdoStmt = $pdo->query("SELECT * FROM material where Marca = '$texto'");
		$pdoStmt->execute();
	};
	if (isset($_GET["filtrarCalquera"])){
		$texto = $_GET['filtroCalquera'];
		$pdoStmt = $pdo->query("SELECT * FROM material where Nome = '$texto' or Marca = '$texto' or Tipo = '$texto' or Prezo = '$texto'");
		$pdoStmt->execute();
	};
	if (isset($_GET["filtrarTipo"])){
		$texto = $_GET['tipos'];
		$pdoStmt = $pdo->query("SELECT * FROM material where Tipo = '$texto'");
		$pdoStmt->execute();
	};
	if (isset($_GET["engadir"])){
		$pdoStmt = $pdo->prepare("INSERT INTO material(Nome,Marca,Tipo,Prezo,Imaxe) VALUES (:nome,:marca,:tipo,:prezo,:imaxe)");
		
		try{
			$nome = $_GET['nome'];
			$marca = $_GET['marca'];
			$tipo = $_GET['tipo'];
			$prezo = $_GET['prezo'];
			$imaxe = $_GET['imaxe'];
		}catch(Exception $e){
			echo "Error al insertar los datos: ", $e->getMessage(), "\n","<br><br>";
			echo "Debes insertar todos los datos";
		}

		try{
			$pdoStmt->execute([':nome'=>$nome,':marca'=>$marca,':tipo'=>$marca,':prezo'=>$prezo,':imaxe'=>$imaxe]);
			echo "Produto inserido";
		}catch(Exception $e){
			echo "Error al insertar los datos: ", $e->getMessage(), "\n";
		}

	};
	if (isset($_GET["editar"])){
		try{
			$nome = $_GET['nome'];
			$marca = $_GET['marca'];
			$tipo = $_GET['tipo'];
			$prezo = $_GET['prezo'];
			$imaxe = $_GET['imaxe'];
		}catch(Exception $e){
			echo "Error al insertar los datos: ", $e->getMessage(), "\n","<br><br>";
			echo "Debes insertar todos los datos";
		}
		
		$pdoStmt = $pdo->prepare("UPDATE material SET Nome=:nome,Marca=:marca,Tipo=:tipo,Prezo=:prezo,Imaxe=:imaxe WHERE Nome=:nome");
		
		try{
			$pdoStmt->execute([':nome'=>$nome,':marca'=>$marca,':tipo'=>$marca,':prezo'=>$prezo,':imaxe'=>$imaxe]);
			echo "Produto editado";
		}catch(Exception $e){
			echo "Error al insertar los datos: ", $e->getMessage(), "\n";
		}

	};
	if (isset($_GET["eliminar"])){
		
		try{
			$nome = $_GET['nome'];
		}catch(Exception $e){
			echo "Error al insertar los datos: ", $e->getMessage(), "\n","<br><br>";
			echo "Debes insertar el nombre del producto a cambiar";
		}

		$pdoStmt = $pdo->prepare("DELETE FROM material where nome=:nome");
		
		try{
			$pdoStmt->execute([':nome'=>$nome]);
			echo "Produto eliminado";
		}catch(Exception $e){
			echo "Error al insertar los datos: ", $e->getMessage(), "\n";
		}

	};
	while ($fila=$pdoStmt->fetch()){
		$srcImaxe = $fila['Imaxe'];
		echo "<div class='produto'><img src='imaxes/$srcImaxe' alt='Imaxe do produto'><br>"
			.$fila["Nome"]."<br>"
			.$fila["Marca"]."<br>"
			.$fila["Tipo"]."<br>"
			.$fila["Prezo"]."€<br>
		</div>";
	}
?>
	<form action="intro.php" method="get">
		<input type="submit" name="volver" value="Volver">
	</form>
<article>
</body>
</html>
