<html>

<head>
   <style>
      tds {
         border:1px solid black;
         border-collapse:collapse;
      }

      td {
         padding: 4px;
         font-family: "Times New Roman", Times, serif;
         vertical-align: top;
      }

      .logoimg {
         max-width: 15%;
         height: auto;
      }

      body {
         color: 000000;
      }
      
      .solid {border:1px solid black;
              border-collapse:collapse;}

      hr {
      border: 3px solid black;
      }

   </style>
</head>

<body>
   <table width='100%' align='left' border='0' cellspacing='0' cell>
      <tr>
         <td colspan='4' >
            <table width='100%' align='left' border='0' cellspacing='0' cell>
               <tr>
                  <td width='20%' align='center'> <img class="logoimg"
                        src="<?= base_url('assets/dist/img/pmc.jpg'); ?>"> </td>
                  <td>
                  <center>
                        <font color='000000' face='Lucida Console'>RS Pelengkap Medical Center</font> <br>
                        <font color='000000' face='Lucida Console'> Jl. Ir. Juanda No. 03, Jombang, Jawa
                           Timur<br />
                           Telp. 877945, E-mail : rspmcjombang@ymail.com </font>
                     </center>
                  </td>
                  <td width='20%' align='center'> <b color='000000' size='3' face='Tahoma'>CPPT
                        <br>------------------<br><?= $no_cppt; ?></b></td>
               </tr>
            </table>
         </td>
      </tr>
      <tr>
         <td colspan='5'>
            <hr />
         </td>
      </tr>

      <table>
      <tr>
         <td width="80px">Nama</td><td>:</td>
         <td width="250px"><?= $nm ?></td>
         <td width="80px">No. RM</td><td>:</td>
         <td width="250px"><?= $no ?></td>
      </tr>
      <tr>
         <td>Tgl. Lahir</td><td>:</td>
         <td><?= $tgl ?></td>
         <td>Ruangan</td><td>:</td>
         <td><?= $rr ?></td>
      </tr>
      </table>

      <tr >
         <td class='solid'>Tanggal<br>Jam</td>
         <td class='solid'>PPA</td>
         <td class='solid' colspan='' >Subyektif, Obyektif, Assesment, Planning</td>
         <td class='solid'>Paraf</td>
      </tr>
      <?php foreach($dt as $d){ ?>
      <tr >
         <td class='solid' width="10%" style='font-size:10px'><?php echo $d->tanggal ?><br><?php echo $d->jam ?></td>
         <td class='solid' width="20%" style='font-size:10px'><?php echo $d->ppa ?></td>
         <td class='solid' colspan='' ><img style="border:1px dashed DarkSlateBlue;" width="70%" src="<?php echo $d->soap ?>"></td>
         <td class='solid'><img width="20%" src="<?php echo $d->paraf ?>"></td>
      </tr>
      <?php } ?>
   </table>

</body>

</html>



