<?php
include_once('conexion_bd.php');

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$nombre_uno=$_POST['nombre_uno'];
$apellido=$_POST['apellido'];
$apellido_uno=$_POST['apellido_uno'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$contrasena_encritada=hash('sha512',$contrasena);



 
//verificar correo y id que no se repita bd



/*$verificar_correo=mysql_query("select * from usuario where correo='$correo'");
/*if(mysql_num_rows($verificar_correo)>0){
    echo '
    <script>
    alert("Este Correo ya está registrado, intenta con otro diferente");
    window.location="../index.php";
     </script>';
        exit();
    }
*/

function validar ($tabla,$campo,$txt,$id,$conexion){
    $consulta=("select * from $tabla where $campo='$id'");
    $verificar = $conexion->prepare($consulta);
    $verificar->execute();
    $resultado=$verificar->fetch();
    if($resultado){
        echo '
        <script>
        alert("Error en el registro con el campo de '.$txt.' , intenta con otro diferente");
        window.location="../index.php";
         </script>';
         exit();
            
        }
    

}

validar("usuario","id_usuario"," identificación",$id,$conexion);
/*
$consulta_id=("select * from usuario where id_usuario='$id'");
$verificar_id = $conexion->prepare($consulta_id);
 $verificar_id->execute();
$resultado=$verificar_id->fetch();
if($resultado){
    echo '
    <script>
    alert("Este numero de identificacion  ya está registrado, intenta con otro diferente");
    window.location="../index.php";
     </script>';
     exit();
  */      
    
  

    $consulta="insert into usuario  (`id_usuario`, `nombre`, `nombre_uno`, `apellido`, `apellido_uno`, `correo`, `contraseña`)
    VALUES ('$id', '$nombre', '$nombre_uno', '$apellido', '$apellido_uno', '$correo', '$contrasena_encritada')";
   
 $respuesta_session = $conexion->prepare($consulta);
 $respuesta_session->execute();

 if($respuesta_session){
     echo '
     <script>
      alert("usuario registrado exitosamente");
      window.location="../index.php";
      </script>;
    ' 
     ;
 }else{
 echo '<script> alert("Error de registro de usuario");  
 window.location="../index.php";
 </script>;'
;
}

mysql_close($conexion);

?>