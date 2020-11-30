<!doctype html>
<html>

<head>
   <title>Sistem Register</title>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>
      html {
         background-image: url("<?= base_url('assets/dist/img/wallpaper98.jpg'); ?>");
         background-repeat: no-repeat;
         background-position: left top;
         background-size: 100% auto;
      }
   </style>
   <link rel="icon" href="<?= base_url('assets/dist/img/favicon.ico" type="image/gif') ?>">
   <link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>">
   <script src="<?= base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
   <script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
</head>

<body>
   <h3>Create Account</h3>
   <input style="width: 200px;" type="text" id="name" placeholder="nama"><br>
   <select style="width: 206px;" name="level" id="level">
     <option value="admin">Admin</option>
     <option value="user" selected>User</option>
   </select><br>
   <input style="width: 200px;" type="text" id="user" placeholder="username"><br>
   <input style="width: 200px;" type="password" id="pass" placeholder="password"><br><br>
   <button style="width: 80px;" onclick=simpandata()>
      Register
   </button>
   <button style="width: 122px;" onclick="window.location.href='<?= base_url('dash') ?>';">
      Masuk Sistem
   </button>

   <script>
      function simpandata() {
        var n = $("#name").val();
        var u = $("#user").val();
        var p = $("#pass").val();
        var l = $("#level").val();

         if (u == "" || n == "" || p == "") {
            Swal.fire('Gagal', 'Ada Isian Yang Masih Kosong', 'error');
            return;
         }
         $.ajax({
            url: "<?= base_url('logic/reg'); ?>",
            method: "POST",
            data: {
               u: u,
               n: n,
               p: p,
               l: l,
            },
            cache: "false",
            success: function (x) {
                console.log(x);
               if (x > 0) {
                  Swal.fire('Berhasil', 'Registrasi User Baru Berhasil', 'success');
                  return;
               } else {
                  Swal.fire('Gagal', 'Terjadi kesalahan Jaringan', 'error');
                  return;
               }
            }
         })
      }
   </script>

</body>

</html>
