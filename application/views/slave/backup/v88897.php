   <div class="row mb-3">
      <div class="col-sm-6">
         <div class="input-group input-group-sm">
            <input id="idcari" value="<?= $norm; ?>" class="form-control" placeholder="cari no rekam medis" disabled>
            <span class="input-group-append">
               <button type="button" onclick="carirm()" class="btn btn-outline-info btn-flat">Cari !</button>
            </span>
         </div>
      </div>
      <div class="col-sm-4">
         <div class="input-group input-group-sm">
            <a href="<?= base_url('Logic/cpptbase/'.$norm); ?>" type="button" class="btn btn-sm btn-outline-primary">Menu CPPT</a>&nbsp&nbsp
            <button type="button" class="btn btn-sm btn-outline-success" onclick="updatecppt()">Simpan CPPT</button>
         </div>
      </div>

   </div>

   <div class="card card-default">
      <div class="card-header">
         <h3 class="card-title">Catatan Perkembangan Pasien Terintegrasi</h3>
         <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
         </div>
      </div>
      <div class="card-body">
         <div class="row">
            <div class="col-sm-6">
               <div class="form-group">
                  <label>Nama</label>
                  <input id="nama_pasien" class="form-control form-control-sm" disabled>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                  <label>No RM</label>
                  <input id="no_rm" class="form-control form-control-sm" disabled>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-6">
               <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input id="tgl_lahir" class="form-control form-control-sm" disabled>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                  <label>Ruangan</label>
                  <input type="text" id="ruangan" class="form-control form-control-sm" disabled>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-sm-3">
               <div class="form-group">
                  <label>Tanggal</label>
                  <input type="text" id="tanggal" class="form-control form-control-sm" disabled>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="form-group">
                  <label>Jam</label>
                  <input type="text" id="jam" class="form-control form-control-sm" disabled>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                  <label>PPA</label>
                  <input type="text" id="ppa" class="form-control form-control-sm">
               </div>
            </div>
         </div>

         <div class="row mb-3">
            <div class="col-sm-10">
               <label for="">SOAP</label>
            </div>
            <div class="col-sm-2" style="padding-bottom: 10px;">
               <button type="button" class="btn btn-block btn-outline-danger" onclick="hapussoap()">Reset</button>
            </div>
            <div id="signature-pad">
               <canvas id="soap" style="border-radius: 10px; width: 600px; height: 800px;" class="efekttd"></canvas>
            </div>
         </div>

         <table>
            <tr>
               <td></td>
               <td><label for="">Paraf Nama Terang</label></td>
               <td></td>
            </tr>
            <tr>
               <td></td>
               <td>
                  <div id="signature-pad">
                     <canvas id="paraf" style="border-radius: 10px;" class="efekttd"></canvas>
                  </div>
               </td>
               <td></td>
            </tr>
            <tr>
               <td></td>
               <td><button type="button" class="btn btn-block btn-outline-danger" onclick="hapusparaf()">Reset</button>
               </td>
               <td></td>
            </tr>
         </table>

      </div>
      <div class="card-footer">

      </div>
   </div>

   <script>
      var soap = document.getElementById("soap");
      $(document).ready(function () {
         new SignaturePad(document.getElementById('paraf'));
      });

      function hapussoap() {
         var soap = document.getElementById('soap');
         var isi = soap.getContext('2d');
         isi.clearRect(0, 0, soap.width, soap.height);
      }

      function hapusparaf() {
         var paraf = document.getElementById('paraf');
         var isi = paraf.getContext('2d');
         isi.clearRect(0, 0, paraf.width, soap.height);
      }
   </script>

   <script>
      carirm()

      function carirm() {
         var rm = $("#idcari").val();
         if (rm == "") {
            Swal.fire('Gagal', 'Data Gagal di cari', 'error');
            return;
         }
         $.ajax({
            url: "<?= base_url('logic/getforcppt'); ?>",
            method: "POST",
            data: {
               rm: rm,
            },
            cache: "false",
            success: function (x) {
               console.log(x);
               if (x == 0) {
                  Swal.fire('gagal', 'data kosong', 'error');
                  return;
               } else {
                  var today = new Date();
                  var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                  var tx = x.split("|");
                  $("#no_rm").val(tx[0]);
                  $("#nama_pasien").val(tx[1]);
                  $("#tgl_lahir").val(tx[2]);
                  $("#ruangan").val(tx[3]);
                  $("#tanggal").val(date);
                  $("#jam").val(time);
               }
            },
            error: function () {}
         })
      }
   </script>

   <script>
      function updatecppt() {
         var p1 = $("#no_rm").val();
         var p2 = $("#tanggal").val();
         var p3 = $("#jam").val();
         var p4 = $("#ppa").val();
         var pt5 = document.getElementById('soap');
         var pt6 = document.getElementById('paraf');
         var p5 = pt5.toDataURL('image/png');
         var p6 = pt6.toDataURL('image/png');

         if (p1 == "" || p4 == "") {
            Swal.fire('Gagal', 'Ada Isian Yang Masih Kosong', 'error');
            return;
         }
         if (p5 == ttdkosong || p6 == ttdkosong) {
            Swal.fire('Gagal', 'Canvas Masih Kosong', 'error');
            return;
         }

         $.ajax({
            url: "<?= base_url('logic/addcppt'); ?>",
            method: "POST",
            data: {
               p1: p1,
               p2: p2,
               p3: p3,
               p4: p4,
               p5: p5,
               p6: p6,
            },
            cache: "false",
            success: function (x) {
               console.log(x);
               if (x == 1) {
                  Swal.fire('Berhasil', 'CPPT Berhasil di Simpan', 'success');
                  return;
               } else {
                  Swal.fire('Gagal', 'CPPT Gagal di Simpan', 'error');
                  return;
               }
            }
         })
      }
   </script>

   </body>

   </html>
