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
  <h2>Tambah Data Baru</h2>
  </center>
  <div class="container">
    <form action="<?php echo base_url() . 'suratperingatan/tambah_aksi'; ?>" method="post">
      <table class="table table-striped table-hover">
        <td>NIS</td>
        <td>:</td>
        <td><input type="text" name="nis" required></td>
        </tr>
        <tr>
          <td>Nama Lengkap</td>
          <td>:</td>
          <td><input type="text" name="nama" size="30" required></td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td>:</td>
          <td>
            <select name="kelas" required>
              <option value="">Pilih Kelas</option>
              <option value="X">X</option>
              <option value="XI">XI</option>
              <option value="XII">XII</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td>:</td>
          <td>
            <select name="jurusan" required>
              <option value="">Pilih Jurusan</option>
              <option value="RPL">Rekayasa Perangkat Lunak</option>
              <option value="TKJ">Teknik Komputer dan Jaringan</option>
              <option value="Multimetida">Multimedia</option>
            </select>
          </td>
        </tr>
        <td>Keterangan</td>
        <td>:</td>
        <td>
          <select name="keterangan" required>
            <option value="">Pilih Keterangan</option>
            <option value="tidak mengikuti pelajaran tanpa alasan yang jelas lebih dari tiga kali">tidak mengikuti pelajaran tanpa alasan yang jelas lebih dari tiga kali</option>
            <option value="melakukan pelanggaran berat">melakukan pelanggaran berat</option>
          </select>
        </td>
        </tr>
        <td>Tempat, Tanggal Surat</td>
        <td>:</td>
        <td><input type="text" name="tanggalsurat" size="50" required></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td><input type="submit" name="tambah" &nbsp value="Tambah" &nbsp class="btn btn-primary"></td>
        </tr>
      </table>
    </form>
</body>

</html>