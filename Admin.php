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
      <title>Formulario Maestro</title>
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
                              <ul>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="F_Alumno.php">New Student</a></li>
                              <li><a href="F_Maestro.php">New Teacher</a></li>
                              <li><a href="F_Articulo.php">New Article</a></li>
                              <li><a href="F_Admin.php">New Admin</a></li>
                              <li><a href="C_Alumno.php">Search Student</a></li>
                              <li><a href="C_Maestro.php">Search Teacher</a></li>
                              <li><a href="Editor.html">Write</a></li>
                              <li><a href="C_Archivo.php">File</a></li>
                        </ul>
                              
                              
                        </ul>
                  </nav>
            </header>



            









      </body>
      
</html>
<?php
}
?>