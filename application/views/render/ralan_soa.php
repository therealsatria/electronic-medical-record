<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
       td,th {
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

       #table{
         max-width: 2480px;
         width:100%;
        }

    </style>
  </head>
  <body class="body">


    <table id="table" bgcolor='#ffffff' align='left' border='0' cellspacing='0' cell>
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
                        <br>------------------<br><?= $rm; ?></b></td>
               </tr>
            </table>
          </td>
       </tr>
       <!-- ========= HEADER HALAMAN ====================================================================================== -->
       <hr />
       <tr>
         <td colspan="3" width="50%">Nama :  <?php echo $nama; ?></td>
         <td colspan="3">Tanggal Lahir :  <?php echo $tgl; ?></td>
       </tr>
       <tr>
         <td colspan="3">Alamat :  <?php echo $alamat; ?></td>
         <td colspan="3">Jenis Kelamin :  <?php if ($jk == 'L') {echo "Laki - laki";
         }else{echo "Perempuan";} ?></td>
       </tr>
       <tr>
          <th colspan="2">Tanggal</td>
          <th colspan="2" rowspan="2">S : Subjective &nbsp&nbsp O : Objective<br>A: Assesment &nbsp&nbsp P: Planning</td>
          <th colspan="2" rowspan="2">TT Petugas</td>
       </tr>
       <tr>
          <th colspan="2">Poliklinik</td>
       </tr>
      <?php foreach ($dt as $d){ ?>
         <tr>
            <td colspan="2" style="vertical-align: top;"><?php echo $d->tanggal; ?><br><?php echo $d->poliklinik; ?></td>
            <td colspan="2"><img src="<?php echo $d->soa; ?>"></td>
            <td colspan="2" style="vertical-align: top;"><img src="<?php echo $d->ttd; ?>"></td>
         </tr>
      <?php } ?>
    </table>


  </body>
</html>
