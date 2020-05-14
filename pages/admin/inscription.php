<?php
session_start();
//validamos si la variable global $_SESSION está en true o false
$autorizado = $_SESSION['autorizado'];
//Si está en false no tendrá acceso a la página y será redireccionado a login.php
if ($autorizado == false) {
    echo "No tienes autorización";
    echo '<meta http-equiv="refresh" content="1; url=../login.php">';
    die();
} else {
    $email = $_SESSION['user'];
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

  <title>PHP Tube</title>

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
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $email ?></a>
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
              <i class="nav-icon fas fa-binoculars"></i>
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
              <i class="fas fa-sign-in-alt"></i>
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
      <div class="inscription-container">
          <div class="inscription-search">
            <div class="inscription-title">
              <h2>Inscribete a una liga</h2>
            </div>
            <div class="form-group inscription">
              <form action="#" method="post">
                <select class="form-control inscription-select" name="ranking-select" required>
                  <option hidden selected value="">Seleccione una liga</option>
                  <option class="lol" value="league of legends">League of Lengends</option>
                  <option class="smash" value="super smash bros">Super Smash Bros. Ultimate</option>
                </select>
                <div class="form-group">
                  <input type="text" class="form-control" id="user" placeholder="Nombre" name="user" required>
                </div>
                <div class="form-check form-group container-terms-and-conditions">
                  <input class="form-check-input" type="checkbox" class="check-terms-and-conditions" required>
                  <label class="form-check-label">
                    Acepto <span class="terms-and-conditions">términos y condiciones </span>
                  </label>
              </div>
                <div class="btn-content-inscription">
                  <button type="submit" class="btn btn-default btn-inscription">Inscribir</button>
                </div>
              </form>
            </div>
          </div>
      </div>
    <!-- /.content -->
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
