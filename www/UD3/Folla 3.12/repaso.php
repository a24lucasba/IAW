<!DOCTYPE html>
<html>
<head><title>Rock</title>
</head>
<body>

<div id="contenedor">

<header>
<h2>Éxitos dos 60's e 70's</h2>
</header>
<aside id="esquerda"></aside>
<aside id="dereita"></aside>



<aside id="formulario">
	<form action="repaso.php" method="get">
		<label name="buscar">Buscar canción</label><br>
		<input type="text" name="titulo">
		<input type="submit" name="buscar" value="Buscar"><br>
		<label name="orden">Ordenado:</label><br>
		<input type="submit" name="ordenBanda" value="Polo nome da banda"><br>
		<input type="submit" name="ordenTitulo" value="Polo título"><br>
		<input type="submit" name="ordenAnoR" value="Decrecente polo ano"><br>
		<input type="submit" name="ordenLonxitudeTitulo" value="Pola lonxitude do título"><br>
		<label name="cambios">Cambios:</label><br>
		<input type="submit" name="eliminaEspazos" value="Elimina espazos nos títulos"><br>
		<input type="submit" name="cambioLetra" value="Cambio 'oo' por 'aa'"><br>
		<input type="submit" name="maiuscula" value="Maiúscula a 3º letra de cada título"><br>
	</form><br>
</aside>
<article id="foto"></article>
<article id="taboa" >

	<table border="8" cellpading="2">
		<tr>
			<td>Título</td>
			<td>Músico</td>
			<td>Ano</td>
			<td>Duración</td>
		</tr>
	<?php
		$cancions=array("Stairway to heavenoo"=>array("Led Zeppelinoo","1970oo","oo482"),
		"Confortable numb"=>array("Pink Floyd",1979,413),
		"(I can´t get no) Satisfaction"=>array("The Rolling Stone",1965,225),
		"Like a rolling stone"=>array("Bob Dylan",1965,369),
		"Born to run"=>array("Bruce Springsteen",1975,270),
		"Hotel California"=>array("Eagles",1976,390),
		"Light My Fire"=>array("The Doors",1967,428),
		"Good Vibrations"=>array("The Beach Boys",1966,215),
		"Hey Jude"=>array("The Beatles",1968,431),		  
		"Imagine"=>array("John Lennon",1971,183));

		function ordenarBanda($a,$b){
			if($a[0]<$b[0]){
				return -1;
			}elseif($a[0]>$b[0]){
				return 1;
			}else{
				return 0;
			}
		}
		function ordenarAnoR($a,$b){
			if($a[1]<$b[1]){
				return 1;
			}elseif($a[1]>$b[1]){
				return -1;
			}else{
				return 0;
			}
		}

		function ordenarLonxitudeTitulo($a,$b){
			if(strlen($a[0])<strlen($b[0])){
				return -1;
			}elseif(strlen($a[0])>strlen($b[0])){
				return 1;
			}else{
				return 0;
			}
		}
	

		if (isset($_GET["ordenBanda"])){
			uasort($cancions,'ordenarBanda') ;
		}
		if (isset($_GET["ordenAnoR"])){
			uasort($cancions,'ordenarAnoR') ;
		}
		if (isset($_GET["ordenLonxitudeTitulo"])){
			uasort($cancions,'ordenarLonxitudeTitulo') ;
		}

		if (isset($_GET["ordenTitulo"])){
			ksort($cancions) ;
		}

		if (isset($_GET["cambioLetra"])) {
			$nuevoArray = array(); // Aquí guardaremos todo el catálogo nuevo

			foreach ($cancions as $titulo => $datos) {
				// 1. Cambiamos "oo" por "aa" en el nombre de la BANDA (índice 0)
				$datos[0] = str_replace("oo", "aa", $datos[0]);
				$datos[1] = str_replace("oo", "aa", $datos[1]);
				$datos[2] = str_replace("oo", "aa", $datos[2]);
				// 2. Cambiamos "oo" por "aa" en el TÍTULO de la canción
				$nuevoTitulo = str_replace("oo", "aa", $titulo);

				// 3. Guardamos los datos modificados en el nuevo array con la nueva llave
				$nuevoArray[$nuevoTitulo] = $datos;
			}

			// 4. Reemplazamos el array original por el nuevo ya procesado
			$cancions = $nuevoArray;
		}
		if (isset($_GET["eliminaEspazos"])) {
			$nuevoArray = array(); // Aquí guardaremos todo el catálogo nuevo

			foreach ($cancions as $titulo => $datos) {
				$nuevoTitulo = str_replace(" ", "", $titulo);

				// 3. Guardamos los datos modificados en el nuevo array con la nueva llave
				$nuevoArray[$nuevoTitulo] = $datos;
			}

			// 4. Reemplazamos el array original por el nuevo ya procesado
			$cancions = $nuevoArray;
		}
		if (isset($_GET["eliminaEspazos"])) {
			$nuevoArray = array(); // Aquí guardaremos todo el catálogo nuevo

			foreach ($cancions as $titulo => $datos) {
				$titulo[2] = ucfirst($titulo[2]);
				$nuevoArray[$titulo] = $datos;
			}

			// 4. Reemplazamos el array original por el nuevo ya procesado
			$cancions = $nuevoArray;
		}

		if (isset($_GET['buscar'])){
			foreach($cancions as $k=>$v){
				if(strcmp($_GET['titulo'],$k)==0){
					echo "<tr>
					<td>".$k."</td>
					<td>".$v[0]."</td>
					<td>".$v[1]."</td>
					<td>".$v[2]."</td>
					</tr>";
				}
		}
		}else{
			foreach($cancions as $k=>$v){
				echo "<tr>
				<td>".$k."</td>
				<td>".$v[0]."</td>
				<td>".$v[1]."</td>
				<td>".$v[2]."</td>
				</tr>";
			}
		}
		
	?>  
	</table>
</article>
</div>
</body>
</html>

