<?php
/*require_once 'conexion_bd.php';
session_start();


$id=$_POST['txt_id'];
$contrasena=$_POST['txt_contrasena'];
$contrasena_encriptada=hash('sha512',$contrasena);

$valida_login=mysqli_query($conexion, "select * from usuario 
where id_usuario='$id' and contraseña='$contrasena_encriptada'");

if(mysqli_num_rows($valida_login)>0){
    $_SESSION['usuario']=$id;
header("location:bienvenido.php");
exit;
}else{
    echo '
    <script>
    alert("usuario no existe");
    window.location="../index.php";
    </script>
    ';
exit;
}

?>
*/
require_once('conexion_bd.php');

session_start();
$id=$_POST['txt_id'];
$contrasena=$_POST['txt_contrasena'];
$contrasena_encriptada=hash('sha512',$contrasena);


try{
    $sql_session = "SELECT * FROM  usuario  where id_usuario='$id' and contraseña='$contrasena_encriptada'";
    $respuesta_session = $conexion->prepare($sql_session);
    $respuesta_session->execute();

    if($respuesta_session->rowCount() > 0){
        $_SESSION['usuario']=$id;
        header("location:bienvenido.php");
        exit;
        }else{
            echo '
            <script>
            alert("usuario no existe");
            window.location="../index.php";
            </script>
            ';
        exit;
        }       

      
    
}catch(Exception $i){
    die('ERROR:' .$i ->getMessage()); 
}
?>

