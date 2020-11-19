<div class="row">
   <div class="col-sm-12">
      <p><strong>
            <center>SURAT KETERANGAN SANGGUP MEMBAYAR</center>
         </strong></p>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <p>yang bertanda tangan dibawah ini :</p>
      <div class="form-group">
         <label for="">Nama</label>
         <input type="text" class="form-control" name="nm_dpn_pj_f4" id="nm_dpn_pj_f4" value="<?= $k->namakeluarga ?>"
            aria-describedby="helpId" placeholder="nama">
      </div>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <div class="form-group">
         <label for="">Tanggal lahir</label>
         <input type="date" class="form-control" name="tgl_pj_f4" id="tgl_pj_f4" value="" aria-describedby="helpId"
            placeholder="">
      </div>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <div class="form-group">
         <label for="">Alamat</label>
         <input type="text" class="form-control" name="alamat_pj_f4" id="alamat_pj_f4" value=""
            aria-describedby="helpId" placeholder="alamat">
      </div>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <div class="form-group">
         <label for="">hubungan dengan pasien</label>
         <input type="text" class="form-control" name="hub_pj_f4" id="hub_pj_f4" value="<?= $k->keluarga ?>" aria-describedby="helpId"
            placeholder="hubungan dengan pasien">
      </div>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <p>Sanggup untuk membayar biaya operasi / perawatan / pengobatan untuk
         <div class="col-sm-4">
            <input type="text" class="form-control" name="nm_pasien_f4" id="nm_pasien_f4" value="<?= $k->nm_pasien ?>" disabled></br>
         </div>
         selama pasien dirawat di Rumah Sakit Pelengkap medical Center kurang
         lebih dari perkiraan biaya </br>
      </p>
      <div class="form-group">
         <input type="text" class="form-control" name="perkiraan_biaya" id="perkiraan_biaya" value=""
            aria-describedby="helpId" placeholder="perkiraan biaya">
      </div>
      <p>Jika selama operasi / perawatan timbul komplikasi dan memerlukan
         pengobatan / tindakan yang diperlukan, maka kami selaku pasien yang
         tersebut di atas sanggup untuk membayar biaya tambahan yang
         diperlukan.</br></br>
         Keterangan Cara Pembayaran :</br></br>
         Pembayaran biaya operasi / perawatan / pengobatan akan dilakukan melalui
         pembayaran ... <?php //echo $u->cara_pembayaran ?> ...
      </p>
      dengan disetuji form persetujuan cara pembayaran biaya selama pengobatan di
      Rumah Sakit Pelengkap Medical Center :</br>
      1. Diharapkan pasien dan keluarga pasien mengikuti prosedur pembayaran yang
      ada pada Rumah Sakit Pelengkap Medical Center.</br>
      2. Pasien tidak dapat mengubah cara pembayaran pada saat akhir pelayanan
      perawatan.</br>
      3. Cara pembayaran biaya perawatan / pengobatan dilakukan sesuai formulir
      keterangan cara pembayaran pada
      awal pasien mendaftar ke admisi dan pendaftaran.
   </div>
</div>
</br>
<div class="row">
   <div class="col-sm-12">
      <center>Jombang <?php echo date("d - M - Y");?></center>
   </div>
</div>
<div class="row">
   <div class="col-sm-6">
      <center>
         <label for="">Saksi</label></br>
         <canvas id="ttd_saksi_f4" class="efekttd" style="width: 300px;"></canvas><br>
         <button type="button" class="btn btn-danger" onclick="hapusttd8()">Reset</button>
      </center>
   </div>
   <div class="col-sm-6">
      <center>
         <label for="">Pasien / Wali</label></br>
         <canvas id="ttd_pasien_f4" class="efekttd" style="width: 300px;"></canvas><br>
         <button type="button" class="btn btn-danger" onclick="hapusttd9()">Reset</button>
      </center>
   </div>
</div>
<div class="row">
   <div class="col-10">
   </div>
   <div class="col-2" style="margin-top: 31px;">
      </br>
      <button type="button" class="btn btn-success" onclick="simpandata()">Simpan Form</button>
   </div>
</div>

