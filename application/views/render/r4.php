<html>

<head>
   <style>
      tdx {
         border: 1px solid;
         font-family: "Times New Roman", Times, serif;
      }
      td {
         padding: 4px;
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
                              <font color='000000' face='Lucida Console'> Jl. Ir. Juanda No. 03, Jombang, Jawa
                                 Timur<br />
                                 Telp. 877945, E-mail : rspmcjombang@ymail.com </font>
                           </center>
                        </td>
                        <td width='20%' align='center'> <b color='000000' size='3' face='Tahoma'>FORM RM.03A
                              <br>---------------------<br><?= $no_rm; ?></b></td>
                     </tr>
                  </table>
               </td>
            </tr>
            <!-- ========= HEADER HALAMAN ====================================================================================== -->
            <tr>
               <td colspan="6">
                  <hr />
                  <center><b size='3' face='Tahoma'>SURAT KETERANGAN SANGGUP MEMBAYAR</b></center>
               </td>
            </tr>
            <tr>
               <td colspan="6">
                  <p>yang bertanda tangan dibawah ini :</p>
               </td>
            </tr>
            <?php foreach($rm as $n){ ?>
            <tr>
               <td>Nama</td>
               <td>:</td>
               <td><?php echo $n->nama_pj; ?></td>
               <td></td>
               <td></td>
               <td></td>
            </tr>
            <tr>
               <td>Tanggal Lahir</td>
               <td>:</td>
               <td><?php echo $n->tgl_lhr_pj; ?></td>
               <td></td>
               <td></td>
               <td></td>
            </tr>
            <tr>
               <td>Alamat</td>
               <td>:</td>
               <td><?php echo $n->alamat_pj; ?></td>
               <td></td>
               <td></td>
               <td></td>
            </tr>
            <tr>
               <td>Hubungan dengan Pasien</td>
               <td>:</td>
               <td><?php echo $n->hub_pasien; ?></td>
               <td></td>
               <td></td>
               <td></td>
            </tr>
            <tr>
               <td colspan="6">
                  <br>
                  <p>Sanggup untuk membayar biaya operasi / perawatan / pengobatan untuk <?php echo $n->nama_lengkap; ?> selama
                     pasien
                     dirawat di Rumah Sakit Pelengkap medical Center kurang lebih dari perkiraan biaya </p>
               </td>
            </tr>
            <tr>
               <td colspan="6">
                  <p><?php echo $n->perkiraan_biaya; ?></p>
               </td>
            </tr>
            <tr>
               <td colspan="6">
                  <p>Jika selama operasi / perawatan timbul komplikasi dan memerlukan pengobatan / tindakan yang
                     diperlukan,
                     maka kami selaku pasien yang tersebut di atas sanggup untuk membayar biaya tambahan yang
                     diperlukan.
                     <br><br>
                     Keterangan Cara Pembayaran :
                     <br><br>
                     Pembayaran biaya operasi / perawatan / pengobatan akan dilakukan melalui pembayaran ... ...
                     dengan disetuji form persetujuan cara pembayaran biaya selama pengobatan di Rumah Sakit Pelengkap
                     Medical
                     Center : <br>
                     1. Diharapkan pasien dan keluarga pasien mengikuti prosedur pembayaran yang ada pada Rumah Sakit
                     Pelengkap Medical Center. <br>
                     2. Pasien tidak dapat mengubah cara pembayaran pada saat akhir pelayanan perawatan. <br>
                     3. Cara pembayaran biaya perawatan / pengobatan dilakukan sesuai formulir keterangan cara
                     pembayaran pada
                     awal pasien mendaftar ke admisi dan pendaftaran. </p>
               </td>
            </tr>
            <tr>
               <td colspan='6' align="center">
                  <p size='3' face='Tahoma'><?php echo $n->tgl_msuk; ?></p>
               </td>
            </tr>

            <tr>
               <td align="center" colspan="2"><br> Saksi</td>
               <td colspan="2"></td>
               <td align="center" colspan="2"><br> Pasien / Wali</td>
            </tr>
            <tr>
               <td align="center" colspan="2"><img
                     src="<?php echo $n->ttd_saksi_f4; ?>">
               </td>
               <td colspan="2"></td>
               <td align="center" colspan="2"><img
                     src="<?php echo $n->ttd_pasien_f4; ?>">
               </td>
            </tr>
         </table>
            <?php } ?>

</body>
</html>