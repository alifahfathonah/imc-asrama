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
                <div class="col-md-3">
                  <div class="box box-primary">
                    <div class="box-body box-profile">
                      <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/img/default.png') ?>" alt="User profile picture">

                      <h3 class="profile-username text-center">Nina Mcintire</h3>

                      <p class="text-muted text-center">Software Engineer</p>

                      <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                          <b>Followers</b> <a class="pull-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                          <b>Following</b> <a class="pull-right">543</a>
                        </li>
                        <li class="list-group-item">
                          <b>Friends</b> <a class="pull-right">13,287</a>
                        </li>
                      </ul>
                      <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                      <li class=""><a href="#timeline" data-toggle="tab">Timeline</a></li>
                      <li class=""><a href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <form class="form-horizontal">
                          <div class="box-body">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label text-left">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                              <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="tab-pane" id="timeline">
                        
                      </div>
                      <button type="submit" class="btn btn-info pull-right">Sign in</button>
                        </form>
                    </div>
                  </div>
                </div>
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