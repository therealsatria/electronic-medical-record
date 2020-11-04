<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
    <style>
       td {
          border: 1px solid;
          font-family: "Times New Roman", Times, serif;
       }
       .logoimg {
          max-width: 15%;
          height: auto;
       }
       table {
         border-collapse: collapse;
       }

       td {
          padding: 4px;
       }
       #top {
         vertical-align: text-top;

       }
    </style>
  </head>
  <body class="body">


    <table width='' bgcolor='#ffffff' align='left' border='0' cellspacing='0' cell>
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
                  <td width='20%' align='center'> <b color='000000' size='3' >FORM RM.01
                        <br>------------------<br><?= $nrw; ?></b></td>
               </tr>
            </table>
          </td>
       </tr>
       <!-- ========= HEADER HALAMAN ====================================================================================== -->
       <hr />
       <?php foreach ($dt as $d){ ?>
       <tr>
         <td colspan="2">Tanggal Kunjungan :  <?php echo $d->a6; ?></td>
         <td colspan="2">Waktu Kunjungan :  <?php echo $d->a7; ?></td>
         <td colspan="2">Usia Saat Kunjungan :  <?php echo $d->a8; ?></td>
       </tr>
       <tr>
         <td>Nama :</td>
         <td><?php echo $d->a3; ?></td>
         <td>Tgl Lahir</td>
         <td><?php echo $d->a4; ?></td>
         <td>Jenis Kelamin</td>
         <td><?php echo $d->a5; ?></td>
       </tr>
       <tr>
         <td colspan="3">Poli yang dituju :  <?php echo $d->a9; ?></td>
         <td colspan="3">DPJP :  <?php echo $d->a39; ?></td>
       </tr>
       <tr>
         <td colspan="2">Tensi :  <?php echo $d->a10; ?> mmHg</td>
         <td colspan="2">Pernapasan :  <?php echo $d->a11; ?> x/menit</td>
         <td colspan="2">Skala nyeri :  <?php echo $d->a12; ?></td>
       </tr>
       <tr>
         <td colspan="2">Nadi :  <?php echo $d->a13; ?> x/menit</td>
         <td colspan="2">Suhu :  <?php echo $d->a14; ?> °C</td>
         <td colspan="2"></td>
       </tr>
       <tr>
         <td colspan="3">Alergi Obat :  <?php echo $d->a15; ?></td>
         <td colspan="3">Reaksi :<?php echo $d->a16; ?></td>
       </tr>
       <tr>
         <td colspan="3">Alergi Makanan :  <?php echo $d->a17; ?></td>
         <td colspan="3">Reaksi :  <?php echo $d->a18; ?></td>
       </tr>
       <tr>
         <td colspan="3">Alergi Lain :  <?php echo $d->a19; ?></td>
         <td colspan="3">Reaksi :  <?php echo $d->a20; ?></td>
       </tr>
       <tr>
         <td colspan="3" id="top">
           <table>
             <tr>
               <td>BB</td>
               <td>:</td>
               <td><?php echo $d->a21; ?> kg</td>
             </tr>
             <tr>
               <td>TB</td>
               <td>:</td>
               <td><?php echo $d->a22; ?> cm</td>
             </tr>
             <tr>
               <td>IMT</td>
               <td>:</td>
               <td><?php echo $d->a23; ?> kg/m²</td>
             </tr>
           </table>
         </td>
         <td colspan="3">
           <table>
              <tr>
                <td>IMT < 18 kg/m²</td>
                <td><?php if ($d->a24 == "true"){echo "y";}else{echo "t";}?></td>
              </tr>
              <tr>
                <td>Kehilangan BB dalam 3 bulan terakhir</td>
                <td><?php if ($d->a25 == "true"){echo "y";}else{echo "t";}?></td>
              </tr>
              <tr>
                <td>Penurunan asupan makanan 1 minggu</td>
                <td><?php if ($d->a26 == "true"){echo "y";}else{echo "t";}?></td>
              </tr>
              <tr>
                <td>Apakah pasien mengalami sakit berat</td>
                <td><?php if ($d->a27 == "true"){echo "y";}else{echo "t";}?></td>
              </tr>
              <tr>
                <td>Khusus Pediatri : apakah Z score >+2 SD <br>atau Z score <-2 SD (gunakan kurva gizi <br> dari WHO)</td>
                <td><?php if ($d->a28 == "true"){echo "y";}else{echo "t";}?></td>
              </tr>
           </table>
         </td>
       </tr>
       <tr>
         <td colspan="6">
         <table>
           <tr>
             <td colspan="4">Skrining Resiko Jatuh</td>
           </tr>
           <tr>
             <td>No</td>
             <td>PENILAIAN PENGKAJIAN</td>
             <td>YA / TIDAK</td>
           </tr>
           <tr>
             <td>1</td>
             <td>Cara berjalan (salah satu atau lebih) <br>
                 tidak seimbang / sempoyongan / limbung</td>
             <td><?php if ($d->a29 == '1') {echo "Ya";}else{echo "Tidak";}?></td>
           </tr>
           <tr>
             <td>2</td>
             <td>Jalan dengan menggunakan alat bantu <br>
                 (kruk / tripod / kursi roda / orang lain)</td>
             <td><?php if ($d->a30 == '1') {echo "Ya";}else{echo "Tidak";}?></td>
           </tr>
           <tr>
             <td>3</td>
             <td>Menopang saat akan duduk : tampak memegang pinggiran kursi / meja / benda lain sebagai penopang saat akan duduk</td>
             <td><?php if ($d->a31 == '1') {echo "Ya";}else{echo "Tidak";}?></td>
           </tr>
         </table>
         </td>
       </tr>
       <tr>
         <td colspan="6">Skrining Fungsional dan Psikologi</td>
       </tr>
       <tr>
         <td colspan="3">ADL</td>
         <td colspan="3"><?php echo $d->a32; ?></td>
       </tr>
       <tr>
         <td colspan="3">Cacat Fisik</td>
         <td colspan="3"><?php echo $d->a33; ?></td>
       </tr>
       <tr>
         <td colspan="3">Protesa</td>
         <td colspan="3"><?php echo $d->a34; ?></td>
       </tr>
       <tr>
         <td colspan="3">Kondisi Psikologis</td>
         <td colspan="3"><?php echo $d->a35; ?></td>
       </tr>
       <tr>
         <td colspan="3" width="50%" id="top">
           <b>Diagnosa Keperawatan :</b> <br> <?php echo $d->a36; ?>
         </td>
         <td colspan="3" rowspan="2">
           <img src="<?php echo $d->a38; ?>">
         </td>
       </tr>
       <tr>
         <td colspan="3" id="top">
           <b>Rencana Keperawatan :</b> <br> <?php echo $d->a37; ?>
         </td>
       </tr>
    </table>
  <?php } ?>

  </body>
</html>
