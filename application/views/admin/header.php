<!DOCTYPE html>
<html>
<head>
	<title>Jogjakarta Vixion Community</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/admin.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery-ui.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-ui.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/ckeditor/ckeditor.js' ?>"></script>  
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url().'admin/' ?>">JVC</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url().'admin/' ?>">Beranda<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url().'admin/artikel' ?>">Artikel</a></li>
        <li><a href="<?php echo base_url().'admin/kategori' ?>">Kategori</a></li>
        <li><a href="<?php echo base_url().'admin/member' ?>">Member</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pengaturan<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url().'admin/pengaturan' ?>"><span class='glyphicon glyphicon-wrench'></span> Web</a></li>            
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
       <li><a href="<?php echo base_url().'admin/pesan' ?>"><span class='glyphicon glyphicon-envelope'></span> Pesan</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo strtoupper($this->session->userdata('nama')) ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">            
            <li><a href="<?php echo base_url().'admin/ganti_password' ?>"><span class='glyphicon glyphicon-wrench'></span> Ganti password</a></li>            
            <li class="divider"></li>
            <li><a href="<?php echo base_url().'login_user/logout' ?>"><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
