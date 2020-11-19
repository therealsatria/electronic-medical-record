<!-- ================================= -->
<div class="row">
	<div class="col-sm-12">
		<label>IDENTITAS PASIEN (bagian ini harus diisi lengkap)</label>
	</div>
</div>
<!-- ================================= -->

<div class="row">
	<div class="col-sm-3">
		<div class="form-group">
			<label for="">No RM</label>
			<!-- ### -->
			<input type="text" class="form-control" name="no_rm" id="no_rm" value="" aria-describedby="helpId"
				placeholder="rekam medis">
		</div>
	</div>
	<div class="col-sm-5">
		<div class="form-group">
			<label for="">Nama Lengkap</label>
			<!-- ### -->
			<input type="text" class="form-control" name="nm_pasien" id="nm_pasien" value="" aria-describedby="helpId"
				placeholder="nama lengkap">
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label for="">Gol Darah</label>
			<!-- ### -->
			<select class="form-control" name="gol_drh" id="gol_drh">
				<?php
						foreach ($gd as $v2) {
						echo "<option>" .$v2."</option>";
						} ?>
			</select>
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label for="">JK</label>
			<!-- ### -->
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
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Tempat Lahir</label>
			<!-- ### -->
			<input type="text" class="form-control" name="tmpt_lhr" id="tmpt_lhr" value="" aria-describedby="helpId"
				placeholder="tempat lahir">
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Tanggal Lahir</label>
			<!-- ### -->
			<input type="date" class="form-control" name="tgl_lhr" id="tgl_lhr" value="" aria-describedby="helpId"
				placeholder="">
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Agama</label>
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
</div>
<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">No KTP</label>
			<!-- ### -->
			<input type="text" class="form-control" name="no_ktp" id="no_ktp" value="" aria-describedby="helpId"
				placeholder="no ktp">
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Nama Ibu</label>
			<!-- ### -->
			<input type="text" class="form-control" name="nm_ibu" id="nm_ibu" value="" aria-describedby="helpId"
				placeholder="nama ibu">
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Status Nikah</label>
			<!-- ### -->
			<select class="form-control" name="stts_nikah" id="stts_nikah">
				<?php	foreach ($sn as $v3) { echo "<option>" .$v3."</option>";	} ?>
			</select>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-8">
		<div class="form-group">
			<label for="">Alamat Rumah (Sesuai KTP)</label>
			<!-- ### -->
			<textarea class="form-control" name="alamat" id="alamat" value="" rows="3"
				placeholder="alamat lengkap sesuai ktp"></textarea>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control" name="email" id="email" value="" aria-describedby="helpId"
				placeholder="email">
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<label for="">No Telp</label>
					<input type="text" class="form-control" name="tlp" id="tlp" value="" aria-describedby="helpId"
						placeholder="no telp">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="">Pendidikan Terakhir</label>
			<select class="form-control" name="pnd" id="pnd">
				<?php
										foreach ($pnd as $v4) {
											echo "<option>" .$v4."</option>";
										} ?>
			</select>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label for="">Pekerjaan</label>
			<!-- ### -->
			<input type="text" class="form-control" name="pkrjn" id="pkrjn" value="" aria-describedby="helpId"
				placeholder="pekerjaan">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="">Alamat Kantor</label>
			<input type="text" class="form-control" name="almt_kntr" id="almt_kntr" value="" aria-describedby="helpId"
				placeholder="alamat kantor">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label for="">Warga Negara</label>
			<input type="text" class="form-control" name="wrga_neg" id="wrga_neg" value="" aria-describedby="helpId"
				placeholder="warga negara">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<label>Pasien pernah dirawat di RS Pelengkap,</label>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<div class="input-group-text">
					<input type="checkbox">
				</div>
			</div>
			<input type="date" name="tgl_prnh_drwt" id="tgl_prnh_drwt" value="" class="form-control"
				placeholder="Some text">
		</div>
	</div>
</div>

<!-- ================================= -->
<div class="row">
	<div class="col-sm-12">
		<br>
		<label>IDENTITAS PENANGGUNG JAWAB (bagian ini mohon diisi penanggung jawab)</label>
	</div>
