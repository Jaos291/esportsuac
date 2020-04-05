<?php
include '../includes/head.php';
include 'config.php';
$msg ="";
$email = "";
$password ="";
$repite_password ="";
$nombre = "";
$apellido = "";
$celular = "";
$identificacion = "";
/*if (isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['pwd-confirm']) && isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['id-numer'])) {*/
  if ($_POST['email'] == "") {
    $msg.="Debe ingresar un correo <br>";
  }
  if ($_POST['pwd'] == "") {
    $msg.= "Debe ingresar una contraseña <br>";
  }
  if ($_POST['pwd-confirm'] == "") {
    $msg.= "Debe repetir la clave <br>";
  }
  if ($_POST['name'] == "") {
    $msg.= "Debe ingresar nombre <br>";
  }
  if ($_POST['lastname'] == "") {
    $msg.= "Debe ingresar apellido <br>";
  }
  if ($_POST['id-number'] == "") {
    $msg.= "Debe ingresar número de identifiación <br>";
  }
  $nombre = strip_tags($_POST['name']);
  $apellido = strip_tags($_POST['lastname']);
  $tipo_id = $_POST['id-type'];
  $identificacion = strip_tags($_POST['id-number']);
  $email = strip_tags($_POST['email']);
  $password = strip_tags($_POST['pwd']);
  $repite_password = strip_tags($_POST['pwd-confirm']);

  if (strcmp($password, $repite_password) !==0) {
    $msg.="Las claves no coinciden <br>";
  }elseif (strlen($password) < 8) {
    $msg.="La contraseña debe ser mayor a 8 carácteres <br>";
  }else{
    if (!$mysqli) {
      echo "Error en la conexión";
      die();
    }
    //Hasta acá todo va bien
    //$ip = $_SERVER['REMOTE_ADDR'];
    $resultado = $mysqli->query("SELECT * FROM `esportsuac_usuarios`  WHERE `usuarios_email` = '".$email."'");
    $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);

    $cantidad = count($usuarios);

    if ($cantidad == 0) {
      //$password = sha1($password);
      $mysqli->query("INSERT INTO `esportsuac_usuarios` (`usuarios_nombre`,`usuarios_apellidos`,`usuarios_tipo_id`,`usuarios_identificacion`,`usuarios_email`,`usuarios_password`)
                      VALUES ('".$nombre."','".$apellido."','".$tipo_id."','".$identificacion."','".$email."','".$password."');");
      $msg.="<a href='login.php'>Usuario creado correctamente, <br> ingrese haciendo click aquí</a>";
    }else {
      $msg.="Usuario ya existe";
    }
  }
/*}else {
  $var_text ="NO ENTRÓ MK";
}*/
 ?>
  <body>
    <div class="form-content">
      <div id="signin-content">
        <div class="container form-signin">
          <h2 class="title-sign">Registrarse</h2>
          <form action="signin.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="name" placeholder="Nombres" name="name" maxlength="50" required >
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="lastname" placeholder="Apellidos" name="lastname" maxlength="50" required>
            </div>
            <div class="form-group">
              <select class="form-control" id="id-type" name="id-type">
                <option value="cédula">Cédula</option>
                <option value="ti">Tajeta de identidad</option>
                <option value="ce">Código estudiantil</option>
              </select>
            </div>
            <div class="form-group input-id-number">
              <input type="text" class="form-control" id="id-number" placeholder="Número de identificación" name="id-number" required>
            </div>
            <div class="form-group input-email">
              <input type="email" class="form-control" id="email" placeholder="Correo electronico" name="email" maxlength="50" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="pwd" maxlength="20" required>
            </div>
            <div class="form-group input-pwd-confirm">
              <input type="password" class="form-control" id="pwd-confirm" placeholder="Confirmar contraseña" name="pwd-confirm" maxlength="20" required>
            </div>
            <div class="content-btn-form-sign">
              <button type="submit" class="btn btn-default btn-form-sign">Registrar</button>
            </div>
            <div class="form-sign-login-in">
              <label>¿Ya tienes cuenta?</label>
              <a href="login.php">Inicia sesión ahora</a>
            </div>
            <div style="color:red">
                <?php echo $msg; ?>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>
