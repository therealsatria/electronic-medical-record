<div class="row mb-3">
   <div class="col-sm-6">
      <div class="input-group input-group-sm">
         <input id="idcari" class="form-control" value="<?= $norm ?>" placeholder="cari no rekam medis" disabled>
         <span class="input-group-append">
         <button type="button" onclick="carirm()" class="btn btn-outline-info btn-flat">Cari !</button>
         </span>
      </div>
   </div>
   <div class="col-sm-6">
      <div class="input-group input-group-sm">
         <a type="button" href="<?= base_url('Logic/tambahcppt/'.$norm); ?>" class="btn btn-sm btn-outline-primary">Tambah CPPT</a>
         </br>
      </div>
   </div>
</div>

<div class="card card-default">
   <div class="card-header">
      <h3 class="card-title">Catatan Perkembangan Pasien Terintegrasi</h3>
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse" id="min1"><i
               class="fas fa-minus"></i></button>
         <!-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
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
   </div>
</div>

<div class="row mb-3">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Data CPPT Pasien</h3>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                     class="fas fa-minus"></i></button>
               <!-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
            </div>
         </div>
         <div class="card-body">
            <table id="tbldata" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>No RM</th>
                     <th>No CPPT</th>
                     <th>PPA</th>
                     <th>Tanggal</th>
                     <th>Jam</th>
                     <th>Action</th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </div>
</div>

<div class="card card-default">
   <div class="card-header">
      <h3 class="card-title">Catatan Perkembangan Pasien Terintegrasi</h3>
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
         <!-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
      </div>
   </div>
   <div class="card-body">
      <div class="row">
         <div class="col-sm-2">
            <div class="form-group">
               <label>No CPPT</label>
               <input id="nc" class="form-control form-control-sm" disabled>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
               <label>PPA</label>
               <input id="pp" class="form-control form-control-sm" disabled>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="form-group">
               <label>Action</label>
               <button type="button" class="btn btn-block btn-outline-info" onclick="updatedata()"><i
                     class="nav-icon far fa-save"></i>Update CPPT</button>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="row mb-3">
   <div class="col-sm-10">
      <label for="">SOAP</label>
   </div>
   <div id="signature-pad">
      <canvas id="soap" style="border-radius: 10px; width: 600px; height: 800px;" class="efekttd"></canvas>
   </div>
</div>
<div class="row mb-3">
   <div class="col-sm-10">
      <label for="">Paraf</label>
   </div>
   <div id="signature-pad">
      <canvas id="paraf" style="border-radius: 10px;" class="efekttd"></canvas>
   </div>
</div>

<script>
   carirm();

   function carirm() {
      var norm = $("#idcari").val();
      if (norm == "") {
         alert("No RM masih Kosong");
         return;
      }
      $.ajax({
         url: "<?= base_url('Logic/setkeycppt'); ?>",
         method: "POST",
         data: {
            norm: norm
         },
         cache: "false",
         success: function (x) {
            tbldt.ajax.reload(null, false);
            console.log(x);
            if (x == 0) {
               Swal.fire('gagal', 'data kosong', 'error');
               return;
            } else {
               var tx = x.split("|");
               $("#no_rm").val(tx[0]);
               $("#nama_pasien").val(tx[1]);
               $("#tgl_lahir").val(tx[2]);
               $("#ruangan").val(tx[3]);
            }
         }
      })
   }

   var tbldt = $("#tbldata").DataTable({
      "ajax": "<?= base_url('Logic/cpptbaseJSON'); ?>"
   });
</script>

<script>

   function hit(){
            new SignaturePad(document.getElementById('soap'));
            //new SignaturePad(document.getElementById('paraf'));
        }

   function filter(el) {
         //document.getElementById("min1").click();
      var cp = $(el).data("kode");
      console.log(cp);
      $.ajax({
         url: "<?= base_url('Logic/editCppt'); ?>",
         method: "POST",
         data: {
            cp: cp
         },
         cache: "false",
         success: function (x) {
            console.log(x);
            if (x == 0) {
               Swal.fire('gagal', 'data kosong', 'error');
               return;
            } else {
               var tx = x.split("|");
               $("#nc").val(tx[0]);
               $("#pp").val(tx[1]);
               //$("#soap").attr("src", tx[2]);
               //$("#paraf").attr("src", tx[3]);

               function get(){
               var canvas = document.getElementById("soap");
               var ctx = canvas.getContext("2d");
               var image = new Image();
               image.onload = function() {
               ctx.drawImage(image, 0, 0);
               };
               image.src = tx[2];
               }
               function get2(){
               var canvas = document.getElementById("paraf");
               var ctx = canvas.getContext("2d");
               var image = new Image();
               image.onload = function() {
               ctx.drawImage(image, 0, 0);
               };
               image.src = tx[3];
               }
               get();
               get2();
               hit();
            }
         },
      })
   }

   function hapussoap() {
         var soap = document.getElementById('soap');
         var isi = soap.getContext('2d');
         isi.clearRect(0, 0, soap.width, soap.height);
      }

   function updatedata() {
         var vt1 = document.getElementById('soap');
         var vt2 = document.getElementById('paraf');
         var v1 = vt1.toDataURL('image/png');
         var v2 = vt2.toDataURL('image/png');
         var v3 = $("#nc").val();
        $.ajax({
            url: "<?= base_url('logic/updatecppt'); ?>",
            method: "POST",
            data: {
                v1: v1,
                v2: v2,
                v3: v3,
            },
            cache: "false",
            success: function (x) {
                console.log(x);
                if (x == 1) {
                    Swal.fire('Berhasil', 'Data Berhasil di Update', 'success');
                    return;
                } else {
                    Swal.fire('Gagal', 'Data Gagal di Update', 'error');
                    return;
                }
            }
        })
    }

   function cetakcppt() {
      var ncp = $("#nc").val();
      console.log(ncp);
      location.href = '<?= base_url('Logic/rendercppt'); ?>/'+ncp;
   }

   function render(el) {
      var cp = $(el).data("kode");
      console.log(cp);
      location.href = '<?= base_url('Logic/rendercppt'); ?>/'+cp;
   }
</script>
