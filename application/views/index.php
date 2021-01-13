<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>MajuMundurHighSchool</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <link rel="stylesheet" media="all" href="css/style.css">
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>

  <header id="header">
    <div class="container">
      <a href="index.php" id="logo" title="MajuMundurHighSchool">MajuMundurHighSchool</a>
      <div class="menu-trigger"></div>
      <nav id="menu">
        <ul>
          <li class="current"><a href="tambah.php">Tambah Data</a></li>
        </ul>
        <ul>
          <li><a href="print.php">Cekat Surat</a></li>
          </ul>
      </nav>
      <!-- / navigation -->
    </div>
    <!-- / container -->
  
  </header>
  <!-- / header -->
    <div class="divider"></div>
<h1>Surat Dispensasi</h1>
<aside id="sidebar">

      </aside>
      <!-- / sidebar -->
<table>
 <tr bgcolor="#CCCCCC">
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
include('konek.php');
$query=mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY NIS")or die('perintah sql salah');
 if(mysqli_num_rows($query)==0){
  echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
 }else{
  $no=1;
  while($data=mysqli_fetch_assoc($query)){
   echo'<tr>';
   echo"<td><center>$no.</center></td>";
   echo"<td>$data[nis]</td>";
   echo'<td>'.$data['nama'].'</td>';
   echo'<td><center>'.$data['kelas'].'</center></td>';
   echo'<td><center>'.$data['jurusan'].'</center></td>';
   echo'<td>'.$data['tanggalizin'].'</td>';
   echo'<td>'.$data['alasan'].'</td>';
   echo'<td>'.$data['tanggalsurat'].'</td>';
   echo'<td><center><a href="edit.php?id='.$data['id'].'">Edit</a> / <a href="hapus.php?id='.$data['id'].'"onclick="return confirm(\'Yakin?\')">Hapus</a></center></td>';
   echo'</tr>';
   $no++;
  }
 }
?>
</table>

</body>
</html>