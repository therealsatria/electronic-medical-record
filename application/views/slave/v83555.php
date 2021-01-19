<div class="col-12 col-sm-12">
    <div class="row">
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <input type="text" id="idcari" value="" class="form-control">
                <span class="input-group-append">
                    <button type="button" onclick="carirm()" id="btncari" class="btn btn-block btn-outline-primary"><i class="nav-icon fas fa-search"></i> Cari !</button>
                </span>
            </div>
        </div>
        <div class="col-sm-3">
            <a href="registrasi" class="btn btn-block btn-outline-primary"><i class="nav-icon far fa-save"></i> Daftar</a>
        </div>
    </div>
</div>
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
              <th width="2%">No</th>
              <th width="10%">RM</th>
              <th>Nama Pasien</th>
              <th>Alamat</th>
              <th>PJ Pasien</th>
              <th width="2%">Jenis Kelamin</th>
              <th width="10%">Action</th>
            </tr>
          </thead>

          <tbody>
            <?php
                $no = 1;
                foreach($tb_pasien as $u){
                 ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td>
                <?php echo anchor('logic/get/'.$u->no_rm, $u->no_rm); ?>
              </td>
              <td><?php echo $u->nama_lengkap ?></td>
              <td><?php echo $u->alamat ?></td>
              <td><?php echo $u->nama_pj ?></td>
              <td><?php echo $u->jk ?></td>
              <td>
                <div class="btn-group">
                  <a href="ralanbase<?= '/'.$u->no_rm ?>" type="button" class="btn btn-info btn-sm" ><i class="nav-icon far fas fa-hand-holding-medical"></i> Poli</a>
                  <button type='button' class="nav-icon far fa-trash-alt btn btn-danger btn-sm" data-kode='<?php echo $u->no_rm ?>' onclick='hapus(this)'></button>
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

<script>

    function hapus(el){
        var kode = $(el).data("kode");
        var konfirmasi = confirm("Konfirmasi hapus data pasien ?");

        if(konfirmasi === true) {
            $.ajax({
                url: "<?= base_url('logic/dropPasien'); ?>",
                method: "POST",
                data: {kd: kode},
                cache: "false",
                success: function(x){
                    if(x == 1){
                        Swal.fire({title: 'Berhasil', text: 'Data Barang Berhasil di Hapus', type: 'success'});
                        refresh();
                    }else{
                        Swal.fire({title: 'Gagal', text: 'Ada Beberapa Masalah dengan Data yang Anda Isikan !', type: 'error'});
                    }
                }

            })
          }
    }

    function refresh(){
      location.reload();
    }

</script>
