<?php include '../includes/head.php';?>
<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="../index.php">E-Sports UAC</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger nav-red" href="../index.php#about">Sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger nav-red" href="../index.php#services">Ligas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger nav-red" href="../index.php#contact">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger nav-red" href="pages/ranking.php">Ranking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger nav-red" href="pages/faq.php">FAQ</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link js-scroll-trigger nav-red dropdown-toggle dropdown-profile" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Perfil
            </a>
            <div class="dropdown-menu dropdown-item-profile" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="pages/admin/inscription.php">Configuración</a>
              <a class="dropdown-item" href="pages/logout.php">Cerrar sesión</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger nav-red" href=<?php echo $href ?>><?php echo $var_user ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger nav-red" href="pages/signin.php">Registrate</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead">
    <div class="ranking-container">
      <div class="ranking-content">
        <div class="ranking-search">
          <div class="ranking-title">
            <h2>Tabla de clasificación</h2>
          </div>
          <div class="form-group search">
            <select class="form-control search-select" name="ranking-select">
              <option hidden selected>Seleccione una liga</option>
              <option value="league of legends">League of Lengends</option>
              <option value="fortnite">Valorant</option>
              <option value="super smash bros">Super Smash Bros</option>
            </select>
            <select class="form-control search-select" name="program-select">
              <option hidden selected>Seleccione un programa</option>
            </select>
          </div>
          <div class="content-btn-ranking-search">
            <button type="submit" class="btn btn-default btn-ranking-search">Buscar</button>
          </div>
          <div class="table-responsive content-ranking-table">
            <table class="table ranking-table">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Juego</th>
                  <th>Ranking</th>
                  <th>Nalgas</th>
                  <th>Culo</th>
                  <th>Picha</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>por favor si</td>
                  <td>15 cm</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>negro</td>
                  <td>8 cm</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>gordo</td>
                  <td>22 cm</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </header>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="../assets/js/creative.min.js"></script>
</body>
</html>
