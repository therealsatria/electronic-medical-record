CPPT
</br>
</br>
</br>
<label for="">cari</label>
<input type="text" name="" id="idcari" ></input>
<button type="button" onclick="carirm()">button</button>
</br>
</br>
</br>

<label for="">no rm</label>
<input type="text" name="" id="" ></input>
</br>
<label for="">nama</label>
<input type="text" name="" id="idn" ></input>
</br> 
<!-- <label for="">tgl lahir</label>
<input type="text" name="" id="" ></input>
</br> -->
<label for="">ruangan</label>
<input type="text" name="" id="idr" ></input>
</br>
<!-- <label for="">tanggal</label>
<input type="text" name="" id="" ></input>
</br>
<label for="">jam</label>
<input type="text" name="" id="" ></input>
</br> -->
<label for="">ppa</label>
<input type="text" name="" id="" ></input>
</br>

      <label for="">SOAP</label></br>
		<canvas id="ttd1" class="efekttd" style="width: 300px;"></canvas><br>
		<button type="button" class="btn btn-danger" onclick="hapussoap()">Reset</button>

      <label for="">Nama Terang</label></br>
		<canvas id="ttd1" class="efekttd" style="width: 300px;"></canvas><br>
		<button type="button" class="btn btn-danger" onclick="hapusnt()">Reset</button>
</br>
</br>
      <button type="button">tambah cppt</button>

<script>
 function carirm(){
    var rm = $("#idcari").val();
    if(rm == ""){
      Swal.fire('Gagal', 'Data Gagal di cari', 'error');
               return;
    }
    $.ajax({
         url: "<?= base_url('logic/getcppt'); ?>",
         method: "POST",
         data: {rm: rm, },
         cache: "false",
         success: function (x) {
            console.log(x);
            if (x == 0) {
               Swal.fire('gagal', 'data kosong', 'error');
               return;
            } else {
               var tx = x.split("|");
               $("#idn").val(tx[0]);
               $("#idr").val(tx[1]);
            }
         },
         error: function (){

         }
      })
 }
</script>
