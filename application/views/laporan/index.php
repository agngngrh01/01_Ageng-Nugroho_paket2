        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h3>Tambah Laporan Pengaduan</h3>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-body">
                        <?= form_open_multipart('laporan/add_laporan'); ?>
                            <div class="form-group row">
                                <label class="col-sm-2">Isi laporan</label>
                                <div class="col-sm-10">
                                <?= form_error('isi','<small class="text-danger">','</small>'); ?>
                                    <textarea name="isi" rows="8" class="form-control"><?= set_value('isi'); ?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2">Tambahkan Foto <small></small></label>
                                <div class="col-sm-10">
                               
                                    <input type="file" class="form-control" name="foto" required="required">
                                </div>
                            </div>

                            <a href="<?= base_url('laporan'); ?>" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Kembali</a>

                            <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

          
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    <hr>
    
  <!-- Page Heading -->
  <?php date_default_timezone_set('Asia/Jakarta'); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h3>Management Data Pengaduan</h3>

        <div class="row">
            <div class="col-lg-12">

                <div class="alert alert-warning">
                    <strong>Note : </strong> Jika anda menghapus data pengaduan maka data tanggapan dengan ID yang sama juga akan terhapus
                </div>

                <div class="card shadow">
                    <div class="card-body">
                        <table class="table table-striped table-bordered" id="myTable">
                            <thead class="table-info">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Isi Pengaduan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($laporan as $l){ ?>
                            <strong>
                                <tr>
                                    <td><?= date('d M Y H:i:s', $l->id_pengaduan); ?></td>
                                    <td><?= $l->isi_laporan; ?></td>
                                    <td>
                                        <?php if($l->status == 1): ?>
                                            Selesai
                                        <?php endif; ?>
                                        <?php if($l->status == 2): ?>
                                            Ditolak
                                        <?php endif; ?>
                                        <?php if($l->status == 0): ?>
                                            Diproses
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                    <a href="<?= base_url('laporan/detail/') . md5($l->id_pengaduan); ?>" class="btn btn-success btn-sm"><i class="fa fa-arrow-right"></i></a>
                                    </td>
                                </tr>
                                </strong>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->