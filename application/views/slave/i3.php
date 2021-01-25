<style>
img {
  width: 100px;
}

table.greyGridTable {
  border: 2px solid #FFFFFF;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
  background: #D0E4F5;
}
table.greyGridTable td, table.greyGridTable th {
  border: 1px solid #FFFFFF;
  padding: 3px 4px;
}
table.greyGridTable tbody td {
  font-size: 13px;
}

.save{
  position: absolute;
  top: 1%;
  right: 10px;
}

.cancel{
  position: absolute;
  top: 1%;
  right: 135px;
}

.hidden {
  visibility: hidden;
}

</style>

<div class="card card-default" id="main">
  <div class="card-header">
    <h3 class="card-title">Data Rekam Medik Pasien</h3>
  </div>

   <div class="card-body">
      <table class="greyGridTable">
      <tr>
          <td><b>No rm</b></td>
          <td><b>:</td>
          <td><a id="n1"></a></td>
          <td><b>No rawat</b></td>
          <td><b>:</b></td>
          <td><a id="n2"></a></td>
          <td><b>Nama</b></td>
          <td><b>:</b></td>
          <td><a id="n3"></a></td>
      </tr>
      <tr>
          <td><b>Tgl. Lahir</b></td>
          <td><b>:</b></td>
          <td><a id="n4"></a></td>
          <td><b>Alamat</b></td>
          <td><b>:</b></td>
          <td><a id="n5"></a></td>
          <td><b>Jenis Kelamin</b></td>
          <td><b>:</b></td>
          <td><a id="n6"></a></td>
      </tr>
      </table>
      <br>
      <button type="button" class="btn btn-outline-danger btn-sm" onclick="back();">
        Kembali
      </button>
      <button type="button" class="btn btn-outline-primary btn-sm" onclick="storecanvas();">
        Tambah SOAP
      </button>
      <button type="button" class="btn btn-outline-primary btn-sm" onclick="render();">
        Cetak SOAP
      </button>
      <button type="button" class="btn btn-outline-primary btn-sm" onclick="render2();">
        Cetak Status
      </button>

      <hr>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tblsoa" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="50px">Id</th>
                    <th width="100px">Tanggal<br>Poliklinik</th>
                    <th>S : Subjective &nbsp&nbsp O : Objective<br>A: Assesment &nbsp&nbsp P: Planning</th>
                    <th>TTD Petugas</th>
                    <th>Action</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>

   </div>
</div>
<input type="text" id="rm" name="" value="" hidden>
<input type="text" id="rw" name="" value="" hidden>

<!-- Edit soap section -->
<div class="card card-default hidden" id="canvasCon">
  <div class="card-header">
    <button type="button" class="btn btn-outline-primary btn-sm" onclick="updatecanvas();">
      Simpan
    </button>
    <button type="button" class="btn btn-outline-primary btn-sm" onclick="addHidden('canvasCon');">
      Cancel
    </button>
  </div>
   <div class="card-body">
     <div class="row">
       <div class="col-sm-4">
         <label>SOA</label>&nbsp
         <button type="button" class="btn btn-outline-danger btn-sm" onclick="reset();">&#x21bb;</button><br>
         <div id="signature-pad">
           <canvas id="soa" style="border-radius: 10px; width: 550px; height: 850px;" class="efekttd"></canvas><br>

         </div>
           <label>TTD Petugas</label>&nbsp
           <button type="button" class="btn btn-outline-danger btn-sm" onclick="reset2();">&#x21bb;</button><br>
           <canvas id="tt" style="border-radius: 10px;" class="efekttd"></canvas><br>
         <input type="text" id="q1" class="form-control" hidden>
         <input type="text" id="datenow" value="<?php echo date("Y-m-d"); ?>" hidden>
         <input type="text" id="temp1" hidden>
         <input type="text" id="temp2" hidden>
         <input type="text" id="temp3" hidden>
       </div>
     </div>
   </div>
</div>

