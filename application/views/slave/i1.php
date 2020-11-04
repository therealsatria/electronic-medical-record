<div class="row mb-3">
   <div class="col-sm-6">
      <div class="input-group input-group-sm">
         <a type="button" id="kembali" class="btn btn-sm btn-outline-primary">Kembali</a>
         </br>
      </div>
   </div>
</div>
<!-- ================================= -->
<div class="row">
    <div class="col-sm-12">
        <label>PENGKAJIAN AWAL RAWAT JALAN</label>
    </div>
</div>
<!-- ================================= -->
<div class="row">
    <div class="col-sm-4">
        <div class="form-group mb-2">
            <label for="">No RM</label>
            <input type="text" class="form-control"  name="" id="a1" value="<?= $norm ?>" aria-describedby="helpId">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-2">
            <label for="">No Registrasi</label>
            <input type="text" class="form-control" name="" id="a2" value="<?php echo date("Y/m/d"); ?>/000000"  aria-describedby="helpId">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-2">
            <label for="">Nama</label>
            <input type="text" class="form-control"  name="" id="a3" value="<?= $nama_lengkap ?>"  aria-describedby="helpId">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group mb-2">
            <label for="">Tgl Lahir</label>
            <input type="text" class="form-control"  name="" id="a4" value="<?= $tgl_lhr ?>"  aria-describedby="helpId">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-2">
            <label for="">Jenis Kelamin</label>
            <select class="form-control" name="jk" id="a5">
              <?php
      						foreach ($jk as $v4) {
      						echo "<option>" .$v4."</option>";
      						} ?>
			      </select>
        </div>
    </div>
</div>

<hr style="height:2px;border-width:0;color:gray;background-color:gray">
<div class="row">
    <div class="col-sm-4">
        <div class="form-group mb-2">
            <label for="">Tanggal Kunjungan</label>
            <input type="text" class="form-control" id="a6" value="<?php echo date("Y-m-d"); ?>">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-2">
            <label for="">Waktu Kunjungan</label>
            <input type="time" class="form-control" name="" id="a7" value="<?php echo date("h:i:s"); ?>">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-2">
            <label for="">Usia Saat Kunjungan</label>
            <input type="text" class="form-control" name="" id="a8" value=""  aria-describedby="helpId">
        </div>
    </div>
