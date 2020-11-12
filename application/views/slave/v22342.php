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
         <a type="button" href="<?= base_url('Logic2/addrj/'.$norm); ?>" class="btn btn-sm btn-outline-primary">Tambah Status Rajal</a>&nbsp&nbsp&nbsp
         <a type="button" href="<?= base_url('logic/dataPasien') ?>" class="btn btn-sm btn-outline-primary">Data Pasien</a>
         </br>
      </div>
   </div>
</div>

<div class="card card-default">
   <div class="card-header">
      <h3 class="card-title">Data Pasien</h3>
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
               <label>No RM</label>
               <input type="text" id="e1" class="form-control form-control-sm" disabled>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
               <label>Nama</label>
               <input type="text" id="e2" class="form-control form-control-sm" disabled>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="form-group">
               <label>Tgl Lahir</label>
               <input type="text" id="e3" class="form-control form-control-sm" disabled>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
               <label>Jenis Kelamin</label>
               <input type="text" id="e4" class="form-control form-control-sm" disabled>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="row mb-3">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Data Ralan Pasien</h3>
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
                     <th>No Reg <code>(edit)</code></th>
                     <th>Poli</th>
                     <th>DPJP</th>
                     <th>Tanggal</th>
                     <th>Action</th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </div>
</div>

<!-- <div class="card card-default">
   <div class="card-header">
      <h3 class="card-title">Catatan Perkembangan Pasien Terintegrasi</h3>
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
   </div>
   <div class="card-body">
      <div class="row">
         <div class="col-sm-2">
            <div class="form-group">
               <label>No Reg</label>
               <input id="e5" class="form-control form-control-sm" disabled>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
               <label>DPJP</label>
               <input id="e6" class="form-control form-control-sm" disabled>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="form-group">
               <label>Action</label>
               <button type="button" class="btn btn-block btn-outline-info" onclick="updatedata()"><i
                     class="nav-icon far fa-save"></i>Update Status</button>
            </div>
         </div>
      </div>
   </div>
</div> -->

<!-- <div class="row mb-3">
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
</div> -->

<script>
   carirm();

   function carirm() {
      var norm = $("#idcari").val();
      if (norm == "") {
         alert("No RM masih Kosong");
         return;
      }
      $.ajax({
         url: "<?= base_url('Logic2/setkeyralan'); ?>",
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
               $("#e1").val(tx[0]);
               $("#e2").val(tx[1]);
               $("#e3").val(tx[2]);

               var jk = tx[3];
               var a;
               if (jk == "P")
               {a = "Perempuan";}
               else
               {a = "Laki- Laki";}

               $("#e4").val(a);
            }
         }
      })
   }

   var tbldt = $("#tbldata").DataTable({
      "ajax": "<?= base_url('Logic2/ralanbaseJSON'); ?>"
   });


   function edit(el) {
           var vl = $(el).data("kode");
           console.log(vl);
           window.location.href = '../../Logic2/edit/'+vl;
   }

   function filter(el) {
         //document.getElementById("min1").click();
      var r = $(el).data("kode");
      console.log(r);
      window.open("<?= base_url('logic2/listsoa/'); ?>"+r,"_self")
   }

   function remove(x) {
           var kode = $(x).data("kode");
           var konfirmasi = confirm("Konfirmasi hapus data ralan ?");
           var text = "";

           if(konfirmasi === true) {
             $.ajax({
                 url: "<?= base_url('logic2/dropralan'); ?>",
                 method: "POST",
                 data: {kd: kode},
                 cache: "false",
                 success: function(x){
                     if(x == 1){
                         Swal.fire({title: 'Berhasil', text: 'Data Barang Berhasil di Hapus', type: 'success'});
                         tbldt.ajax.reload(null, false);
                     }else{
                         Swal.fire({title: 'Gagal', text: 'Ada Beberapa Masalah dengan Data yang Anda Isikan !', type: 'error'});
                     }
                 }
             })
           }

   }

</script>
