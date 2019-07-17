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
      <div class="box box-primary">
        <div class="box-header with-border">
          <div class="flash-data" data="<?= $this->session->flashdata('message') ?>"></div>
          <div class="flash-error" data="<?= $this->session->flashdata('error') ?>"></div>
          <a href="<?= base_url('siswa/add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah Baru</a>
          <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama siswa</th>
                <th>Jumlah Anggota</th>
                <th width="15%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach($siswa as $key) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= strtoupper($key->nama_siswa) ?></td>
                  <td>Win 95+</td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#modal-edit" nilai="<?= $key->id_siswa ?>" class="btn btn-success edit"><i class="fa fa-edit"></i></button>
                    <button type="button" data-toggle="modal" data-target="#modal-hapus" nilai="<?= $key->id_siswa ?>" class="btn btn-danger hapus"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
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
      const flashdata = $('.flash-data').attr('data');
      if (flashdata) {
        swal({
          type: 'success',
          title: 'Data siswa',
          text: 'Berhasil '+flashdata
        });
      }

      const error = $('.flash-error').attr('data');
      if (error) {
        swal({
          type: 'error',
          title: 'Data siswa',
          text: error
        });
      }
    </script>
</body>
</html>