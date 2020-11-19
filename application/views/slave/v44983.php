<input type="text" id="idcari" value="<?= $rm; ?>" hidden>
<button type="button" onclick="carirm()" id="btncari" hidden>Cari !</button>
<div class="row">
  <div class="col-sm-3">
      <a href="<?= base_url('logic/dataPasien') ?>" class="btn btn-block btn-outline-success btn-sm"><i class="nav-icon far fa-save"></i> Data Pasien</a>
  </div>
</div>
<br>
<div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registrasi Pasien</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>No Rekam Medik</label>
                      <input type="text" class="form-control" id="no_rm" value="-">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama_lengkap" value="-">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Gol Darah</label>
                      <select class="form-control" name="gol_drh" id="gol_darah">
                				<?php
                						foreach ($gd as $v2) {
                						echo "<option>" .$v2."</option>";
                						} ?>
                			</select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jk" id="jk">
                				<?php
                					foreach ($jk as $v1) {
                					echo "<option>" .$v1."</option>";
                					} ?>
                			</select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <input type="text" class="form-control" id="tmpt_lhr" value="-">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control" id="tgl_lhr">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" id="alamat" value="-">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Agama</label>
                      <select class="form-control" name="agama" id="agama">
                				<option selected>Islam</option>
                				<option>Kong Hu Chu</option>
                				<option>Budha</option>
                				<option>Hindu</option>
                				<option>Katolik</option>
                				<option>Kristen</option>
                				<option>-</option>
                			</select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>No KTP</label>
                      <input type="text" class="form-control" id="no_ktp" value="-">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Nama Ibu</label>
                      <input type="text" class="form-control" id="nm_ibu" value="-">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Status Nikah</label>
                      <select class="form-control" name="stts_nikah" id="stts_nikah">
                				<?php	foreach ($sn as $v3) { echo "<option>" .$v3."</option>";	} ?>
                			</select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" id="email" value="-">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Telp</label>
                      <input type="text" class="form-control" id="tlp" value="-">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Pendidikan</label>
                      <select class="form-control" name="pendidikan" id="pendidikan">
                				<?php
                										foreach ($pnd as $v4) {
                											echo "<option>" .$v4."</option>";
                										} ?>
                			</select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaan" value="-">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Alamat Kantor</label>
                      <input type="text" class="form-control" id="alamat_kantor" value="-">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Warga Negara</label>
                      <input type="text" class="form-control" id="warga_negara" value="-">
                    </div>
                  </div>
                </div>
                <hr>
                <center>Data Penanggung Jawab</center>
                <hr>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Nama lengkap</label>
                      <input type="text" class="form-control" id="nama_pj" value="-">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Gol Darah</label>
                      <select class="form-control" name="gd_pj" id="gd_pj">
                				<?php
                						foreach ($gd as $v2) {
                						echo "<option>" .$v2."</option>";
                						} ?>
                			</select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jk_pj" id="jk_pj">
                				<?php
                					foreach ($jk as $v1) {
                					echo "<option>" .$v1."</option>";
                					} ?>
                			</select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <input type="text" class="form-control" id="tmp_lhr_pj" value="-">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Tanggal lahir</label>
                      <input type="date" class="form-control" id="tgl_lhr_pj">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Agama</label>
                      <select class="form-control" name="agama_pj" id="agama_pj">
                				<option selected>Islam</option>
                				<option>Kong Hu Chu</option>
                				<option>Budha</option>
                				<option>Hindu</option>
                				<option>Katolik</option>
                				<option>Kristen</option>
                				<option>-</option>
                			</select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" id="alamat_pj" value="-">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" id="email_pj" value="-">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>No Telp</label>
                      <input type="text" class="form-control" id="tlp_pj" value="-">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Pendidikan</label>
                      <select class="form-control" name="pendidikan_pj" id="pendidikan_pj">
                				<?php
                										foreach ($pnd as $v4) {
                											echo "<option>" .$v4."</option>";
                										} ?>
                			</select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaan_pj" value="-">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Alamat Kantor</label>
                      <input type="text" class="form-control" id="alamat_kantor_pj" value="-">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Warga Negara</label>
                      <input type="text" class="form-control" id="warga_negara_pj" value="-">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Hubungan dengan Pasien</label>
                      <select class="form-control" name="hub_pasien" id="hub_pasien">
                				<?php
                										foreach ($kl as $v5) {
                											echo "<option>" .$v5."</option>";
                										} ?>
                			</select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                			<label for="">Cara Bayar</label>
                			<select class="form-control" name="kd_pj" id="kd_pj">
                				<?php
                        			foreach ($hs1 as $r1) { ?>
                				<option value="<?php echo $r1['kd_pj']?>">
                					<?php echo $r1['png_jawab']?></option>
                				<?php } ?>
                			</select>
                		</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <center>
                			<label for="">Pasien / Penanggung Jawab</label></br>
                			<canvas id="ttd1" class="efekttd" style="width: 300px;"></canvas><br>
                		   <button type="button" class="btn btn-danger btn-sm" onclick="hapusttd1()">Reset</button>
                		</center>
                  </div>
                  <div class="col-sm-6">
                    <center>
                			<label for="">Petugas Admisi</label></br>
                			<canvas id="ttd2" class="efekttd" style="width: 300px;"></canvas><br>
                		   <button type="button" class="btn btn-danger btn-sm" onclick="hapusttd2()">Reset</button>
                		</center>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" onclick="updatedata()" class="btn btn-info btn-sm">Update</button>
                <button type="button" class="btn btn-success btn-sm" onclick="print()"><i class="nav-icon fas fa-print"></i> Cetak</button>
                <a href="<?= base_url('logic/dataPasien') ?>" type="submit" class="btn btn-secondary btn-sm float-right">Cancel</a>
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>

