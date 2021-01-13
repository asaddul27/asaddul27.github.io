<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->



<head>
  <meta charset="utf-8">
  <title>Maju Mundur High school</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <link rel="stylesheet" media="all" href="<?php echo base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" media="all" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" media="all" href="<?php echo base_url('assets/css/fontawesome/css/all.min.css') ?>">
  <link rel="stylesheet" media="all" href="<?php echo base_url('assets/css1.css') ?>">
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>


<body>

  <header id="header">
    <?php $this->load->view('navbar') ?>
  </header>
  <!-- / header -->
  <div class="divider"></div>

  <body>
    <h2>Selamat Datang di Halaman Admin</h2>



    <BR>
    <div class="container">


      <div class="container">
        <a href="<?php echo base_url('suratdispensasi') ?>" class="info-request">
          <span class="holder">
            <span class="title">Mau Buat Surat Dispensasi?</span>
            <span class="text">Klik di sini!</span>
          </span>
          <span class="arrow"></span>
        </a>
        <a href="<?php echo base_url('suratperingatan') ?>" class="info-request">
          <span class="holder">
            <span class="title">Mau Buat Surat Peringatan?</span>
            <span class="text">Klik di sini!</span>
          </span>
          <span class="arrow"></span>
        </a>
      </div>
    </div>