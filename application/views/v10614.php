<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="icon" href="<?= base_url('assets/dist/img/favicon.ico" type="image/gif') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css'); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?= base_url('assets/dist/css/font.css?family=Source+Sans+Pro:300,400,400i,700'); ?>" rel="stylesheet">
  <style>
  p.ip {
    text-align: right;
		font-size: 12px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
  }
  </style>

</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href=""><b>Si </b>Medico</a>
      <p style= "font-size:15px">Sistem Informasi Medical Record</p>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="">Login untuk masuk</p>

        <div class="input-group mb-3">
          <input type="text" id="txtkode" class="form-control" placeholder="ID Login" onkeyup="pindahpass()">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="txtpass" class="form-control" placeholder="Password" onkeyup="pindahlogin()">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="button" class="btn btn-danger btn-block" onclick="login()">Masuk</button>
          </div>
          <!-- /.col -->
        </div>

        <div class="social-auth-links text-center mb-3">
          <p>- atau -</p>
          <a href="#" class="btn btn-block btn-warning" onclick="dashboard()">
            <i class=""></i> Tanya IT RS PMC
          </a>
        </div>
        <!-- /.social-auth-links -->

        <p class="ip">your ip : <?php echo $_SERVER["REMOTE_ADDR"]; ?></p>
        <input type="text" id="txtip" value="<?php echo $_SERVER["REMOTE_ADDR"]; ?>" hidden>


      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/dist/js/adminlte.min.js'); ?>"></script>

  <script>
    function dashboard() {
      window.location = '<?= base_url('dash'); ?>';
    }

    function login() {
      var u = $("#txtkode").val();
      var p = $("#txtpass").val();

      if (u == "" || p == "") {
        swal({
          title: 'Login Gagal',
          text: 'Ada Isian yang Masih Kosong !',
          type: 'error',
          confirmButtonClass: 'btn btn-confirm mt-2'
        });
        return;
      }

      $.ajax({
        url: "<?= base_url('Login/login'); ?>",
        method: "POST",
        data: {
          u: u,
          p: p,
        },
        cache: "false",
        success: function (x) {
          if (x == 1) {
            window.location = "<?= base_url('logic'); ?>";
          } else {
            swal({
              title: 'Login Gagal',
              text: 'Kemungkinan Username dan Password Salah atau Status Akun Tidak Aktif',
              type: 'error',
              confirmButtonClass: 'btn btn-confirm mt-2'
            });
            return;
          }
        }
      })
    }

    function pindahpass() {
      if (event.keyCode === 13) {
        $("#txtpass").focus();
      }
    }

    function pindahlogin() {
      if (event.keyCode === 13) {
        login();
      }
    }
  </script>


</body>

</html>
