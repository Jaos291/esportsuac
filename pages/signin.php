<?php
include '../includes/head.php';
include 'config.php';
include 'functions.php';
$userClass = new userClass();
$msg ="";
$email = "";
$password ="";
$repite_password ="";
$nombre = "";
$apellido = "";
$celular = "";
$identificacion = "";
if (isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['pwd-confirm']) && isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['id-number'])) {
    if ($_POST['email'] == "") {
        $msgEmail.="La dirección de correo electrónico es obligatoria <br>";
    }
    if ($_POST['pwd'] == "") {
        $msgPWD.= "Se necesita una contraseña";
    }
    if ($_POST['pwd-confirm'] == "") {
        $msgRPWD.= "Debe repetir la contraseña";
    }
    if ($_POST['name'] == "") {
        $msgNombre.= "Debe ingresar su nombre";
    }
    if ($_POST['lastname'] == "") {
        $msgApellidos.= "Debe ingresar sus apellidos";
    }
    if ($_POST['id-number'] == "") {
        $msgID.= "Debe ingresar número de identifiación";
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
    } elseif (strlen($password) < 8) {
        $msg.="La contraseña debe ser mayor a 8 carácteres <br>";
    } else {
        $uid=$userClass->userRegistration($nombre, $apellido, $tipo_id, $identificacion, $email, $password);
        if ($uid) {
            $msg.="<a href='login.php'>Usuario creado correctamente, <br> ingrese haciendo click aquí</a>";
        } else {
            $msg.="Usuario ya existe";
        }
    }
}
 ?>
  <body>
    <div class="form-container">
      <div id="signin-content">
        <div class="container form-signin">
          <h2 class="title-sign">Registrarse</h2>
          <form action="signin.php" method="post">
            <div class="form-group">
              <div class="msg-error"><?php //echo $msgNombre;?></div>
              <input type="text" class="form-control" id="name" placeholder="Nombres" name="name" maxlength="50" required >
            </div>
            <div class="form-group">
              <div class="msg-error"><?php //echo $msgApellidos;?></div>
              <input type="text" class="form-control" id="lastname" placeholder="Apellidos" name="lastname" maxlength="50" required>
            </div>
            <div class="form-group">
              <select class="form-control" id="id-type" name="id-type" required>
                <option hidden selected value="">Seleccione un tipo de indentifiación</option>
                <option value="cedula">Cédula</option>
                <option value="ti">Tajeta de identidad</option>
                <option value="ce">Código estudiantil</option>
              </select>
            </div>
            <div class="form-group input-id-number">
              <div class="msg-error"><?php //echo $msgNombre;?></div>
              <input type="text" class="form-control" id="id-number" placeholder="Número de identificación" name="id-number" required>
            </div>
            <div class="form-group input-email">
              <div class="msg-error"><?php //echo $msgEmail;?></div>
              <input type="email" class="form-control" id="email" placeholder="Correo electronico" name="email" maxlength="50" required>
            </div>
            <div class="form-group">
              <div class="msg-error"><?php //echo $msgPWD;?></div>
              <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="pwd" maxlength="20" required>
            </div>
            <div class="form-group input-pwd-confirm">
              <div class="msg-error"><?php //echo $msgRPWD;?></div>
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>
