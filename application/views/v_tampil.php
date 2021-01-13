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
    <center>
      <h2>DATA SISWA DISPENSASI</h2>
    </center>
    <div class="container">
      <?php echo anchor('admin/', '<i class="btn btn-primary">Halaman Admin</i>'); ?>
      <?php echo anchor('suratdispensasi/tambah', '<i class="btn btn-primary">Tambah Data</i>'); ?>
      <table class="table table-striped table-hover">
        <tr class="bg-dark text-white">
          <th>No.</th>
          <th>NIS</th>
          <th>Nama Lengkap</th>
          <th>Kelas</th>
          <th>Jurusan</th>
          <th>Tanggal Izin</th>
          <th>Alasan</th>
          <th>Tanggal Surat</th>
          <th>Opsi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($datasiswa as $u) {
        ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nis ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->kelas ?></td>
            <td><?php echo $u->jurusan ?></td>
            <td><?php echo $u->tanggalizin ?></td>
            <td><?php echo $u->alasan ?></td>
            <td><?php echo $u->tanggalsurat ?></td>
            <td>
              <?php echo anchor('suratdispensasi/edit/' . $u->id, '<i class="fas fa-edit   " aria-hidden="true" ></i>'); ?>
              <?php echo anchor('suratdispensasi/hapus/' . $u->id, '<i class="fas fa-trash   " aria-hidden="true" style="color:#FF0000" onclick="return confirm(\'Yakin mau menghapus?\')"></i>') ?>
              <?php echo anchor('suratdispensasi/cetak/' . $u->id, '<i class="fas fa-print   " aria-hidden="true" style="color:#000000"></i>'); ?>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </body>

</html>