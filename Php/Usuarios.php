<?php

class Usuario{

	function Cunsultar_Maestro(){
		require('Conexion.php');
		$query="SELECT * FROM usuario WHERE Rol = 'Maestro'";
		$Result=mysqli_query($Conexion,$query);
		return $Result;
	}

	function Cunsultar_Alumno(){
		require('Conexion.php');
		$query="SELECT * FROM usuario WHERE Rol = 'Alumno'";
		$Result=mysqli_query($Conexion,$query);
		return $Result;
	}

	function Cunsultar_Admin(){
		require('Conexion.php');
		$query="SELECT * FROM usuario WHERE Rol = 'Administrador'";
		$Result=mysqli_query($Conexion,$query);
		return $Result;
	}
    
}

?>