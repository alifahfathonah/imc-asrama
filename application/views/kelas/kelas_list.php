<!DOCTYPE html>

<html>
<head>
  <?php $this->load->view('partial/css') ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php $this->load->view('partial/header') ?>

    <?php $this->load->view('partial/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <?php $this->load->view('partial/breadcumb') ?>
    <section class="content container-fluid">
        <!-- CONTENT AREA -->
        <div class="box box-primary">
          <div class="box-header with-border">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i>&nbsp;Tambah Baru</button>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kelas</th>
                  <th>Jumlah Anggota</th>
                  <th width="15%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php foreach($kelas as $key) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= strtoupper($key->nama_kelas) ?></td>
                    <td>Win 95+</td>
                    <td>
                      <button type="button" data-toggle="modal" data-target="#modal-edit" nilai="<?= $key->id_kelas ?>" class="btn btn-success edit"><i class="fa fa-edit"></i></button>
                      <button type="button" data-toggle="modal" data-target="#modal-hapus" nilai="<?= $key->id_kelas ?>" class="btn btn-danger hapus"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tfoot>
              </table>
          </div>
          <!-- MODAL TAMBAH -->
          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Tambah Kelas</h4>
                </div>
                <div class="modal-body">
                  <form role="form" method="post" action="<?= base_url('kelas/add') ?>">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kelas</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="kelas" required>
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
        </div>
          <!-- MODAL EDIT -->
          <div class="modal fade" id="modal-edit">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Edit Kelas</h4>
                </div>
                <div class="modal-body">
                  <form role="form" method="post" class="form_edit">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" required>
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
        <!-- END CONTENT AREA -->
    </section>
          <div class="modal fade" id="modal-hapus">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Apakah kamu yakin ?</h4>
                  </div>
                  <div class="modal-body">
                    <h4>Data yang dihapus tidak dapat dikembalikan</h4>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <a class="btn btn-danger delete">Delete</a>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
          </div>
  </div>

  <?php $this->load->view('partial/footer') ?>

  <div class="control-sidebar-bg"></div>
</div>
    
    <?php $this->load->view('partial/js') ?>

    <script type="text/javascript">
      $('.edit').click(function(){
        url_get = "<?= base_url('request/kelas/getbyId') ?>";
        kode = $(this).attr('nilai');
        $.ajax({
          url: url_get, 
          type: 'get',
          dataType: 'json',
          data: {id: kode},
          success: function(result){
            $('#kelas').val(result.nama_kelas.toUpperCase());
            $('.form_edit').attr('action', '<?= base_url('kelas/edit/') ?>'+kode);
          }
        });
      });

      $('.hapus').click(function(){
        kode = $(this).attr('nilai');
        $('.delete').attr('href', '<?= base_url('kelas/delete/') ?>'+kode);
      });
    </script>
</body>
</html>