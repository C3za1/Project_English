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
	<title>Formulario articulo</title>
	<meta charset="utf-12">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet"  href="Css/menu.css">
	<link rel="stylesheet" type="text/css" href="Css/login.css">



</head>

	<body bgcolor="#a9b3cc">

		<header>
			<input type="checkbox" id="btn-menu">
			<label for="btn-menu"><img src="icon_menu.png" alt=""></label>

			<nav class="menu">
				<ul>
					<li><a href="Admin.php">Back</a></li>
					<li><a href="F_Alumno.php">New Student</a></li>
                    <li><a href="F_Maestro.php">New Teacher</a></li>
                    <li><a href="F_Articulo.php">New Article</a></li>
                    <li><a href="F_Admin.php">New Admin</a></li>
                    <li><a href="C_Alumno.php">Search Student</a></li>
                    <li><a href="C_Maestro.php">Search Teacher</a></li>
                    <li><a href="Editor.html">Write</a></li>
                    <li><a href="C_Archivo.php">File</a></li>
					
				</ul>
			</nav>
		</header>



		<form action="Php/MainArchive.php" method="post" enctype="multipart/form-data">

			<img src="img/LogoUPAM.jpg">
			<h2>Article</h2>

			<input type="hidden" required name="AutorC" class="inp" placeholder="AUTHOR CODE" value=" <?php echo $_SESSION['User']; ?> ">

			<input type="text" required name="Titulo" class="inp" placeholder="TITLE">

			<input type="text" required name="Seccion" class="inp" placeholder="SECTION">

			<input type="date" required name="FechaP" class="inp" placeholder="DATE OF PUBLICATION">

			<input type="text" required name="AutonN" class="inp" placeholder="AUTHOR N">


			<input type="file" name="Archivo" class="inp">

            <input type="submit" value="subir" name="Opc"/>

		</form>



	</body>
	
</html>
<?php
}
?>