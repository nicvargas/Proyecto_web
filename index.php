<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <title>Coperativa Agrocafe  </title>
  <meta name="description" content="Pagina principal ">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="manifest" href="site.webmanifest">
<link rel="shortcut icon" href="img/icono.png">
<meta name="theme-color" content="#f2f2f2">

  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <!-- Add your site or application content here -->
<main>
  <div class="contenedor_principal">
    <div class="contenedor_fondo">
      <div class="contenedor_login">
        <h3>¿Ya tiene una cuenta?</h3>
        <p>Inicia sesión para entrar en la pagina</p>
        <button id=bto_iniciar_sesion>Iniciar seción</button>
      </div>
      <div class="contenedor_registro">
        <h3>¿aún no tienes cuenta?</h3>
        <p>Registrate para que puedas iniciar sesión</p>
        <button id=bto_registrar>Registrarse</button>
      </div>
    </div>
    <div class="contenedor_login_registro">
      <form action="php/login.php" method="POST" class="formulario_login" id="formulario_registro">
        <h2>Iniciar Sesión</h2>
        <input type="number" placeholder="Id" name="txt_id">
        <input type="password" placeholder=Contraseña name="txt_contrasena">
        <button>Entrar</button>
      </form>

      <form action="php/usuario_registro.php" method="POST" class="formulario_registro" id="formulario_registro">
        <h2>Registrarse</h2>

        <input type="number" placeholder="Numero de Identificación*" name="id">
        <input type="text" placeholder="Primer Nombre*" name="nombre"> 
        <input type="text" placeholder="Segundo Nombre" name="nombre_uno">
        <input type="text" placeholder="Primer Apellido*" name="apellido">
        <input type="text" placeholder="Segundo Apellido" name="apellido_uno">
        <input type="email" placeholder="correo*" name="correo">
        <input type="password" placeholder="Contraseña*" name="contrasena">
        <p>Seleccione un rol del siguiente menú:</p>
    
      <select>
        <option value="0">Seleccione:</option>
        <?php
        require_once('php/conexion_bd.php');
        $query = $conexion->prepare("SELECT * FROM rol");
        $query->execute();
        $data = $query->fetchAll();
        
        foreach ($data as $valores):
          echo '<option value="'.$valores["id_rol"].'">'.$valores["nombre_rol"].'</option>';
        endforeach;
        
        ?>
        </select>
        

        <button type="submit">Registrarse</button>
      </form>
    </div>
  </div>
</main>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script>src="js/validacion.js"</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>