<?php include '../includes/head.php';?>
<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="../index.php">E-Sports UAC</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
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
            <option value="fortnite">Fortnite</option>
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
</body>
</html>
