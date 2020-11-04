<html>
<head>
<style>
      tds {
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
         <td colspan='6'>
            <table width='100%' align='left' border='0' cellspacing='0' cell>
               <tr>
               <td width='20%' align='center'> <img class="logoimg" src="<?= base_url('assets/dist/img/pmc.jpg'); ?>"> </td>
                        <td>
                     <center>
                        <font color='000000' face='Lucida Console'>RS Pelengkap Medical Center</font> <br>
                        <font color='000000' face='Lucida Console'> Jl. Ir. Juanda No. 03, Jombang, Jawa Timur<br />
                           Telp. 877945, E-mail : rspmcjombang@ymail.com </font>
                     </center>
                  </td>
                  <td width='20%' align='center'> <b color='000000' size='3' face='Tahoma'>FORM RM.02A
                        <br>---------------------<br><?= $no_rm; ?></b></td>
               </tr>
            </table>
         </td>
      </tr>
      <!-- ========= HEADER HALAMAN ====================================================================================== -->
      <tr>
         <td colspan="6">
            <hr />
            <p class="">
                  Lembaran hak kuasa ini harus ditanda tangani oleh pasien sendiri atau wali (keluarga terdekat / kawan
                  /
                  induk semang / dan lain - lain) bagi pasien yang :<br>
                  a. Secara fisik / mental dinyatakan tidak sanggup mengisi<br>
                  b. Pasien masih dibawah umur
               </p><br>
            <p size='3' face='Tahoma'><strong>PERSETUJUAN RAWAT INAP</strong></p><br>
            <p class="">anda tangan di bawa ini adalah pasien Rumah Sakit Pelengkap Medical Center dengan ini
                  setuju
                  untuk dirawat inap dan mengizinkan
                  dokter manapun yang ditunjuk untuk melakukan berbagai cara pengobatan yang dianggap perlu dan penting.
               </p>
         </td>
      </tr>
      <?php foreach($rm as $n){ ?>
      <tr>
         <td>Nama Jelas Wali</td>
         <td>:</td>
         <td><?php echo $n->nama_pj; ?></td>
         <td></td>
         <td></td>

      </tr>
      <tr>
         <td>Nama Pasien</td>
         <td>:</td>
         <td><?php echo $n->nama_lengkap; ?></td>
         <td></td>
         <td></td>

      </tr>
      <tr>
         <td>Saksi</td>
         <td>:</td>
         <td><?php echo $n->nama_saksi; ?></td>
         <td></td>
         <td></td>

      <tr>

         <td>
            </br>Tanda Tangan</td>
      </tr>
      <tr>
         <td colspan="2"><img
               src="<?php echo $n->ttd_wali; ?>">
         </td>
      </tr>
      <tr>
         <td colspan='6'>
            <br><b size='3' face='Tahoma'>KETENTUAN BAGI WALI</b><br></td>
      </tr>
      <tr>
         <td colspan="6">
            <p class="">
                  Saya yang bertanda tangan di bawa ini adalah wali pasien menyatakan
                  bersedia :<br>
                  - Untuk sewaktu-waktu dihubungi bila keadaan pasien kritis.<br>
                  - Bila pasien meninggal dunia, jenazah akan saya ambil sesudah 2 jam
                  dari saat meninggal dunia dengan
                  membawa surat keterangan kematian dari pihak Rumah Sakit Pelengkap
                  Medical Center. Jenazah tidak diambil
                  keluarga dalam tempo 24 jam akan diurus oleh pihak Rumah Sakit Pelengkap
                  Medical Center
                  <strong>(Khusus Pasien Meninggal)</strong><br>
                  - Saya bersedia untuk mengganti / mematuhi segala peraturan yang berlaku
                  di Rumah Sakit Pelengkap Medical Center.<br>
                  - Ketentuan lain yang belum tercantum di dalam lembaran ini dapat
                  ditambahkan bilamana diperlukan Rumah Sakit Pelengkap Medical Center.
               </p>
         </td>
      </tr>
      <tr>
      <td colspan="2"></td>   
      <td colspan="1"  align="center"><?php echo $n->tgl_msuk; ?></td>
      <td colspan="2"></td>
      </tr>     
      <tr>
         <td colspan="2"  align="center"><br> Wali</td>
         <td colspan="1"></td>
         <td colspan="2"  align="center"><br> Saksi</td>
      </tr>
      <tr>
         <td colspan="2"><img
               src="<?php echo $n->ttd_wali2; ?>">
         </td>
         <td colspan="1"></td>
         <td colspan="2"><img
               src="<?php echo $n->ttd_saksi; ?>">
         </td>
      </tr>
   </table>
   <?php } ?>
</body>
</html>