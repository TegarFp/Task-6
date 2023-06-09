<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Uda-Admin | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background: #48AA33;">
<div class="login-box">
  <div class="login-logo">
    <p class="text-center text-white fw-700" style="font-family: 'Poppins'; font-size: 70px;">Udacoding</p>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body border rounded">
      <p class="login-box-msg">Please fill in your Email and Password</p>

      <form action="login_verified.php" method="post">
        <div class="input-group mb-3 border rounded">
        <div class="input-group-append">
            <div class="input-group-text border-0">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <input class="border-0" style="width: 276px; height: 40px" type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="input-group mb-4 border rounded">
        <div class="input-group-append">
            <div class="input-group-text border-0">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <input class="border-0" style="width: 278px; height: 40px" type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block bg-success" style="border-radius: 10px;">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form><br>
      <p class="mb-6">
        <a href="register.php" class="text-center text-dark">Dont Have an Account ?<b style="color:#48AA33">Register</b></a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
