<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
	
	<link rel="stylesheet"  href="Css/menu.css">
	<link rel="stylesheet"  href="Css/tablaArchivo.css">
</head>
<body bgcolor="#D5DBDB">


		<header>
			<input type="checkbox" id="btn-menu">
			<label for="btn-menu"><img src="icon_menu.png" alt=""></label>

			<nav class="menu">
				<ul>
					<li><a href="index.html">Back</a></li>					
				</ul>
			</nav>
		</header>


<table align="center" >

	<tr>
		<th><h3 align="center">PDF</h3></th>
	</tr>

<?php

$va=1;

    require ('Php/Conexion.php');
    $query="SELECT * FROM `articulo`";
    $res=mysqli_query($Conexion,$query);
while($fila= mysqli_fetch_array($res)){
	$valor=$fila['URL'];
	?>
	 <tr><td>
	<a href="<?php echo $valor;?> "><?php echo $fila['Titulo']; ?></a>
	</td></tr>
	<?php	
	echo "<br>";
}

?>
</table>


</body>
</html>
