<div class="row mb-2">
  <div class="col-sm-6">
    <h5 class="m-0 text-dark">Selamat Datang <?= $usrnm; ?> di Elektronik Rekam Medis</h5>
  </div>
</div>

<div class="row mb-3">
  <!-- <div class="col-3">
    <a class="btn btn-block btn-outline-primary" href="<?= base_url('logic/listpasien'); ?>">Data Pasien</a>
  </div>
  <div class="col-3">
    <a class="btn btn-block btn-outline-info" href="<?= base_url('logic/addrm'); ?>">Tambah Ranap</a>
  </div> -->
  <!-- <div class="col-3">
    <a class="btn btn-block btn-outline-success" href="<?= base_url('logic/tambahcppt'); ?>">Tambah CPPT</a>
  </div>
  <div class="col-3">
    <a class="btn btn-block btn-outline-warning" href="<?= base_url('logic/cpptbase'); ?>">Menu CPPT</a>
  </div> -->
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Ketersediaan Kamar &nbsp<span class="badge badge-success right">up to date !</span></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 35%">Nama Ruangan | Jumlah TT</th>
              <th>Progres</th>
              <th>Terisi</th>
              <th>Tersedia</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>Al-Humaira |&nbsp<span class="badge bg-info" id='sum1'></span></td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" id="prgs1"></div>
                </div>
              </td>
              <td><span class="badge bg-primary" id='fill1'></span></td>
              <td><span class="badge bg-success" id='ava1'></span></td>
            </tr>

            <tr>
              <td>Jabal Rahmah / VK |&nbsp<span class="badge bg-info" id='sum2'></span></td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" id="prgs2"></div>
                </div>
              </td>
              <td><span class="badge bg-primary" id='fill2'></span></td>
              <td><span class="badge bg-success" id='ava2'></span></td>
            </tr>
            <tr>
              <td>Al-Kautsar |&nbsp<span class="badge bg-info" id='sum3'></span></td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" id="prgs3"></div>
                </div>
              </td>
              <td><span class="badge bg-primary" id='fill3'></span></td>
              <td><span class="badge bg-success" id='ava3'></span></td>
            <tr>
              <td>An-Naim |&nbsp<span class="badge bg-info" id='sum4'></span></td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" id="prgs4"></div>
                </div>
              </td>
              <td><span class="badge bg-primary" id='fill4'></span></td>
              <td><span class="badge bg-success" id='ava4'></span></td>
            </tr>
            <tr>
              <td>HCU |&nbsp<span class="badge bg-info" id='sum5'></span></td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" id="prgs5"></div>
                </div>
              </td>
              <td><span class="badge bg-primary" id='fill5'></span></td>
              <td><span class="badge bg-success" id='ava5'></span></td>
            </tr>
            <tr>
              <td>ICU |&nbsp<span class="badge bg-info" id='sum6'></span></td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" id="prgs6"></div>
                </div>
              </td>
              <td><span class="badge bg-primary" id='fill6'></span></td>
              <td><span class="badge bg-success" id='ava6'></span></td>
            </tr>
            <tr>
              <td>Al-Firdaus |&nbsp<span class="badge bg-info" id='sum7'></span></td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" id="prgs7"></div>
                </div>
              </td>
              <td><span class="badge bg-primary" id='fill7'></span></td>
              <td><span class="badge bg-success" id='ava7'></span></td>
            </tr>
            <tr>
              <td>ISO |&nbsp<span class="badge bg-info" id='sum8'></span></td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" id="prgs8"></div>
                </div>
              </td>
              <td><span class="badge bg-primary" id='fill8'></span></td>
              <td><span class="badge bg-success" id='ava8'></span></td>
            </tr>
            <tr>
              <td>Ar-Royyan |&nbsp<span class="badge bg-info" id='sum9'></span></td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" id="prgs9"></div>
                </div>
              </td>
              <td><span class="badge bg-primary" id='fill9'></span></td>
              <td><span class="badge bg-success" id='ava9'></span></td>
            </tr>
            <tr>
              <td>Zalzabil |&nbsp<span class="badge bg-info" id='sum10'></span></td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" id="prgs10"></div>
                </div>
              </td>
              <td><span class="badge bg-primary" id='fill10'></span></td>
              <td><span class="badge bg-success" id='ava10'></span></td>
            </tr>
            <tr>
              <td>Ar-Roudhoh |&nbsp<span class="badge bg-info" id='sum11'></span></td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" id="prgs11"></div>
                </div>
              </td>
              <td><span class="badge bg-primary" id='fill11'></span></td>
              <td><span class="badge bg-success" id='ava11'></span></td>
            </tr>
            <tr>
              <td>Darussalam |&nbsp<span class="badge bg-info" id='sum12'></span></td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" id="prgs12"></div>
                </div>
              </td>
              <td><span class="badge bg-primary" id='fill12'></span></td>
              <td><span class="badge bg-success" id='ava12'></span></td>
            </tr>
            <tr>
              <td>Neonatus |&nbsp<span class="badge bg-info" id='sum13'></span></td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" id="prgs13"></div>
                </div>
              </td>
              <td><span class="badge bg-primary" id='fill13'></span></td>
              <td><span class="badge bg-success" id='ava13'></span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->

    </div>
  </div>

</div>


