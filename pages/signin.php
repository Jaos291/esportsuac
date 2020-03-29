<?php include '../includes/head.php'; ?>
  <body>
    <div class="form-content">
      <div id="signin-content">
        <div class="container form-signin">
          <h2 class="title-sign">Registrarse</h2>
          <form action="/action_page.php">
            <div class="form-group">
              <input type="name" class="form-control" id="name" placeholder="Nombres" name="name">
            </div>
            <div class="form-group">
              <input type="name" class="form-control" id="lastname" placeholder="Apellidos" name="lastname">
            </div>
            <div class="form-group">
              <select class="form-control" id="id-type">
                <option value="cedula">Cédula</option>
                <option value="ti">Tajeta de identidad</option>
                <option value="ce">Código estudiantil</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="id-number" placeholder="Número de identificación" name="id-number">
            </div>
            <div class="form-group input-email">
              <input type="email" class="form-control" id="email" placeholder="Correo electronico" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="pwd">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="pwd-confirm" placeholder="Confirmar contraseña" name="pwd-confirm">
            </div>
            <div class="content-btn-form-sign">
              <button type="submit" class="btn btn-default btn-form-sign">Registrar</button>
            </div>
            <div class="form-sign-login-in">
              <label>¿Ya tienes cuenta?</label>
              <a href="login.php">Inicia sesión ahora</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>
