<div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data RM terbaru dari database Khanza</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No RM <code>(edit Data)</code></th>
                  <th>Nama Pasien <code></code></th>
                  <th>Alamat</th>
                  <th>Nama PJ</th>
                  <th>Tgl Masuk</th>
                </tr>
              </thead>

              <tbody>
                <?php
                    $no = 1;
                    foreach($pasien as $u){
                     ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td>
                    <?php echo anchor('logic/get/'.$u->no_rkm_medis, $u->no_rkm_medis); ?>
                  </td>
                  <td>
                    <?php echo $u->nm_pasien; ?>
                  </td>
                  <td><?php echo $u->alamat ?></td>
                  <td><?php echo $u->namakeluarga ?></td>
                  <td><?php echo $u->tgl_daftar ?></td>
                  
                </tr>
                <?php } ?>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>

