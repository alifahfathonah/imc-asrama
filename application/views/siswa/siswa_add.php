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
              <a href="<?= base_url('siswa') ?>" class="btn btn-primary"><i class="fa fa-chevron-left"></i>&nbsp;Kembali</a>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <div class="row">
                <div class="col-lg-6 col-md-8">
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#pribadi" data-toggle="tab">DATA DIRI</a></li>
                      <li class=""><a href="#timeline" data-toggle="tab">DATA ORANG TUA</a></li>
                      <li class=""><a href="#settings" data-toggle="tab">DATA WALI</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="active tab-pane" id="pribadi">
                        <form class="form-horizontal" method="post" action="<?= base_url('siswa/add') ?>">
                          <div class="box-body">
                            <div class="form-group <?php echo form_error('nis') ? 'has-error':'' ?>">
                              <label class="col-sm-3 control-label text-left">NIS</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="nis">
                                <span class="help-block"><?php echo form_error('nis')?></span>
                              </div>
                            </div>
                            <div class="form-group <?php echo form_error('nama_siswa') ? 'has-error':'' ?>">
                              <label class="col-sm-3 control-label text-left">Nama Siswa</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_siswa">
                                <span class="help-block"><?php echo form_error('nama_siswa')?></span>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="tab-pane" id="timeline">
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3"></div>
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                  </div>
                  </form>
                </div>
                <div class="col"></div>
              </div>
            </div>
          </div>
    </section>
  </div>

  <?php $this->load->view('partial/footer') ?>

  <div class="control-sidebar-bg"></div>
</div>
    
    <?php $this->load->view('partial/js') ?>

    <script type="text/javascript">
    </script>
</body>
</html>