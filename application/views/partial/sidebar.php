<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/img/default.png') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li>
          <a href="#"><i class="fa fa-link"></i> <span>Link</span></a>
        </li>
        <li><a href="#">
          <i class="fa fa-link"></i> <span>Another Link</span></a>
        </li>
        <li class="treeview <?php echo $this->uri->segment(1) == 'kelas' || $this->uri->segment(1) == 'siswa' ? 'active': '' ?>" >
          <a href="#"><i class="fa fa-book"></i> <span>Master Data</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo $this->uri->segment(1) == 'kelas' ? 'active': '' ?>">
              <a href="<?= base_url('kelas') ?>"><i class="fa fa-building-o"></i> Data Kelas</a>
            </li>
            <li  class="<?php echo $this->uri->segment(1) == 'siswa' ? 'active': '' ?>">
              <a href="<?= base_url('siswa') ?>"><i class="fa fa-user"></i> Data Siswa</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>