<?php
session_start();
if (!isset($_SESSION['User'])) {
	header('location: index.html');
}
else{
$code=$_SESSION['User'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Consutas Maestros</title>
	<link rel="stylesheet"  href="Css/tabla.css">
	<link rel="stylesheet"  href="Css/menu.css">
</head>
<body bgcolor="#D5DBDB">


		<header>
			<input type="checkbox" id="btn-menu">
			<label for="btn-menu"><img src="icon_menu.png" alt=""></label>

			<nav class="menu">
				<ul>
					<li><a href="Admin.php">Back</a></li>
				</ul>
			</nav>
		</header>



<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>First Lastname</th>
		<th>Second Lastname</th>
		<th>Email</th>
		<th>Status</th>
	</tr>
	<?php
	require ('Php/Usuarios.php');
	$Con= new Usuario();
	$result=$Con->Cunsultar_Maestro();
	while ($fila=mysqli_fetch_array($result)) {
	?>	
	   <tr>
       <td><?php echo $fila['Matricula']; ?></td>
       <td><?php echo $fila['Nombre']; ?></td>
       <td><?php echo $fila['ApellidoP']; ?></td>
       <td><?php echo $fila['ApellidoM']; ?></td>
       <td><?php echo $fila['Correo']; ?></td>
       <td><?php echo $fila['Activo']; ?></td>
       </tr>
  <?php
	}
	?>
</table>

</body>
</html>
<?php
}
?>