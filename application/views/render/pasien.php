<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
       tds {
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


    <table bgcolor='#ffffff' align='left' border='0' cellspacing='0' cell>
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
                  <td width='20%' align='center'> <b color='000000' size='3' >Data Pasien
                        <br>------------------<br><?= $rm; ?></b></td>
               </tr>
            </table>
          </td>
       </tr>
       <!-- ========= HEADER HALAMAN ====================================================================================== -->
       <hr />
       <?php foreach ($dt as $d){ ?>
         <tr>
           <td colspan="6" style="text-align:center"><b>Data Pasien</b></td>
         </tr>
         <tr>
           <td> <br><br> </td>
         </tr>
         <tr>
       <tr>
         <td width='20%'>No Rekam Medik</td>
         <td width='3%'>:</td>
         <td><?php echo $d->no_rm; ?></td>
         <td width='20%'>Nama lengkap</td>
         <td width='3%'>:</td>
         <td><?php echo $d->nama_lengkap; ?></td>
       </tr>
       <tr>
         <td>Gol darah</td>
         <td>:</td>
         <td><?php echo $d->gol_darah; ?></td>
         <td>Jenis kelamin</td>
         <td>:</td>
         <td><?php echo $d->jk; ?></td>
       </tr>
       <tr>
         <td>Tempat lahir</td>
         <td>:</td>
         <td><?php echo $d->tmpt_lhr; ?></td>
         <td>Tanggal lahir</td>
         <td>:</td>
         <td><?php echo $d->tgl_lhr; ?></td>
       </tr>
       <tr>
         <td colspan="">Alamat</td>
         <td>:</td>
         <td colspan="4"><?php echo $d->no_rm; ?></td>
       </tr>
       <tr>
         <td>Agama</td>
         <td>:</td>
         <td><?php echo $d->agama; ?></td>
         <td>No KTP</td>
         <td>:</td>
         <td><?php echo $d->no_ktp; ?></td>
       </tr>
       <tr>
         <td>Nama ibu</td>
         <td>:</td>
         <td><?php echo $d->nm_ibu; ?></td>
         <td>Status Nikah</td>
         <td>:</td>
         <td><?php echo $d->stts_nikah; ?></td>
       </tr>
       <tr>
         <td>Email</td>
         <td>:</td>
         <td><?php echo $d->email; ?></td>
         <td>Telp</td>
         <td>:</td>
         <td><?php echo $d->tlp; ?></td>
       </tr>
       <tr>
         <td>Pendidikan</td>
         <td>:</td>
         <td><?php echo $d->pendidikan; ?></td>
         <td>Pekerjaan</td>
         <td>:</td>
         <td><?php echo $d->pekerjaan; ?></td>
       </tr>
       <tr>
         <td>Alamat kantor</td>
         <td>:</td>
         <td><?php echo $d->alamat_kantor; ?></td>
         <td>Warga negara</td>
         <td>:</td>
         <td><?php echo $d->warga_negara; ?></td>
       </tr>
       <tr>
         <td> <br><br> </td>
       </tr>
       <tr>
       <tr>
         <td colspan="6" style="text-align:center"><b>Data Penanggung Jawab</b></td>
       </tr>
       <tr>
         <td> <br><br> </td>
       </tr>
       <tr>
         <td>Nama lengkap</td>
         <td>:</td>
         <td><?php echo $d->nama_pj; ?></td>
         <td>Gol darah</td>
         <td>:</td>
         <td><?php echo $d->gd_pj; ?></td>
       </tr>
       <tr>
         <td>Jenis kelamin</td>
         <td>:</td>
         <td><?php echo $d->jk_pj; ?></td>
         <td>Tempat lahir</td>
         <td>:</td>
         <td><?php echo $d->tmp_lhr_pj; ?></td>
       </tr>
       <tr>
         <td>Tanggal lahir</td>
         <td>:</td>
         <td><?php echo $d->tgl_lhr_pj; ?></td>
         <td>Agama</td>
         <td>:</td>
         <td><?php echo $d->agama_pj; ?></td>
       </tr>
       <tr>
         <td colspan="">Alamat</td>
         <td>:</td>
         <td colspan="4"><?php echo $d->alamat_pj; ?></td>
       </tr>
       <tr>
         <td>Email</td>
         <td>:</td>
         <td><?php echo $d->email_pj; ?></td>
         <td>No Telp</td>
         <td>:</td>
         <td><?php echo $d->tlp_pj; ?></td>
       </tr>
       <tr>
         <td>Pendidikan</td>
         <td>:</td>
         <td><?php echo $d->pendidikan_pj; ?></td>
         <td>Pekerjaan</td>
         <td>:</td>
         <td><?php echo $d->pekerjaan_pj; ?></td>
       </tr>
       <tr>
         <td>Alamat kantor</td>
         <td>:</td>
         <td><?php echo $d->alamat_kantor_pj; ?></td>
         <td>Warga negara</td>
         <td>:</td>
         <td><?php echo $d->warga_negara_pj; ?></td>
       </tr>
       <tr>
         <td>Hubungan dengan pasien</td>
         <td>:</td>
         <td><?php echo $d->hub_pasien; ?></td>
         <td>Cara bayar</td>
         <td>:</td>
         <td><?php echo $d->kd_pj; ?></td>
       </tr>
       <tr>
         <td colspan="6"> <br><br><br> </td>
       </tr>
       <tr>
         <td colspan="3" style="text-align:center">Pasien / Penanggung Jawab</td>
         <td colspan="3" style="text-align:center">Petugas Admisi</td>
       </tr>
       <tr>
         <td colspan="3"><img src="<?php echo $d->ttd1; ?>"></td>
         <td colspan="3"><img src="<?php echo $d->ttd2; ?>"></td>
       </tr>

    </table>
  <?php } ?>

  </body>
</html>
