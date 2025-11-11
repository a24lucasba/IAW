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
    <form action="mostra.php" method="get">
        <input type="submit" name="listaCompleta" value="Lista todos os produtos"><br><br>
        <input type="submit" name="ordenMarca" value="Lista ordenados pola marca"><br><br>
        <input type="submit" name="ordenPrezo" value="Lista ordenados polo prezo"><br><br>
        <input type="text" name="filtroMarca" placeholder="Buscar por marca">
        <input type="submit" name="filtrar" value="Filtrar"><br><br>
        <input type="text" name="filtroCalquera" placeholder="Buscar por calquera campo">
        <input type="submit" name="filtrarCalquera" value="Filtrar"><br><br>
        <select name="tipo">
            <option value="Zapatilla">Zapatilla</option>
            <option value="Bota">Bota</option>
            <option value="Pantalón">Pantalón</option>
            <option value="Calcetín">Calcetín</option>
            <option value="Chaqueta">Chaqueta</option>
        </select><br><br>
        <input type="text" name="engadirProduto" placeholder="Nome do produto a engadir">
        <input type="submit" name="engadir" value="Engadir produto"><br><br>
        <input type="text" name="editarProduto" placeholder="Nome do produto a editar">
        <input type="submit" name="editar" value="Editar produto"><br><br>
        <input type="text" name="eliminarProduto" placeholder="Nome do produto a eliminar">
        <input type="submit" name="eliminar" value="Eliminar produto"><br><br>
    </form>

<article>
</body>
</html>