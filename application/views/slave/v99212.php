<div class="row mb-3">
    <div class="col-sm-6">
        <div class="input-group input-group-sm">
            <input id="idcari" class="form-control" placeholder="cari no rekam medis">
            <span class="input-group-append">
                <button type="button" onclick="carirm()" class="btn btn-info btn-flat">Cari !</button>
            </span>
            </br>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Registrasi Pasien Dari Khanza</h3>
                <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
         </div>
            </div>
            <div class="card-body">
                <table id="tbldata" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No RM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function carirm(){
      var norm = $("#idcari").val();
      if(norm == ""){
          alert("No RM masih Kosong");
          return;
      }
      $.ajax({
          url: "<?= base_url('bridge/filter'); ?>",
          method: "POST",
          data: {norm: norm},
          cache: "false",
          success: function(x){
              tbldt.ajax.reload(null, false);
              console.log(x);
              if (x == 0) {
                  Swal.fire('gagal', 'data kosong', 'error');
                  return;
               } else {
                  var tx = x.split("|");
                  $("#no_rm").val(tx[0]);
               }
          }
      })
    }

    var tbldt = $("#tbldata").DataTable({"ajax": "<?= base_url('bridge/filterJSON'); ?>"});

    function filter(el) {
        var nm = $(el).data("kode");
        console.log(nm);
        location.href = "<?= base_url('bridge/import/'); ?>"+nm;
      }
    
</script>