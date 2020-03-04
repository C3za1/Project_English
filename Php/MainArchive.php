<?php
include 'Archivo.php';
$AutorC=$_POST["AutorC"];
$Titulo=$_POST["Titulo"];
$Seccion=$_POST["Seccion"];
$Fechap=$_POST["FechaP"];
$AutorN=$_POST["AutonN"];
$Publicado="2018-08-23";
$Arch= $_FILES['Archivo']['name'];
$URL="/Inglish/files/".$Arch;
$Opc=$_POST["Opc"];
$ins = new Archivo();

switch ($Opc){
      case 'subir':
      	$ins-> NArchivo($AutorC,$Titulo,$Seccion,$Fechap,$AutorN,$Publicado,$URL);

      	if ($_FILES['Archivo']["error"] > 0){
            echo "1".$_FILES['Archivo']['name'];
        echo "2".$Arch;
  
  echo "Error: " . $_FILES['Archivo']['error'] . "<br>";
  }
else
  {
  move_uploaded_file($_FILES['Archivo']['tmp_name'],
      "../files/" . $_FILES['Archivo']['name']);
  }
       header('location: ../F_Articulo.php');
      	break;
}
?>
