<?php
   try{
	$conexion = new PDO("mysql:host=localhost; dbname=bd_programacion_web","root","");
}catch(exception $i){
	die('Error: ' . $i->getmessage());
}
//$conexion=mysqli_connect("localhost","root","","bd_programacion_web");

/*function Conectar (){
	$conexion = null;
	$host = 'localhost';
	$db =   'bd_programacion_web';
	$user = 'root';
	$pwd =  '';
	try {
		$conexion = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
	}
	catch (PDOException $e) {
		echo '<p>No se puede conectar a la base de datos !!</p>';
		exit;
	}
	return $conexion;
}
*-

/*
if($conexion){
    echo 'conectado exitosamente ';
}else{
    echo 'no hay conexion BD';
}
*/
?>