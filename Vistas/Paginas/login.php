<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="inicio" class="h1"><b>Servitec</b>_BD</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingresa Tus Credenciales</p>
      <form method="post">
        <div class="input-group mb-3">
          <input name="correoIng" type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="pwdIng" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col">
            <a href="https://www.google.com/" class="btn btn-outline-danger">Salir</a>
          </div>
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
        </div>
<?php $login = new ControladorLogin; $login->ctrLogin(); ?>        
      </form>
    </div>
  </div>
</div>