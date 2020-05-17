<?php
if(!isset($_SESSION))
    {
        session_start();
    }
include '../config.php';
include '../functions.php';
$userClass = new userClass();
//validamos si la variable global $_SESSION está en true o false
$autorizado = $_SESSION['autorizado'];
$email = $_SESSION['user'];
//Si está en false no tendrá acceso a la página y será redireccionado a login.php
if ($autorizado == false) {
  echo "No tienes autorización";
  echo '<meta http-equiv="refresh" content="0; url=login.php">';
  die();
}
$msg = "";
$msg2 = "";

if (isset($_POST['nueva_contraseña']) && isset($_POST['repite_contraseña'])) {
  $password = strip_tags($_POST['nueva_contraseña']);
  $repite_contraseña = strip_tags($_POST['repite_contraseña']);
  if (strcmp($password, $repite_contraseña) !==0) {
    $msg2.="Las claves no coinciden <br>";
  }elseif (strlen($password) < 8) {
    $msg2.="La contraseña debe ser mayor a 8 carácteres <br>";
  }else{
    $uid = $userClass->changePassword($email,$password);
    if ($uid == true) {
      $msg2 = "La clave ha sido cambiada exitosamente";
    }else{
      $msg2 = "Error en el cambio de clave";
    }
  }
}


 ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin E-Sports UAC</title>
  <link rel="icon" type="image/png" href="imagenes/logo.png" sizes="32x32">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/admin.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="login-logo">
      <img src="imagenes/logo.png" alt="">
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <span class="email"><?php echo $email ?></span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <l i class="nav-item">
                 <a href="#" class="header">
                   <p>
                     Menú
                   </p>
                 </a>
               </li>
          <li class="nav-item menu-open">
            <a href="inscription.php" class="nav-link">
              <i class="nav-icon far fa-edit"></i>
              <p>
                Inscripción a una liga
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="configuration.php" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Configuración de cuenta
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p>
                Cerrar sesión
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="configuration-container">
        <div class="configuration-content">
          <div class="configuration-title">
            <h2>Configuración</h2>
          </div>
          <div class="form-group configuration">
            <form role="form" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Ingresar contraseña actual</label>
                  <input name="vieja_password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Ingresar contraseña actual">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ingresar nueva contraseña</label>
                  <input name="nueva_contraseña" type="password" class="form-control" id="nueva_contraseña" placeholder="Ingresar nueva contraseña">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Confirmar nueva contraseña</label>
                  <input name="repite_contraseña" type="password" class="form-control" id="repite_contraseña" placeholder="Repite nueva contraseña">
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary btn-change">Cambiar</button>
                  <div class="msg-error">
                    <?php if ($msg2!="") {
                      echo $msg2;
                    } ?>
                  </div>
                </div>
            </form>
        </div>
        </div>
     </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/admin.js"></script>
</body>
</html>
