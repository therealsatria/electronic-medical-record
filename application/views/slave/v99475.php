
<div class="col-12 col-sm-12">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">FORM RM.01</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">RM.02A</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">RM.03A</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">SK Bayar</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                  <?php foreach ($dp as $k){ ?>
                  <?php include 'd1.php' ; ?>
                  </div>

                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                  <?php include 'd2.php' ; ?>
                  </div>

                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                  <?php include 'd3.php' ; ?>
                  </div>

                  <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                  <?php include 'd4.php' ; ?>
                  <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

<script>
        $(document).ready(function(){
            new SignaturePad(document.getElementById('ttd1'));
            new SignaturePad(document.getElementById('ttd2'));
            new SignaturePad(document.getElementById('ttd_wali'));
            new SignaturePad(document.getElementById('ttd_wali2'));
            new SignaturePad(document.getElementById('ttd_saksi'));
            new SignaturePad(document.getElementById('ttd_saksi_f3'));
            new SignaturePad(document.getElementById('ttd_pasien_f3'));
            new SignaturePad(document.getElementById('ttd_saksi_f4'));
            new SignaturePad(document.getElementById('ttd_pasien_f4'));
        });
        
</script>

<script>
   function simpandata() {
      var v1 = $("#no_rm").val();
      var v2 = $("#nm_pasien").val();
      var v3 = $("#gol_drh").val();
      var v4 = $("#jk").val();
      var v5 = $("#tmpt_lhr").val();
      var v6 = $("#tgl_lhr").val();
      var v7 = $("#agama").val();
      var v8 = $("#no_ktp").val();
      var v9 = $("#nm_ibu").val();
      var v10 = $("#stts_nikah").val();
      var v11 = $("#alamat").val();
      var v12 = $("#email").val();
      var v13 = $("#tlp").val();
      var v14 = $("#pnd").val();
      var v15 = $("#pkrjn").val();
      var v16 = $("#almt_kntr").val();
      var v17 = $("#wrga_neg").val();
      var v18 = $("#tgl_prnh_drwt").val();
      var v19 = $("#nm_dpn_pj").val();
      var v20 = $("#gol_drh_pj").val();
      var v21 = $("#jk_pj").val();
      var v22 = $("#tmp_lhr_pj").val();
      var v23 = $("#tgl_pj").val();
      var v24 = $("#agama_pj").val();
      var v25 = $("#alamat_pj").val();
      var v26 = $("#email_pj").val();
      var v27 = $("#tlp_pj").val();
      var v28 = $("#pnd_pj").val();
      var v29 = $("#pkrjn_pj").val();
      var v30 = $("#alamat_kntr_pj").val();
      var v31 = $("#wrga_neg_pj").val();
      var v32 = $("#hub_pj").val();
      var v33 = $("#kls_perwtn").val();
      var v34 = $("#kmr").val();
      var v35 = $("#lntai").val();
      var v36 = $("#tgl_msk").val();
      var v37 = $("#jam").val();
      var v38 = $("#dr_pngrim").val();
      var v39 = $("#dpjp").val();
      var v40 = $("#asalpasien").val();
      var v41 = $("#jamkes").val();
      var v42 = $("#rujukan").val();
      var v43 = $("#kd_pj").val();
      var v44 = $("#kode_perusahaan").val();
      var v45 = $("#surat_jminan").val();
      var v46 = $("#surat_rujukan").val();
      var v47 = $("#acc1").val();
      var vt48 = document.getElementById('ttd1');
      var v49 = $("#acc2").val();
      var vt50 = document.getElementById('ttd2');

      var v51 = $("#nm_saksi").val();
      var vt52 = document.getElementById('ttd_wali');
      var vt53 = document.getElementById('ttd_wali2');
      var vt54 = document.getElementById('ttd_saksi');

      var v55 = $("#privasi").val();
      var v56 = $("#nm1_form3").val();
      var v57 = $("#almt1_form3").val();
      var v58 = $("#nm2_form3").val();
      var v59 = $("#almt2_form3").val();
      var vt60 = document.getElementById('ttd_saksi_f3');
      var vt61 = document.getElementById('ttd_pasien_f3');

      var v62 = $("#perkiraan_biaya").val();
      var vt63 = document.getElementById('ttd_saksi_f4');
      var vt64 = document.getElementById('ttd_pasien_f4');

      var v48 = vt48.toDataURL('image/png');
      var v50 = vt50.toDataURL('image/png');
      var v52 = vt52.toDataURL('image/png');
      var v53 = vt53.toDataURL('image/png');
      var v54 = vt54.toDataURL('image/png');
      var v60 = vt60.toDataURL('image/png');
      var v61 = vt61.toDataURL('image/png');
      var v63 = vt63.toDataURL('image/png');
      var v64 = vt64.toDataURL('image/png');

      if (v1 == "" || v2 == "" || v48 == "" || v50 == "") {
         Swal.fire('Gagal', 'Ada Isian Yang Masih Kosong', 'error');
         return;
      }
      if (v48 == ttdkosong) {
         Swal.fire('Gagal', 'TTD Masih Kosong', 'error');
         return;
      }
      $.ajax({
         url: "<?= base_url('logic/store'); ?>",
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
            v39: v39,
            v40: v40,
            v41: v41,
            v42: v42,
            v43: v43,
            v44: v44,
            v45: v45,
            v46: v46,
            v47: v47,
            v48: v48,
            v49: v49,
            v50: v50,
            v51: v51,
            v52: v52,
            v53: v53,
            v54: v54,
            v55: v55,
            v56: v56,
            v57: v57,
            v58: v58,
            v59: v59,
            v60: v60,
            v61: v61,
            v62: v62,
            v63: v63,
            v64: v64
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

<script>

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
    function hapusttd3(){
		var ttd1 = document.getElementById('ttd_wali');
		var isi = ttd1.getContext('2d');
		isi.clearRect(0, 0, ttd1.width, ttd1.height);
	}
    function hapusttd4(){
		var ttd1 = document.getElementById('ttd_wali2');
		var isi = ttd1.getContext('2d');
		isi.clearRect(0, 0, ttd1.width, ttd1.height);
	}
    function hapusttd5(){
		var ttd1 = document.getElementById('ttd_saksi');
		var isi = ttd1.getContext('2d');
		isi.clearRect(0, 0, ttd1.width, ttd1.height);
	}
    function hapusttd6(){
		var ttd1 = document.getElementById('ttd_saksi_f3');
		var isi = ttd1.getContext('2d');
		isi.clearRect(0, 0, ttd1.width, ttd1.height);
	}
    function hapusttd7(){
		var ttd1 = document.getElementById('ttd_pasien_f3');
		var isi = ttd1.getContext('2d');
		isi.clearRect(0, 0, ttd1.width, ttd1.height);
	}
    function hapusttd8(){
		var ttd1 = document.getElementById('ttd_saksi_f4');
		var isi = ttd1.getContext('2d');
		isi.clearRect(0, 0, ttd1.width, ttd1.height);
	}
    function hapusttd9(){
		var ttd1 = document.getElementById('ttd_pasien_f4');
		var isi = ttd1.getContext('2d');
		isi.clearRect(0, 0, ttd1.width, ttd1.height);
	}

</script>

<script>

$(function (){
    var $src = $('#nm_dpn_pj'),
        $dst = $('#nm_dpn_pj_f2');
        $dst2 = $('#nm_dpn_pj_f3');
        $dst3 = $('#nm_dpn_pj_f4');
    $src.on('input', function () {
        $dst.val($src.val());
        $dst2.val($src.val());
        $dst3.val($src.val());
    });

    var $src1 = $('#nm_pasien'),
        $dst4 = $('#nm_pasien_f2');
        $dst5 = $('#nm_pasien_f3');
        $dst6 = $('#nm_pasien_f4');
    $src1.on('input', function () {
        $dst4.val($src1.val());
        $dst5.val($src1.val());
        $dst6.val($src1.val());
    });

    var $src2 = $('#tgl_lhr'),
        $dst7 = $('#tgl_lhr_f3');

    $src2.on('input', function () {
        $dst7.val($src2.val());
    });

    var $src3 = $('#jk'),
        $dst8 = $('#jk_f3');

    $src3.on('input', function () {
        $dst8.val($src3.val());
    });

    var $src4 = $('#alamat'),
        $dst9 = $('#alamat_f3');

    $src4.on('input', function () {
        $dst9.val($src4.val());
    });

    var $src5 = $('#alamat_pj'),
        $dst10 = $('#alamat_pj_f3');
        $dst11 = $('#alamat_pj_f4');
    $src5.on('input', function () {
        $dst10.val($src5.val());
        $dst11.val($src5.val());
    });

    var $src6 = $('#tgl_pj'),
        $dst12 = $('#tgl_pj_f3');
        $dst13 = $('#tgl_pj_f4');
    $src6.on('input', function () {
        $dst12.val($src6.val());
        $dst13.val($src6.val());
    });

    var $src7 = $('#tlp_pj'),
        $dst14 = $('#tlp_pj_f3');
    $src7.on('input', function () {
        $dst14.val($src7.val());

    });

    var $src8 = $('#hub_pj'),
        $dst15 = $('#hub_pj_f4');
    $src8.on('input', function () {
        $dst15.val($src8.val());

    });

});

</script>

