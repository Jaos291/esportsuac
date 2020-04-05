<?php
session_start();
include '../includes/head.php';
include 'config.php';
include 'functions.php';
$_SESSION['autorizado']=false;
$autorizado = false;
$email="";
$password="";
$msg="";
if (isset($_POST['email']) && isset($_POST['pwd'])) {
  if ($_POST['email'] =="") {
    $msg.="Ingrese un correo <br>";
  } else if ($_POST['pwd'] == ""){
      $msg.="Ingrese su contraseña <br>";
  }else{
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['pwd']);
    if (!$mysqli) {
      echo"Error en la conexión";
      die();
    }
    $resultado = $mysqli->query("SELECT * FROM `esportsuac_usuarios`  WHERE `usuarios_email` = '".$email."' AND `usuarios_password` = '".$password."' ");
    $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);
    $cantidad = count($usuarios);
  /*  $_SESSION['usuarios_id'] = $usuarios[0]['usuarios_id'];
    $_SESSION['usuarios_email'] = $usuarios[0]['usuarios_email'];*/
    if ($cantidad == 1) {
      $hoy = date("Y-m-d H:i:s");
      //$mysqli->query("UPDATE `usuarios` SET `usuarios_ultimo_login`= '".$hoy."' WHERE `usuarios_email` = '".$email."'");
      $msg ="Bienvenido";
      //Hasta este punto el usuario ha podido ingresar, entonces está autorizado
      $_SESSION['autorizado'] = true;
      echo '<meta http-equiv="refresh" content="1; url=../index.php">';
        }else{
      $msg.="Usuario inválido o contraseña inválido <br>";
      $_SESSION['autorizado'] = false;
    }
  }
}

 ?>
  <body>
    <div class="form-content">
      <div id="login-content">
        <div class="container form-login">
          <h2 class="title-login">Iniciar sesión</h2>
          <form action="login.php" method="post">
            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Correo electronico" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="pwd">
            </div>
            <div class="content-btn-form-login">
              <button type="submit" class="btn btn-default btn-form-login">Iniciar sesión</button>
            </div>
            <div class="forgot-password">
              <a href="#">¿Olvidaste la contraseña?</a>
            </div>
            <div class="form-login-sign-in">
              <label>¿No tienes cuenta?</label>
              <a href="signin.php">Registraste ahora</a>
            </div>
            <div class = "mensaje_login" style="color:red">
                <?php echo $msg; ?>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
