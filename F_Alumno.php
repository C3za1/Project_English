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
	<title>Formulario Alumno</title>
	<meta charset="utf-8">
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



		<form action="Php/MainUser.php" method="post" >

			<img src="img/LogoUPAM.jpg">
			<h2>Student</h2>

			<input type="text" required name="Nombre" class="inp" placeholder="NAME">

			<input type="text" required name="ApellidoP" class="inp" placeholder="FIRST LASTNAME">

			<input type="text" required name="ApellidoM" class="inp" placeholder="SECOND LASTNAME">

			<input type="text" required name="Matricula" class="inp" placeholder="SCHOOLAR ID">

			<input type="password" required name="Pass" class="inp" placeholder="PASSWORD">

			<input type="email" required name="Correo" class="inp" placeholder="E-MAIL">

			<input type="text" required name="Carrera" class="inp" placeholder="MAJOR">
			
			<input type="hidden" required name="opc" value="registroA">

			<select required name="Cuatrimestre" class="inp" type="select" style="background-color: #1481e0">
				<option selected="select">QUARTER</option>

				<option value="1">I</option>
				<option value="2">II</option>
				<option value="3">III</option>
				<option value="4">IV</option>
				<option value="5">V</option>
				<option value="6">VI</option>
				<option value="7">VII</option>
				<option value="8">VIII</option>
				<option value="9">IX</option>
				<option value="10">X</option>

			</select>


			<select required name="Nivel" class="inp" type="select" style="background-color: #1481e0">
			  <option selected="selected">ENGLISH LEVEL</option>
			  <optgroup label="LEVEL A">
			    <option value="1">A1</option>
			    <option value="2">A2</option>
			  </optgroup>
			  <optgroup label="LEVEL B">
			    <option value="1">B1</option>
			    <option value="2">B2</option>
			  </optgroup>
			</select>

			

			<input type="submit" value="SUBMIT" id="boton">

		</form>



	</body>
	
</html>
<?php 
}
?>