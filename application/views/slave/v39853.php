<div class="col-12 col-sm-12">
    <div class="row">
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <input type="text" id="idcari" value="<?= $rm; ?>" class="form-control">
                <span class="input-group-append">
                    <button type="button" onclick="carirm()" id="btncari" class="btn btn-block btn-outline-primary"><i class="nav-icon fas fa-search"></i> Cari !</button>
                </span>
            </div>
        </div>
        <div class="col-sm-3"> 
            <a href="<?= base_url('logic/render/'.$rm.'/0'); ?>" class="btn btn-block btn-outline-secondary"><i class="nav-icon fas fa-print"></i> Cetak RM <?= $rm; ?></a>
        </div>
        <div class="col-sm-3">
            <div class="input-group mb-3">
                <button type="button" class="btn btn-block btn-outline-warning" onclick="updatedata()"><i class="nav-icon far fa-save"></i> Update Form</button>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-sm-12">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                        href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                        aria-selected="true">FORM RM.01</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                        href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                        aria-selected="false">RM.02A</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                        href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages"
                        aria-selected="false">RM.03A</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                        href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings"
                        aria-selected="false">SK Bayar</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                    aria-labelledby="custom-tabs-one-home-tab">
                    <?php include 'e1.php' ; ?>
                </div>

                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-one-profile-tab">
                    <?php include 'e2.php' ; ?>
                </div>

                <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                    aria-labelledby="custom-tabs-one-messages-tab">
                    <?php include 'e3.php' ; ?>
                </div>

                <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                    aria-labelledby="custom-tabs-one-settings-tab">
                    <?php include 'e4.php' ; ?>

                </div>
            </div>
        </div>
    </div>
</div>

