<html>
<head>
   <style>
      tdx {
         border: 1px solid;
      }
      td {
         padding: 4px;
         font-family: "Times New Roman", Times, serif;
      }
      .logoimg {
         max-width: 15%;
         height: auto;
      }
      body {
         color: 000000;
      }
      
   </style>
         
</head>
<body>
   <table width='' align='left' border='0' cellspacing='0' cell>
      <tr>
         <td colspan='9'>
            <table width='100%' align='left' border='0' cellspacing='0' cell>
               <tr>
               <td width='20%' align='center'> <img class="logoimg" src="<?= base_url('assets/dist/img/pmc.jpg'); ?>"> </td>
                        <td>
                     <center>
                        <font color='000000' face='Lucida Console'>RS Pelengkap Medical Center</font> <br>
                        <font color='000000' face='Lucida Console'> Jl. Ir. Juanda No. 03, Jombang, Jawa
                           Timur<br />
                           Telp. 877945, E-mail : rspmcjombang@ymail.com </font>
                     </center>
                  </td>
                  <td width='20%' align='center'> <b color='000000' size='3' >FORM RM.01
                        <br>------------------<br><?= $no_rm; ?></b></td>
               </tr>
            </table>
         </td>
      </tr>

      <tr>
         <td colspan='9'>
            <hr /><b color='000000' size='3' face='Tahoma'>IDENTITAS PASIEN</b><br></td>
      </tr>
      <?php foreach($rm as $n){ ?>
      <tr>
         <td>No RM</td>
         <td>:</td>
         <td><?php echo $n->no_rm; ?></td>
         <td>Nama Lengkap</td>
         <td>:</td>
         <td><?php echo $n->nama_lengkap; ?></td>
         <td>Jenis Kelamin</td>
         <td>:</td>
         <td><?php echo $n->jk; ?></td>
      </tr>
      <tr>
         <td>Tempat Lahir</td>
         <td>:</td>
         <td><?php echo $n->tmpt_lhr; ?></td>
         <td>Tanggal Lahir</td>
         <td>:</td>
         <td><?php echo $n->tgl_lhr; ?></td>
         <td>Gol Darah</td>
         <td>:</td>
         <td><?php echo $n->gol_darah; ?></td>
      </tr>
      <tr>
         <td>Alamat Rumah</td>
         <td>:</td>
         <td><?php echo $n->alamat; ?></td>
         <td>Agama</td>
         <td>:</td>
         <td><?php echo $n->agama; ?></td>
         <td>Email</td>
         <td>:</td>
         <td><?php echo $n->email; ?></td>
      </tr>
      <tr>
         <td>Pendidikan</td>
         <td>:</td>
         <td><?php echo $n->pendidikan; ?></td>
         <td>Pekerjaan</td>
         <td>:</td>
         <td><?php echo $n->pekerjaan; ?></td>
         <td>No Telp</td>
         <td>:</td>
         <td><?php echo $n->tlp; ?></td>
      </tr>
      <tr>
         <td>Alamat Kantor</td>
         <td>:</td>
         <td><?php echo $n->alamat_kantor; ?></td>
         <td>Warga Negara</td>
         <td>:</td>
         <td><?php echo $n->warga_negara; ?></td>
         <td>Pernah dirawat Tgl</td>
         <td>:</td>
         <td><?php echo $n->tgl_pernh_dirawat; ?></td>
      </tr>
      <tr>
         <td colspan='9'>
            <hr /><b color='000000' size='3' face='Tahoma'>IDENTITAS PENANGGUNG JAWAB PASIEN</b><br></td>
      </tr>
      <tr>
         <td>Nama Lengkap</td>
         <td>:</td>
         <td><?php echo $n->nama_pj; ?></td>
         <td>Jenis Kelamin</td>
         <td>:</td>
         <td><?php echo $n->jk_pj; ?></td>
         <td>Hubungan Sebagai</td>
         <td>:</td>
         <td><?php echo $n->hub_pasien; ?></td>
      </tr>
      <tr>
         <td>Tempat Lahir</td>
         <td>:</td>
         <td><?php echo $n->tmp_lhr_pj; ?></td>
         <td>Tanggal Lahir</td>
         <td>:</td>
         <td><?php echo $n->tgl_lhr_pj; ?></td>
         <td>Gol Darah</td>
         <td>:</td>
         <td><?php echo $n->gd_pj; ?></td>
      </tr>
      <tr>
         <td>Alamat Rumah</td>
         <td>:</td>
         <td><?php echo $n->alamat_pj; ?></td>
         <td>Agama</td>
         <td>:</td>
         <td><?php echo $n->agama_pj; ?></td>
         <td>Email</td>
         <td>:</td>
         <td><?php echo $n->email_pj; ?></td>
      </tr>
      <tr>
         <td>Pendidikan</td>
         <td>:</td>
         <td><?php echo $n->pendidikan_pj; ?></td>
         <td>Pekerjaan</td>
         <td>:</td>
         <td><?php echo $n->pekerjaan_pj; ?></td>
         <td>No Telp</td>
         <td>:</td>
         <td><?php echo $n->tlp_pj; ?></td>
      </tr>
      <tr>
         <td>Alamat Kantor</td>
         <td>:</td>
         <td><?php echo $n->alamat_kntor_pj; ?></td>
         <td>Warga Negara</td>
         <td>:</td>
         <td><?php echo $n->warga_negara_pj; ?></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
      <tr>
         <td colspan='9'>
            <hr /><b color='000000' size='3' face='Tahoma'>KELAS PERAWATAN YANG DIMINTA</b><br></td>
      </tr>
      <tr>
         <td>Kelas Perawatan</td>
         <td>:</td>
         <td><?php echo $n->kelas_perawatan; ?></td>
         <td>Kamar</td>
         <td>:</td>
         <td><?php echo $n->kamar; ?></td>
         <td>Lantai</td>
         <td>:</td>
         <td><?php echo $n->lantai; ?></td>
      </tr>
      <tr>
         <td>Tanggal Daftar</td>
         <td>:</td>
         <td><?php echo $n->tgl_msuk; ?></td>
         <td>Jam</td>
         <td>:</td>
         <td><?php echo $n->jam; ?></td>
         <td>Dokter Pengirim</td>
         <td>:</td>
         <td><?php echo $n->dr_pengirim; ?></td>
      </tr>
      <tr>
         <td>DPJP</td>
         <td>:</td>
         <td><?php echo $n->dpjp; ?></td>
         <td>Asal Pasien</td>
         <td>:</td>
         <td><?php echo $n->asal_pasien; ?></td>
         <td>Jaminan Kesehatan</td>
         <td>:</td>
         <td><?php echo $n->jamkes; ?></td>
      </tr>
      <tr>
         <td>Rujukan</td>
         <td>:</td>
         <td><?php echo $n->rujukan; ?></td>
         <td>Cara Bayar</td>
         <td>:</td>
         <td><?php echo $n->cara_pembayaran; ?></td>
         <td>Asuransi</td>
         <td>:</td>
         <td><?php echo $n->kode_asuransi; ?></td>
      </tr>
      <tr>
         <td>Surat Jaminan</td>
         <td>:</td>
         <td><?php echo $n->surat_jaminan; ?></td>
         <td>Surat Rujukan</td>
         <td>:</td>
         <td>surat_rujukan</td>
      </tr>
      <tr>
         <td colspan='9'>
            <hr /><b color='000000' size='3' face='Tahoma'>SURAT PERNYATAAN PERSETUJUAN RUMAH SAKIT DAN HAK
               PASIEN</b><br></td>
      </tr>
      <tr>
         <td colspan="3">Penanggung Jawab</td>
         <td colspan="3"></td>
         <td colspan="3">Petugas Admisi</td>

      </tr>
      <!-- <tr>
         <td colspan="3">ttd 1</td>
         <td colspan="3"></td>
         <td colspan="3">ttd 2</td>
      </tr> -->
      <tr>
         <td colspan="3"><img
               src="<?php echo $n->ttd_acc1; ?>">
         </td>
         <td colspan="3"></td>
         <td colspan="3"><img
               src="<?php echo $n->ttd_acc2; ?>">
         </td>
      </tr>
   </table>
      <?php } ?>
</body>
</html>