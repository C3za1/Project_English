<?php

class Archivo{
    
    function NArchivo($Code,$Titulo,$Seccion,$FechaP,$AutorN,$Publicado,$URL){
        require ('Conexion.php');
        $Autorizado=0;
        $query="INSERT INTO `articulo`(`AutorC`,`Titulo`,`Seccion`, `FechaP`, `AutorN`, `Publicado`, `Autorizado`, `URL`) VALUES ('$Code',
        '$Titulo','$Seccion','$FechaP','$AutorN','$Publicado','$Autorizado','$URL')";
        mysqli_query($Conexion,$query);
        echo mysqli_error($Conexion);
        header('location: ../F_Articulo.php');
    }
    
    function Aprobado($FechaP,$Public,$CodigoA){
        require ('Conexion.php');
        $Autorizado=1;
        $query="UPDATE `articulo` SET `FechaP`='$FechaP',`Publicado='$Public',`Autorizado`='$Autorizado' WHERE Codigo= '".$CodgoA."' ";
        mysqli_query($Conexion,$query);
    }
    
    function Baja($FechaP,$Public,$CodigoA){
        require ('Conexion.php');
        $query="UPDATE `articulo` SET `FechaP`='$FechaP',`Publicado='$Public',`Autorizado`='0' WHERE Codigo= '".$CodgoA."' ";
        mysqli_query($Conexion,$query);
    }

    function Buscar(){
        require ('Conexion.php');
        $query="SELECT * FROM `articulo`";
        return mysqli_query($Conexion,$query);
    }
    
}

?>
