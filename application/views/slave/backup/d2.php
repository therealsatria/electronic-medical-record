<div class="col-sm-12">
    <p class=""><small>
            Lembaran hak kuasa ini harus ditanda tangani oleh pasien sendiri atau wali (keluarga terdekat / kawan /
            induk semang / dan lain - lain) bagi pasien yang :</br>
            a. Secara fisik / mental dinyatakan tidak sanggup mengisi</br>
            b. Pasien masih dibawah umur
        </small></p>
    <p><strong>PERSETUJUAN RAWAT INAP</strong></p>
    <p class=""><small>
            Saya yang bertanda tangan di bawa ini adalah pasien Rumah Sakit Pelengkap Medical Center dengan ini setuju
            untuk dirawat inap dan mengizinkan
            dokter manapun yang ditunjuk untuk melakukan berbagai cara pengobatan yang dianggap perlu dan penting.
        </small></p>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="">Nama Jelas Wali</label>
            <input type="text" class="form-control" name="nm_dpn_pj_f2" id="nm_dpn_pj_f2" value="<?= $k->namakeluarga ?>" aria-describedby="helpId" placeholder="nama wali">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="">Nama Pasien</label>
            <input type="text" class="form-control" name="nm_pasien_f2" id="nm_pasien_f2" value="<?= $k->nm_pasien ?>" aria-describedby="helpId" placeholder="nama pasien">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="">Saksi</label>
            <input type="text" class="form-control" name="nm_saksi" id="nm_saksi" value="" aria-describedby="helpId" placeholder="petugas admisi">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <label for="">Tanda Tangan</label></br>
        <canvas id="ttd_wali" class="efekttd" style="width: 300px;"></canvas><br>
		<button type="button" class="btn btn-danger" onclick="hapusttd3()">Reset</button>
    </div>
</div></br>

<div class="col-sm-12">
    <p><strong>KETENTUAN BAGI WALI</strong></p>
    <p class=""><small>
            Saya yang bertanda tangan di bawa ini adalah wali pasien menyatakan
            bersedia :</br>
            - Untuk sewaktu-waktu dihubungi bila keadaan pasien kritis.</br>
            - Bila pasien meninggal dunia, jenazah akan saya ambil sesudah 2 jam
            dari saat meninggal dunia dengan
            membawa surat keterangan kematian dari pihak Rumah Sakit Pelengkap
            Medical Center. Jenazah tidak diambil
            keluarga dalam tempo 24 jam akan diurus oleh pihak Rumah Sakit Pelengkap
            Medical Center
            <strong>(Khusus Pasien Meninggal)</strong></br>
            - Saya bersedia untuk mengganti / mematuhi segala peraturan yang berlaku
            di Rumah Sakit Pelengkap Medical Center.</br>
            - Ketentuan lain yang belum tercantum di dalam lembaran ini dapat
            ditambahkan bilamana diperlukan Rumah Sakit Pelengkap Medical Center.
        </small></p>

    <div class="row">
        <div class="col-sm-6">
            Jombang, <?php echo date("d - M - Y");?>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-sm-6">
            <label for="">Wali</label></br>
            <canvas id="ttd_wali2" class="efekttd" style="width: 300px;"></canvas><br>
		    <button type="button" class="btn btn-danger" onclick="hapusttd4()">Reset</button>
        </div>
        <div class="col-sm-6">
            <label for="">Saksi</label></br>
            <canvas id="ttd_saksi" class="efekttd" style="width: 300px;"></canvas><br>
		    <button type="button" class="btn btn-danger" onclick="hapusttd5()">Reset</button>
        </div>
    </div>

</div>