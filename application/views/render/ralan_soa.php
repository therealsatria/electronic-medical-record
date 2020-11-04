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
         <td></td>
         <td>Jenis Kelamin</td>
         <td></td>
       </tr>
       <tr>
         <td colspan="3">Poli yang dituju :  <?php echo $d->a9; ?></td>
         <td colspan="3">DPJP :  <?php echo $d->a39; ?></td>
       </tr>


    </table>
  <?php } ?>

  </body>
</html>
