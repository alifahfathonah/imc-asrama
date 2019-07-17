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

    	<!-- END CONTENT AREA -->
    </section>
  </div>

  <?php $this->load->view('partial/footer') ?>

  <div class="control-sidebar-bg"></div>
</div>
	
	<?php $this->load->view('partial/js') ?>

</body>
</html>