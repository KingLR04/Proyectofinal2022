<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('trabajo01');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$nombre=$_POST['Nombre'];
	$apellido=$_POST['Apellido'];
	$email=$_POST['Email'];
	$message=$_POST['Message'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$nombre',
								   '$apellido',
								   '$email',
								   '$message')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='Contactos.html'>Volver</a>";
	}
?>