</div>
<!-- ================================= -->

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="">Nama Lengkap</label>
			<input type="text" class="form-control" name="nm_dpn_pj" id="nm_dpn_pj" value="" aria-describedby="helpId"
				placeholder="nama lengkap">
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label for="">Golongan Darah</label>
			<select class="form-control" name="gol_drh_pj" id="gol_drh_pj">
				<option selected>O</option>
				<option>A</option>
				<option>B</option>
				<option>AB</option>
			</select>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Jenis Kelamin</label>
			<select class="form-control" name="jk_pj" id="jk_pj">
				<option selected>Laki - Laki</option>
				<option>Perempuan</option>
			</select>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Tempat Lahir</label>
			<input type="text" class="form-control" name="tmp_lhr_pj" id="tmp_lhr_pj" value="" aria-describedby="helpId"
				placeholder="tempat lahir">
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Tanggal Lahir</label>
			<input type="date" class="form-control" name="tgl_pj" id="tgl_pj" value="<? echo date('m / d / Y'); ?>"
				aria-describedby="helpId" placeholder="">
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Agama</label>
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
	<div class="col-sm-8">
		<div class="form-group">
			<label for="">Alamat Rumah (Sesuai KTP)</label>
			<textarea class="form-control" name="alamat_pj" id="alamat_pj" value="" rows="3"
				placeholder="alamat lengkap sesuai ktp"></textarea>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control" name="email_pj" id="email_pj" value="" aria-describedby="helpId"
				placeholder="email">
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<label for="">No Telp</label>
					<input type="text" class="form-control" name="tlp_pj" id="tlp_pj" value="" aria-describedby="helpId"
						placeholder="no telp">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="">Pendidikan Terakhir</label>
			<select class="form-control" name="pnd_pj" id="pnd_pj">
				<option selected>-</option>
				<option>TS</option>
				<option>TK</option>
				<option>SD</option>
				<option>SMP</option>
				<option>SMA</option>
				<option>SLTA/SEDERAJAT</option>
				<option>D1</option>
				<option>D2</option>
				<option>D3</option>
				<option>D4</option>
				<option>S1</option>
				<option>S2</option>
				<option>S3</option>
			</select>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label for="">Pekerjaan</label>
			<input type="text" class="form-control" name="pkrjn_pj" id="pkrjn_pj" value="" aria-describedby="helpId"
				placeholder="pekerjaan">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="">Alamat Kantor</label>
			<input type="text" class="form-control" name="alamat_kntr_pj" id="alamat_kntr_pj" value=""
				aria-describedby="helpId" placeholder="alamat kantor">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label for="">Warga Negara</label>
			<input type="text" class="form-control" name="wrga_neg_pj" id="wrga_neg_pj" value="" aria-describedby="helpId"
				placeholder="warga negara">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="form-group">
			<label for="">Hubungan dengan pasien sebagai</label>
			<select class="form-control" name="hub_pj" id="hub_pj">
				<?php
										foreach ($kl as $v5) {
											echo "<option>" .$v5."</option>";
										} ?>
			</select>
		</div>
	</div>
</div>

<!-- ================================= -->
<div class="row">
	<div class="col-sm-12">
		<br>
		<label>KELAS PERAWATAN YANG DIMINTA (bagian ini diisi admission)</label>
	</div>
</div>
<!-- ================================= -->