<input type="text" id="temp1" hidden>
<input type="text" id="temp2" hidden>
<input type="text" id="temp3" hidden>
<input type="text" id="temp4" hidden>
<input type="text" id="temp5" hidden>
<input type="text" id="temp6" hidden>
<input type="text" id="temp7" hidden>
<input type="text" id="temp8" hidden>
<input type="text" id="temp9" hidden>

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
                    $("#rmp").val(tx[0]);
                    $("#nm_pasien").val(tx[1]);
                    $("#gol_drh").val(tx[2]);
                    $("#jk").val(tx[3]);
                    $("#tmpt_lhr").val(tx[4]);
                    $("#tgl_lhr").val(tx[5]);
                    $("#agama").val(tx[6]);
                    $("#no_ktp").val(tx[7]);
                    $("#nm_ibu").val(tx[8]);
                    $("#stts_nikah").val(tx[9]);
                    $("#alamat").val(tx[10]);
                    $("#email").val(tx[11]);
                    $("#tlp").val(tx[12]);
                    $("#pnd").val(tx[13]);
                    $("#pkrjn").val(tx[14]);
                    $("#almt_kntr").val(tx[15]);
                    $("#wrga_neg").val(tx[16]);
                    $("#tgl_prnh_drwt").val(tx[17]);
                    $("#nm_dpn_pj").val(tx[18]);
                    $("#gol_drh_pj").val(tx[19]);
                    $("#jk_pj").val(tx[20]);
                    $("#tmp_lhr_pj").val(tx[21]);
                    $("#tgl_pj").val(tx[22]);
                    $("#agama_pj").val(tx[23]);
                    $("#alamat_pj").val(tx[24]);
                    $("#email_pj").val(tx[25]);
                    $("#tlp_pj").val(tx[26]);
                    $("#pnd_pj").val(tx[27]);
                    $("#pkrjn_pj").val(tx[28]);
                    $("#alamat_kntr_pj").val(tx[29]);
                    $("#wrga_neg_pj").val(tx[30]);
                    $("#hub_pj").val(tx[31]);
                    $("#kls_perwtn").val(tx[32]);
                    $("#kmr").val(tx[33]);
                    $("#lntai").val(tx[34]);
                    $("#tgl_msk").val(tx[35]);
                    $("#jam").val(tx[36]);
                    $("#dr_pngrim").val(tx[37]);
                    $("#dpjp").val(tx[38]);
                    $("#asalpasien").val(tx[39]);
                    $("#jamkes").val(tx[40]);
                    $("#rujukan").val(tx[41]);
                    $("#kd_pj").val(tx[42]);
                    $("#kode_perusahaan").val(tx[43]);
                    $("#surat_jminan").val(tx[44]);
                    $("#surat_rujukan").val(tx[45]);
                    $("#acc1").val(tx[46]);
                    $("#temp1").val(tx[47]); 
                    $("#acc2").val(tx[48]);
                    $("#temp2").val(tx[49]); 
                    $("#nm_saksi").val(tx[50]);
                    $("#temp3").val(tx[51]); 
                    $("#temp4").val(tx[52]); 
                    $("#temp5").val(tx[53]); 
                    $("#privasi").val(tx[54]);
                    $("#nm1_form3").val(tx[55]);
                    $("#almt1_form3").val(tx[56]);
                    $("#nm2_form3").val(tx[57]);
                    $("#almt2_form3").val(tx[58]);
                    $("#temp6").val(tx[59]); 
                    $("#temp7").val(tx[60]); 
                    $("#perkiraan_biaya").val(tx[61]);
                    $("#temp8").val(tx[62]); 
                    $("#temp9").val(tx[63]); 
                    $('#nm_dpn_pj_f2').val(tx[18]);
                    $('#nm_dpn_pj_f3').val(tx[18]);
                    $('#nm_dpn_pj_f4').val(tx[18]);
                    $('#nm_pasien_f2').val(tx[1]);
                    $('#nm_pasien_f3').val(tx[1]);
                    $('#nm_pasien_f4').val(tx[1]);
                    $('#tgl_lhr_f3').val(tx[5]);
                    $('#jk_f3').val(tx[3]);
                    $('#alamat_f3').val(tx[10]);
                    $('#alamat_pj_f3').val(tx[24]);
                    $('#alamat_pj_f4').val(tx[24]);
                    $('#tgl_pj_f3').val(tx[22]);
                    $('#tgl_pj_f4').val(tx[22]);
                    $('#tlp_pj_f3').val(tx[26]);
                    $('#hub_pj_f4').val(tx[31]);
                    
                    get();
                    hit();
                    get2();
                    hit2();
                    get3();
                    hit3();
                    get4();
                    hit4();
                    get5();
                    hit5();
                    get6();
                    hit6();
                    get7();
                    hit7();
                    get8();
                    hit8();
                    get9();
                    hit9();
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
    function get3(){
        var v1 = $("#temp3").val();
        var canvas = document.getElementById("ttd_wali");
        var ctx = canvas.getContext("2d");
        var image = new Image();
        image.onload = function() {
        ctx.drawImage(image, 0, 0);
        };
        image.src = v1;
    }
    function get4(){
        var v1 = $("#temp4").val();
        var canvas = document.getElementById("ttd_wali2");
        var ctx = canvas.getContext("2d");
        var image = new Image();
        image.onload = function() {
        ctx.drawImage(image, 0, 0);
        };
        image.src = v1;
    }
    function get5(){
        var v1 = $("#temp5").val();
        var canvas = document.getElementById("ttd_saksi");
        var ctx = canvas.getContext("2d");
        var image = new Image();
        image.onload = function() {
        ctx.drawImage(image, 0, 0);
        };
        image.src = v1;
    }
    function get6(){
        var v1 = $("#temp6").val();
        var canvas = document.getElementById("ttd_saksi_f3");
        var ctx = canvas.getContext("2d");
        var image = new Image();
        image.onload = function() {
        ctx.drawImage(image, 0, 0);
        };
        image.src = v1;
    }
    function get7(){
        var v1 = $("#temp7").val();
        var canvas = document.getElementById("ttd_pasien_f3");
        var ctx = canvas.getContext("2d");
        var image = new Image();
        image.onload = function() {
        ctx.drawImage(image, 0, 0);
        };
        image.src = v1;
    }
    function get8(){
        var v1 = $("#temp8").val();
        var canvas = document.getElementById("ttd_saksi_f4");
        var ctx = canvas.getContext("2d");
        var image = new Image();
        image.onload = function() {
        ctx.drawImage(image, 0, 0);
        };
        image.src = v1;
    }
    function get9(){
        var v1 = $("#temp9").val();
        var canvas = document.getElementById("ttd_pasien_f4");
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
    function reset3(){
        hapusttd3();
        get3();
        hit3();
    }
    function reset4(){
        hapusttd4();
        get4();
        hit4();
    }
    function reset5(){
        hapusttd5();
        get5();
        hit5();
    }
    function reset6(){
        hapusttd6();
        get6();
        hit6();
    }
    function reset7(){
        hapusttd7();
        get7();
        hit7();
    }
    function reset8(){
        hapusttd8();
        get8();
        hit8();
    }
    function reset9(){
        hapusttd9();
        get9();
        hit9();
    }

    function hit(){
        new SignaturePad(document.getElementById('ttd1'));
    }
    function hit2(){
        new SignaturePad(document.getElementById('ttd2'));
    }
    function hit3(){
        new SignaturePad(document.getElementById('ttd_wali'));
    }
    function hit4(){
        new SignaturePad(document.getElementById('ttd_wali2'));
    }
    function hit5(){
        new SignaturePad(document.getElementById('ttd_saksi'));
    }
    function hit6(){
        new SignaturePad(document.getElementById('ttd_saksi_f3'));
    }
    function hit7(){
        new SignaturePad(document.getElementById('ttd_pasien_f3'));
    }
    function hit8(){
        new SignaturePad(document.getElementById('ttd_saksi_f4'));
    }
    function hit9(){
        new SignaturePad(document.getElementById('ttd_pasien_f4'));
    }

</script>

<script>

function updatedata() {
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
                v64: v64,

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
    function hapusttd1() {
        var ttd1 = document.getElementById('ttd1');
        var isi = ttd1.getContext('2d');
        isi.clearRect(0, 0, ttd1.width, ttd1.height);
    }
    function hapusttd2() {
        var ttd1 = document.getElementById('ttd2');
        var isi = ttd1.getContext('2d');
        isi.clearRect(0, 0, ttd1.width, ttd1.height);
    }
    function hapusttd3() {
        var ttd1 = document.getElementById('ttd_wali');
        var isi = ttd1.getContext('2d');
        isi.clearRect(0, 0, ttd1.width, ttd1.height);
    }
    function hapusttd4() {
        var ttd1 = document.getElementById('ttd_wali2');
        var isi = ttd1.getContext('2d');
        isi.clearRect(0, 0, ttd1.width, ttd1.height);
    }
    function hapusttd5() {
        var ttd1 = document.getElementById('ttd_saksi');
        var isi = ttd1.getContext('2d');
        isi.clearRect(0, 0, ttd1.width, ttd1.height);
    }
    function hapusttd6() {
        var ttd1 = document.getElementById('ttd_saksi_f3');
        var isi = ttd1.getContext('2d');
        isi.clearRect(0, 0, ttd1.width, ttd1.height);
    }
    function hapusttd7() {
        var ttd1 = document.getElementById('ttd_pasien_f3');
        var isi = ttd1.getContext('2d');
        isi.clearRect(0, 0, ttd1.width, ttd1.height);
    }
    function hapusttd8() {
        var ttd1 = document.getElementById('ttd_saksi_f4');
        var isi = ttd1.getContext('2d');
        isi.clearRect(0, 0, ttd1.width, ttd1.height);
    }
    function hapusttd9() {
        var ttd1 = document.getElementById('ttd_pasien_f4');
        var isi = ttd1.getContext('2d');
        isi.clearRect(0, 0, ttd1.width, ttd1.height);
    }
</script>

<script>
    $(function () {
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