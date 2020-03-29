<?php include '../includes/head.php'; ?>
  <body>
    <div class="form-content">
      <div id="login-content">
        <div class="container form-login">
          <h2 class="title-login">Iniciar sesión</h2>
          <form action="/action_page.php">
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
          </form>
        </div>
      </div>
    </div>
</body>
</html>