</div>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
<div class="row">
    <div class="col-sm-4">
        <label for="">Poliklinik</label>
    </div>
    <div class="col-sm-4">
        <label for="">DPJP</label>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group mb-2">
            <select class="form-control" id="a9">
                <?php foreach($kdpl as $e){ ?>
                <option value="<?php echo $e->kd_poli; ?>"><?php echo $e->nm_poli; ?></option>';
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-2">
            <select class="form-control" id="a39">
                <?php foreach($kddr as $e){ ?>
                <option value="<?php echo $e->kd_dokter; ?>"><?php echo $e->nm_dokter; ?></option>';
                <?php } ?>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <label for="">Pengukuran tanda vital :</label>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Tensi :</span>
            </div>
            <input type="text" class="form-control"  name="" id="a10" value="-"  aria-describedby="helpId">
            <div class="input-group-prepend">
                <span class="input-group-text">mmHg</span>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Pernapasan</span>
            </div>
            <input type="text" class="form-control"  name="" id="a11" value="-"  aria-describedby="helpId">
            <div class="input-group-prepend">
                <span class="input-group-text">x/menit</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Skala nyeri</span>
            </div>
            <input type="text" class="form-control"  name="" id="a12" value="-"  aria-describedby="helpId">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Nadi</span>
            </div>
            <input type="text" class="form-control"  name="" id="a13" value="-"  aria-describedby="helpId">
            <div class="input-group-prepend">
                <span class="input-group-text">x/menit</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Suhu</span>
            </div>
            <input type="text" class="form-control"  name="" id="a14" value="-"  aria-describedby="helpId">
            <div class="input-group-prepend">
                <span class="input-group-text">°C</span>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <label for="">Alergi :</label>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Alergi Obat :</span>
            </div>
            <input type="text" class="form-control"  name="" id="a15" value="-"  aria-describedby="helpId">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Reaksi :</span>
            </div>
            <input type="text" class="form-control"  name="" id="a16" value="-"  aria-describedby="helpId">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Alergi Makanan :</span>
            </div>
            <input type="text" class="form-control"  name="" id="a17" value="-"  aria-describedby="helpId">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Reaksi :</span>
            </div>
            <input type="text" class="form-control"  name="" id="a18" value="-"  aria-describedby="helpId">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Alergi Lain :</span>
            </div>
            <input type="text" class="form-control"  name="" id="a19" value="-"  aria-describedby="helpId">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Reaksi :</span>
            </div>
            <input type="text" class="form-control"  name="" id="a20" value="-"  aria-describedby="helpId">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <label for="">Skrining Nutrisi :</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">BB :</span>
            </div>
            <input type="text" class="form-control"  name="" id="a21" value="-"  aria-describedby="helpId">
            <div class="input-group-prepend">
                <span class="input-group-text">kg</span>
            </div>
        </div>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">TB :</span>
            </div>
            <input type="text" class="form-control"  name="" id="a22" value="-"  aria-describedby="helpId">
            <div class="input-group-prepend">
                <span class="input-group-text">cm</span>
            </div>
        </div>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">IMT :</span>
            </div>
            <input type="text" class="form-control"  name="" id="a23" value="-"  aria-describedby="helpId">
            <div class="input-group-prepend">
                <span class="input-group-text">kg/m²</span>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <label for="">&nbsp</label>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="a24" value="1">
                <label class="form-check-label">IMT < 18 kg/m² </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="a25" value="1">
                <label class="form-check-label">Kehilangan BB dalam 3 bulan terakhir</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="a26" value="1">
                <label class="form-check-label">Penurunan asupan makanan 1 minggu terakhir</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="a27" value="1">
                <label class="form-check-label">Apakah pasien mengalami sakit berat</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="a28" value="1">
                <label class="form-check-label"><?php echo"Khusus Pediatri : apakah Z score >+2 SD atau Z score <-2 SD (gunakan kurva gizi dari WHO)" ?> </label>
            </div>
        </div>
    </div>
</div>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Skrining Resiko Jatuh</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No.</th>
                                    <th>PENILAIAN PENGKAJIAN</th>
                                    <th style="width: 80px">YA</th>
                                    <th style="width: 80px">TIDAK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>a.</td>
                                    <td>Cara berjalan (salah satu atau lebih) <br>
                                        tidak seimbang / sempoyongan / limbung
                                    </td>
                                    <td><input type="radio" name="radio1" value="1"></td>
                                    <td><input type="radio" name="radio1" value="0"></td>
                                </tr>
                                <tr>
                                    <td>a.</td>
                                    <td>Jalan dengan menggunakan alat bantu <br>
                                        (kruk / tripod / kursi roda / orang lain)
                                    </td>
                                    <td><input type="radio" name="radio2" value="1"></td>
                                    <td><input type="radio" name="radio2" value="0"></td>
                                </tr>
                                <tr>
                                    <td>a.</td>
                                    <td>Menopang saat akan duduk : tampak memegang pinggiran kursi / meja / benda lain sebagai penopang saat akan duduk
                                    </td>
                                    <td><input type="radio" name="radio3" value="1"></td>
                                    <td><input type="radio" name="radio3" value="0"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <label for="">Skrining Fungsional dan Psikologi</label>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ADL</span>
                    </div>
                    <input type="text" class="form-control"  name="" id="a32" value="-" aria-describedby="helpId">
                </div>
            </div>
            <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                    <select class="form-control" id="a32b">
                        <option>-</option>
                        <option>Menggunakan Alat Bantu</option>
                        <option>Mandiri</option>
                        <option>Dibantu</option>
                        <option>Total</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Cacat Fisik</span>
                    </div>
                    <input type="text" class="form-control"  name="" id="a33" value="-" aria-describedby="helpId">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Protesa</span>
                    </div>
                    <input type="text" class="form-control"  name="" id="a34" value="-" aria-describedby="helpId">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Kondisi Psikologis</span>
                    </div>
                    <input type="text" class="form-control"  name="" id="a35" value="-" aria-describedby="helpId">
                </div>
            </div>
            <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                    <select class="form-control" id="a35b">
                        <option>-</option>
                        <option>Tenang</option>
                        <option>Cemas</option>
                        <option>Agitasi</option>
                    </select>
                </div>
            </div>
        </div>

        <script>
            $(function () {
                var $src = $('#a32b'),
                    $dst = $('#a32');
                $src.on('input', function () {
                    $dst.val($src.val());

                });
                var $src2 = $('#a35b'),
                    $dst2 = $('#a35');
                $src2.on('input', function () {
                    $dst2.val($src2.val());

                });
            });
        </script>
        <div class="row">
            <div class="col-sm-4">
                <label for="">Diagnosa Keperawatan</label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <textarea class="form-control" rows="3" id="a36" placeholder="Enter ..."></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for="">Rencana Keperawatan</label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                <textarea class="form-control" rows="3" id="a37" placeholder="Enter ..."></textarea>
                </div>
            </div>
            <div class="col-sm-6">
            <canvas id="a38" class="efekttd" style="width: 300px;"></canvas><br>
            <button type="button" class="btn btn-danger btn-sm" onclick="hapusttd1()">Reset</button>
            </div>
        </div>
        <div class="row">
          <div class="col-2" style="margin-top: 10px; margin-bottom: 10px; margin-left: 1%;">
             </br>
             <button type="button" class="btn btn-primary btn-sm" onclick="simpandata()">Simpan Form</button>&nbsp&nbsp
          </div>
        </div>

        <script>
        $(document).ready(function(){
          new SignaturePad(document.getElementById('a38'));
        });
        function hapusttd1(){
          var ttd1 = document.getElementById('a38');
          var isi = ttd1.getContext('2d');
          isi.clearRect(0, 0, ttd1.width, ttd1.height);
        }

        $("#a5").val('<?php echo $ejk; ?>');

        </script>

        <script>

        $(document).ready(function(){
          $('#kembali').click(function(){
              var y = $("#a1").val();
              window.open("<?= base_url('logic/ralanbase/'); ?>"+y,"_self")
             });
        });

        function simpandata() {
          var str = $("#a2").val();
          var y = str.substring(0, 4);
          var m = str.substring(5, 7);
          var d = str.substring(8, 10);
          var i = str.substring(11, 17);
          var hasil = y+m+d+i;

           var v1 = $("#a1").val();
           var v2 = hasil;
           var v3 = $("#a3").val();
           var v4 = $("#a4").val();
           var v5 = $("#a5").val();
           var v6 = $("#a6").val();
           var v7 = $("#a7").val();
           var v8 = $("#a8").val();
           var v9 = $("#a9").val();
           var v10 = $("#a10").val();
           var v11 = $("#a11").val();
           var v12 = $("#a12").val();
           var v13 = $("#a13").val();
           var v14 = $("#a14").val();
           var v15 = $("#a15").val();
           var v16 = $("#a16").val();
           var v17 = $("#a17").val();
           var v18 = $("#a18").val();
           var v19 = $("#a19").val();
           var v20 = $("#a20").val();
           var v21 = $("#a21").val();
           var v22 = $("#a22").val();
           var v23 = $("#a23").val();
           var v24 = $("#a24").is(":checked");
           var v25 = $("#a25").is(":checked");
           var v26 = $("#a26").is(":checked");
           var v27 = $("#a27").is(":checked");
           var v28 = $("#a28").is(":checked");
           var v29 = $("input[name='radio1']:checked").val();
           var v30 = $("input[name='radio2']:checked").val();
           var v31 = $("input[name='radio3']:checked").val();
           var v32 = $("#a32").val();
           var v33 = $("#a33").val();
           var v34 = $("#a34").val();
           var v35 = $("#a35").val();
           var v36 = $("#a36").val();
           var v37 = $("#a37").val();

           // data canvas
           var vt38 = document.getElementById('a38');
           var v38 = vt38.toDataURL('image/png');
           var v39 = $("#a39").val();


           if (v1 == "" || v2 == "" || v38 == "" || v3 == "") {
              Swal.fire('Gagal', 'Ada Isian Yang Masih Kosong', 'error');
              return;
           }
           if (v38 == ttdkosong) {
              Swal.fire('Gagal', 'TTD Masih Kosong', 'error');
              return;
           }
           $.ajax({
              url: "<?= base_url('logic2/store'); ?>",
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
                 v34: v34,
                 v35: v35,
                 v36: v36,
                 v37: v37,
                 v38: v38,
                 v39: v39

              },
              cache: "false",
              success: function (x) {
                 console.log(x);
                 if (x == 1) {
                    Swal.fire('Berhasil', 'Data Berhasil di Simpan', 'success');
                    return;
                 } else {
                    Swal.fire('Gagal', 'Data Gagal di Simpan', 'error');
                    return;
                 }
              }
           })
        }

        </script>