<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Kelas Perawatan</label>
			<select class="form-control" name="kls_perwtn" id="kls_perwtn">
				<option>Kelas I</option>
				<option>Kelas II</option>
				<option>Kelas III</option>
				<option>Kelas VIP</option>
				<option>Kelas VVIP</option>
			</select>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Kamar</label>
			<input type="text" class="form-control" name="kmr" id="kmr" value="" aria-describedby="helpId"
				placeholder="kamar">
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Lantai</label>
			<input type="text" class="form-control" name="lntai" id="lntai" value="" aria-describedby="helpId"
				placeholder="lantai">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
		<div class="form-group">
			<label for="">Tanggal Daftar</label>
			<input type="date" class="form-control" name="tgl_msk" id="tgl_msk" value="<?= date("Y-m-d"); ?>"
				aria-describedby="helpId" placeholder="">
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label for="">Jam</label>
			<input type="text" class="form-control" name="jam" id="jam" value=" <?= date("h:i"); ?> "
				aria-describedby="helpId" placeholder="">
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">Dokter Pengirim</label>
			<input type="text" class="form-control" name="dr_pngrim" id="dr_pngrim" value="" aria-describedby="helpId"
				placeholder="">
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="">DPJP</label>
			<input type="text" class="form-control" name="dpjp" id="dpjp" value="" aria-describedby="helpId"
				placeholder="">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
		<label>Asal Pasien (pilih salah satu)</label>
		<div class="form-check">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="asalpasien" id="asalpasien" value="UGD">
				UGD
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="asalpasien" id="asalpasien" value="IRJA">
				IRJA
			</label>
		</div>
	</div>
	<div class="col-sm-4">
		<label>Jaminan Kesehatan</label>
		<div class="form-check">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="jamkes" id="jamkes" value="GAKIN SKTM">
				GAKIN SKTM
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="jamkes" id="jamkes" value="ASKES">
				ASKES
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="jamkes" id="jamkes" value="JAMSOSTEK">
				JAMSOSTEK
			</label>
		</div>
		<div class="input-group mb-1">
			<div class="input-group-prepend">
				<div class="input-group-text">
					<input type="radio" name="jamkes">
				</div>
			</div>
			<input type="text" name="jamkes" class="form-control" placeholder="lainnya">
		</div>
	</div>
	<div class="col-sm-5">
		<label>Rujukan :</label>
		<div class="form-group">
			<input type="text" class="form-control" name="rujukan" id="rujukan" value="" aria-describedby="helpId"
				placeholder="Jenis Rujukan">
		</div>

	</div>
</div>
</br>
<div class="row">
	<div class="col-sm-3">
		<label for="">Cara Pembayaran</label>
	</div>

	<div class="col-sm-2">
		<div class="form-group">
			<label for="">Cara Bayar</label>
			<select name="kd_pj" id="kd_pj">
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
	<div class="col-sm-3">
		<label for="">Kode Perusahaan / Asuransi</label>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<input type="text" class="form-control" name="kode_perusahaan" id="kode_perusahaan" value=""
				aria-describedby="helpId" placeholder="">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
		<label for="">Surat Jaminan</label>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="surat_jminan" id="surat_jminan" value="YA">
				YA
			</label>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<label class="form-check-label">
				<input checked type="radio" class="form-check-input" name="surat_jminan" id="surat_jminan" value="TIDAK">
				TIDAK
			</label>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
		<label for="">Surat Surat Rujukan</label>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="surat_rujukan" id="surat_rujukan" value="YA">
				YA
			</label>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<label class="form-check-label">
				<input checked type="radio" class="form-check-input" name="surat_rujukan" id="surat_rujukan" value="TIDAK">
				TIDAK
			</label>
		</div>
	</div>
</div>

<!-- ================================= -->
<div class="row">
	<div class="col-sm-12">
		<br>
		<label>SURAT PERNYATAAN PERSETJUAN RUMAH SAKIT DAN HAK PASIEN)</label>
	</div>
</div>
<!-- ================================= -->

<div class="row">

	<div class="col-sm-5">
		<label for="">1. Saya sudah membaca, mengerti dan menyetujui "Peraturan
			Rawat Inap / One Day Care"</label>
		<div class="form-check">
			<label class="form-check-label">
				<input type="checkbox" name="acc1" id="acc1" class="form-check-input" value="Accepted">Accept
			</label>
		</div>
	</div>

	<div class="col-sm-5">
		<label for="">Tanda Tangan Penanggung Jawab / Pasien</label></br>
		<canvas id="ttd1" class="efekttd" style="width: 300px;"></canvas><br>
		<button type="button" class="btn btn-danger" onclick="hapusttd1()">Reset</button>
	</div>
</div>

<div class="row">

	<div class="col-sm-5">.
		<label for="">2. Saya sudah membaca, mengerti dan menyetujui "Hak dan
			kewajiban Rawat Inap / One Day Care"</label>
		<div class="form-check">
			<label class="form-check-label">
				<input type="checkbox" name="acc2" id="acc2" class="form-check-input" value="Accepted">Accept
			</label>
		</div>
	</div>

	<div class="col-sm-5">
		<label for="">Tanda Tangan Petugas Admission</label></br>
		<canvas id="ttd2" class="efekttd" style="width: 300px;"></canvas><br>
		<button type="button" class="btn btn-danger" onclick="hapusttd2()">Reset</button>
	</div>
</div>
