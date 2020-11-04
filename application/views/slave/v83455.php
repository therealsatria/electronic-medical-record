    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Rekam Medik Pasien</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No RM <code>(edit Data)</code></th>
                  <th>Nama Pasien <code>(edit Cppt)</code><code></code></th>
                  <th>Alamat</th>
                  <th>PJ Pasien</th>
                  <th>Tgl Masuk</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php
                    $no = 1;
                    foreach($tb_ranap as $u){
                     ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td>
                    <?php echo anchor('logic/get/'.$u->no_rm, $u->no_rm); ?>
                  </td>
                  <td>
                    <?php echo anchor('logic/cpptbase/'.$u->no_rm, $u->nama_lengkap); ?>
                  </td>
                  <td><?php echo $u->alamat ?></td>
                  <td><?php echo $u->nama_pj ?></td>
                  <td><?php echo $u->tgl_msuk ?></td>
                  <td>
                    <div class="btn-group">
                      <!-- <button type="button" class="btn btn-danger" onclick="location.href = 'hapusdata<?= '/'.$u->no_rm ?>';"><i class="nav-icon far fa-trash-alt"></i></button> -->
                      <a href="ralanbase<?= '/'.$u->no_rm ?>" type="button" class="btn btn-primary" ><i class="nav-icon far fas fa-hand-holding-medical"></i></a>
                      <!-- <button type="button" class="btn btn-info"
                        onclick="location.href = 'render<?= '/'.$u->no_rm ?>/0';"><i class="nav-icon fas fa-print"></i></button> -->
                      <a class="btn btn-info" target="_blank" href="render<?= '/'.$u->no_rm ?>/0"><i class="nav-icon fas fa-print"></i></a>
                      <div class="btn-group">
                        <button type="button" class="btn btn-block btn-outline-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" target="_blank" href="render<?= '/'.$u->no_rm ?>/1">Form 1</a>
                          <a class="dropdown-item" target="_blank" href="render<?= '/'.$u->no_rm ?>/2">Form 2</a>
                          <a class="dropdown-item" target="_blank" href="render<?= '/'.$u->no_rm ?>/3">Form 3</a>
                          <a class="dropdown-item" target="_blank" href="render<?= '/'.$u->no_rm ?>/4">Form 4</a>
                        </div>
                        <a href="hapusdata<?= '/s'.$u->no_rm ?>" type="button" class="btn btn-danger" ><i class="nav-icon far fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </td>
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