<script>

  function remove(x){
      var kode = x;
      var konfirmasi = confirm("Konfirmasi hapus data soap ?");
      var text = "";

      if(konfirmasi === true) {
        $.ajax({
            url: "<?= base_url('logic2/dropsoa'); ?>",
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

  function edit(el) {
    var vl = $(el).data("kode");
    $("#q1").val(vl);
    getcanvas(vl);
    location.href = "#canvasCon";
  }
  function back(){
    var x = $("#rm").val();
    location.href = "<?php echo base_url('logic/ralanbase/') ?>"+x;
  }
  function getcanvas(id) {
     console.log(id);
     $.ajax({
        url: "<?= base_url('Logic2/geteditsoa'); ?>",
        method: "POST",
        data: {
           id: id
        },
        cache: "false",
        success: function (x) {
              var tx = x.split("~");
              $('#temp1').val(tx[0]);
              $('#temp2').val(tx[1]);
              $('#temp3').val(tx[2]);
              get();
              hit();
              get2();
              hit2();
           removeHidden('canvasCon');
        }
     })
  }
  function updatecanvas() {
     var v1 = $('#q1').val();
     var v2 = $('#datenow').val();

     var vt01 = document.getElementById('soa');
     var vt02 = document.getElementById('tt');
     var v3 = vt01.toDataURL('image/png');
     var v4 = vt02.toDataURL('image/png');

     $.ajax({
        url: "<?= base_url('logic2/updatesoa'); ?>",
        method: "POST",
        data: {
           v1: v1,
           v2: v2,
           v3: v3,
           v4: v4
        },
        cache: "false",
        success: function (x) {
          addHidden('canvasCon');
           console.log(x);
           if (x == 1) {
              Swal.fire('Berhasil', 'Data Berhasil di Update', 'success');
              tbldt.ajax.reload(null, false);
              location.href = "#main";
              return;
           } else {
              Swal.fire('Gagal', 'Data Gagal di Update', 'error');
              tbldt.ajax.reload(null, false);
              return;
           }
        }
     })
  }
  function storecanvas() {
     var v1 = $('#datenow').val();
     var v2 = $('#rw').val();
     $.ajax({
        url: "<?= base_url('logic2/storesoa'); ?>",
        method: "POST",
        data: {
           v1: v1,
           v2: v2
        },
        cache: "false",
        success: function (x) {
           console.log(x);
           if (x == 1) {
              Swal.fire('Berhasil', 'Data Berhasil di Tambahkan', 'success');
              tbldt.ajax.reload(null, false);
              location.href = "#main";
              return;
           } else {
              Swal.fire('Gagal', 'Data Gagal di Update', 'error');
              tbldt.ajax.reload(null, false);
              return;
           }
        }
     })
  }
  carirm();
  function carirm() {
     var nr = '<?php echo $nr; ?>';
     $.ajax({
        url: "<?= base_url('Logic2/setkeysoa'); ?>",
        method: "POST",
        data: {
           nr: nr
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
              $('#rm').val(tx[0]);
              $('#rw').val(tx[1]);
              document.getElementById("n1").innerHTML = tx[0];
              document.getElementById("n2").innerHTML = tx[1];
              document.getElementById("n3").innerHTML = tx[2];
              document.getElementById("n4").innerHTML = tx[3];
              document.getElementById("n5").innerHTML = tx[4];
              var jk = tx[5];
              var a;
              if (jk == "P")
              {a = "Perempuan";}
              else
              {a = "Laki- Laki";}
              document.getElementById("n6").innerHTML = a;
           }
        }
     })
  }
  var tbldt = $("#tblsoa").DataTable({
     "ajax": "<?= base_url('Logic2/soaJSON'); ?>"
  });
  function tes(){
    //$("#cancel").click();
    $('#modal-xl').modal('hide');
  }
  function get(){
      var v1 = $("#temp1").val();
      var canvas = document.getElementById("soa");
      var ctx = canvas.getContext("2d");
      var image = new Image();
      image.onload = function() {
      ctx.drawImage(image, 0, 0);
      };
      image.src = v1;
  }
  function get2(){
      var v2 = $("#temp2").val();
      var canvas = document.getElementById("tt");
      var ctx = canvas.getContext("2d");
      var image = new Image();
      image.onload = function() {
      ctx.drawImage(image, 0, 0);
      };
      image.src = v2;
  }
  function hit(){
      new SignaturePad(document.getElementById('soa'));
  }
  function hit2(){
      new SignaturePad(document.getElementById('tt'));
  }
  function reset(){
      hapusttd1();
      get();
      hit();
  }
  function reset2(){
      hapusttd2();
      get2();
      hit2();
  }
  function hapusttd1() {
      var ttd1 = document.getElementById('soa');
      var isi = ttd1.getContext('2d');
      isi.clearRect(0, 0, ttd1.width, ttd1.height);
  }
  function hapusttd2() {
      var ttd1 = document.getElementById('tt');
      var isi = ttd1.getContext('2d');
      isi.clearRect(0, 0, ttd1.width, ttd1.height);
  }
  function addHidden(x) {
  document.getElementById(x).classList.add("hidden");
  location.href = "#main";
  }
  function removeHidden(x) {
  document.getElementById(x).classList.remove("hidden");
  }
  function render(){
    var x = $("#rw").val();
    window.open("<?= base_url('logic2/rendersoa/'); ?>"+x,"_self")
  }
  function render2(){
    var x = $("#rw").val();
    window.open("<?= base_url('logic2/render/'); ?>"+x,"_self")
  }
</script>