<script>
  setInterval(function(){ carirm(); location.reload(); }, 10000);

  carirm();

  function carirm() {
    $.ajax({
      url: "<?= base_url('bridge/dash1'); ?>",
      method: "POST",
      cache: "false",
      success: function (x) {
        console.log(x);
        if (x == 0) {
          console.log('data kosong');
          return;
        } else {
          var tx = x.split("|");
          var t1 = tx[0]; //sum
          var t2 = tx[1]; //isi
          var t3 = tx[2];
          var t4 = tx[3];
          var t5 = tx[4];
          var t6 = tx[5];
          var t7 = tx[6];
          var t8 = tx[7];
          var t9 = tx[8];
          var t10 = tx[9];
          var t11 = tx[10];
          var t12 = tx[11];
          var t13 = tx[12];
          var t14 = tx[13];
          var t15 = tx[14];
          var t16 = tx[15];
          var t17 = tx[16];
          var t18 = tx[17];
          var t19 = tx[18];
          var t20 = tx[19];
          var t21 = tx[20];
          var t22 = tx[21];
          var t23 = tx[22];
          var t24 = tx[23];
          var t25 = tx[24];
          var t26 = tx[25];

          var p1 = t2 / t1 * 100;
          var p2 = t4 / t3 * 100;
          var p3 = t6 / t5 * 100;
          var p4 = t8 / t7 * 100;
          var p5 = t10 / t9 * 100;
          var p6 = t12 / t11 * 100;
          var p7 = t14 / t13 * 100;
          var p8 = t16 / t15 * 100;
          var p9 = t18 / t17 * 100;
          var p10 = t20 / t19 * 100;
          var p11 = t22 / t21 * 100;
          var p12 = t24 / t23 * 100;
          var p13 = t26 / t25 * 100;

          var k1 = t1 - t2;
          var k2 = t3 - t4;
          var k3 = t5 - t6;
          var k4 = t7 - t8;
          var k5 = t9 - t10;
          var k6 = t11 - t12;
          var k7 = t13 - t14;
          var k8 = t15 - t16;
          var k9 = t17 - t18;
          var k10 = t19 - t20;
          var k11 = t21 - t22;
          var k12 = t23 - t24;
          var k13 = t25 - t26;

          document.getElementById("sum1").innerHTML = t1 + ' tt';
          document.getElementById("prgs1").style.width = p1 + "%";
          document.getElementById("fill1").innerHTML = t2 + ' pasien';
          document.getElementById("ava1").innerHTML = k1 + ' tt';

          document.getElementById("sum2").innerHTML = t3 + ' tt';
          document.getElementById("prgs2").style.width = p2 + "%";
          document.getElementById("fill2").innerHTML = t4 + ' pasien';
          document.getElementById("ava2").innerHTML = k2 + ' tt';

          document.getElementById("sum3").innerHTML = t5 + ' tt';
          document.getElementById("prgs3").style.width = p3 + "%";
          document.getElementById("fill3").innerHTML = t6 + ' pasien';
          document.getElementById("ava3").innerHTML = k3 + ' tt';

          document.getElementById("sum4").innerHTML = t7 + ' tt';
          document.getElementById("prgs4").style.width = p4 + "%";
          document.getElementById("fill4").innerHTML = t8 + ' pasien';
          document.getElementById("ava4").innerHTML = k4 + ' tt';

          document.getElementById("sum5").innerHTML = t9 + ' tt';
          document.getElementById("prgs5").style.width = p5 + "%";
          document.getElementById("fill5").innerHTML = t10 + ' pasien';
          document.getElementById("ava5").innerHTML = k5 + ' tt';

          document.getElementById("sum6").innerHTML = t11 + ' tt';
          document.getElementById("prgs6").style.width = p6 + "%";
          document.getElementById("fill6").innerHTML = t12 + ' pasien';
          document.getElementById("ava6").innerHTML = k6 + ' tt';

          document.getElementById("sum7").innerHTML = t13 + ' tt';
          document.getElementById("prgs7").style.width = p7 + "%";
          document.getElementById("fill7").innerHTML = t14 + ' pasien';
          document.getElementById("ava7").innerHTML = k7 + ' tt';

          document.getElementById("sum8").innerHTML = t15 + ' tt';
          document.getElementById("prgs8").style.width = p8 + "%";
          document.getElementById("fill8").innerHTML = t16 + ' pasien';
          document.getElementById("ava8").innerHTML = k8 + ' tt';

          document.getElementById("sum9").innerHTML = t17 + ' tt';
          document.getElementById("prgs9").style.width = p9 + "%";
          document.getElementById("fill9").innerHTML = t18 + ' pasien';
          document.getElementById("ava9").innerHTML = k9 + ' tt';

          document.getElementById("sum10").innerHTML = t19 + ' tt';
          document.getElementById("prgs10").style.width = p10 + "%";
          document.getElementById("fill10").innerHTML = t20 + ' pasien';
          document.getElementById("ava10").innerHTML = k10 + ' tt';

          document.getElementById("sum11").innerHTML = t21 + ' tt';
          document.getElementById("prgs11").style.width = p11 + "%";
          document.getElementById("fill11").innerHTML = t22 + ' pasien';
          document.getElementById("ava11").innerHTML = k11 + ' tt';

          document.getElementById("sum12").innerHTML = t23 + ' tt';
          document.getElementById("prgs12").style.width = p12 + "%";
          document.getElementById("fill12").innerHTML = t24 + ' pasien';
          document.getElementById("ava12").innerHTML = k12 + ' tt';

          document.getElementById("sum13").innerHTML = t25 + ' tt';
          document.getElementById("prgs13").style.width = p13 + "%";
          document.getElementById("fill13").innerHTML = t26 + ' pasien';
          document.getElementById("ava13").innerHTML = k13 + ' tt';

        }
      }
    })
  }
</script>