<script>

function print(){
  var y = $("#idcari").val();
  window.open("<?= base_url('logic/CetakPasien/'); ?>"+y,"_self")
}

function hapusttd1(){
var ttd1 = document.getElementById('ttd1');
var isi = ttd1.getContext('2d');
isi.clearRect(0, 0, ttd1.width, ttd1.height);
}
function hapusttd2(){
var ttd1 = document.getElementById('ttd2');
var isi = ttd1.getContext('2d');
isi.clearRect(0, 0, ttd1.width, ttd1.height);
}

</script>

<input type="text" id="temp1" hidden>
<input type="text" id="temp2" hidden>

<script>
    cariotomatis();
    function cariotomatis() {
        var rm = $("#idcari").val();
        if (rm != "") {
            $("#btncari").click();
        }
    }
    function carirm() {
        var rm = $("#idcari").val();
        if (rm == "") {
            Swal.fire('Gagal', 'Data Gagal di cari', 'error');
            return;
        }
        $.ajax({
            url: "<?= base_url('logic/getedit'); ?>",
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
                    var tx = x.split("|");
                    $("#no_rm").val(tx[0]);
                    $("#nama_lengkap").val(tx[1]);
                    $("#gol_darah").val(tx[2]);
                    $("#jk").val(tx[3]);
                    $("#tmpt_lhr").val(tx[4]);
                    $("#tgl_lhr").val(tx[5]);
                    $("#alamat").val(tx[6]);
                    $("#agama").val(tx[7]);
                    $("#no_ktp").val(tx[8]);
                    $("#nm_ibu").val(tx[9]);
                    $("#stts_nikah").val(tx[10]);
                    $("#email").val(tx[11]);
                    $("#tlp").val(tx[12]);
                    $("#pendidikan").val(tx[13]);
                    $("#pekerjaan").val(tx[14]);
                    $("#alamat_kantor").val(tx[15]);
                    $("#warga_negara").val(tx[16]);
                    $("#nama_pj").val(tx[17]);
                    $("#gd_pj").val(tx[18]);
                    $("#jk_pj").val(tx[19]);
                    $("#tmp_lhr_pj").val(tx[20]);
                    $("#tgl_lhr_pj").val(tx[21]);
                    $("#agama_pj").val(tx[22]);
                    $("#alamat_pj").val(tx[23]);
                    $("#email_pj").val(tx[24]);
                    $("#tlp_pj").val(tx[25]);
                    $("#pendidikan_pj").val(tx[26]);
                    $("#pekerjaan_pj").val(tx[27]);
                    $("#alamat_kantor_pj").val(tx[28]);
                    $("#warga_negara_pj").val(tx[29]);
                    $("#hub_pasien").val(tx[30]);
                    $("#kd_pj").val(tx[31]);
                    $("#temp1").val(tx[32]);
                    $("#temp2").val(tx[33]);

                    get();
                    hit();
                    get2();
                    hit2();

                }
            },
            error: function () {
            }
        })
    }

    function get(){
        var v1 = $("#temp1").val();
        var canvas = document.getElementById("ttd1");
        var ctx = canvas.getContext("2d");
        var image = new Image();
        image.onload = function() {
        ctx.drawImage(image, 0, 0);
        };
        image.src = v1;
    }
    function get2(){
        var v1 = $("#temp2").val();
        var canvas = document.getElementById("ttd2");
        var ctx = canvas.getContext("2d");
        var image = new Image();
        image.onload = function() {
        ctx.drawImage(image, 0, 0);
        };
        image.src = v1;
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


    function hit(){
        new SignaturePad(document.getElementById('ttd1'));
    }
    function hit2(){
        new SignaturePad(document.getElementById('ttd2'));
    }


</script>

<script>

function updatedata() {
  var v1 = $("#no_rm").val();
  var v2 = $("#nama_lengkap").val();
  var v3 = $("#gol_darah").val();
  var v4 = $("#jk").val();
  var v5 = $("#tmpt_lhr").val();
  var v6 = $("#tgl_lhr").val();
  var v7 = $("#alamat").val();
  var v8 = $("#agama").val();
  var v9 = $("#no_ktp").val();
  var v10 = $("#nm_ibu").val();
  var v11 = $("#stts_nikah").val();
  var v12 = $("#email").val();
  var v13 = $("#tlp").val();
  var v14 = $("#pendidikan").val();
  var v15 = $("#pekerjaan").val();
  var v16 = $("#alamat_kantor").val();
  var v17 = $("#warga_negara").val();
  var v18 = $("#nama_pj").val();
  var v19 = $("#gd_pj").val();
  var v20 = $("#jk_pj").val();
  var v21 = $("#tmp_lhr_pj").val();
  var v22 = $("#tgl_lhr_pj").val();
  var v23 = $("#agama_pj").val();
  var v24 = $("#alamat_pj").val();
  var v25 = $("#email_pj").val();
  var v26 = $("#tlp_pj").val();
  var v27 = $("#pendidikan_pj").val();
  var v28 = $("#pekerjaan_pj").val();
  var v29 = $("#alamat_kantor_pj").val();
  var v30 = $("#warga_negara_pj").val();
  var v31 = $("#hub_pasien").val();
  var v32 = $("#kd_pj").val();
  var vt33 = document.getElementById('ttd1');
  var vt34 = document.getElementById('ttd2');
  var v33 = vt33.toDataURL('image/png');
  var v34 = vt34.toDataURL('image/png');

        $.ajax({
            url: "<?= base_url('logic/update'); ?>",
            method: "POST",
            data: {
              v1: v1,
              v2: v2,
              v3: v3,
              v4: v4,
              v5: v5,
              v6: v6,
              v7: v7,
              v8: v8,
              v9: v9,
              v10: v10,
              v11: v11,
              v12: v12,
              v13: v13,
              v14: v14,
              v15: v15,
              v16: v16,
              v17: v17,
              v18: v18,
              v19: v19,
              v20: v20,
              v21: v21,
              v22: v22,
              v23: v23,
              v24: v24,
              v25: v25,
              v26: v26,
              v27: v27,
              v28: v28,
              v29: v29,
              v30: v30,
              v31: v31,
              v32: v32,
              v33: v33,
              v34: v34

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



</script>
