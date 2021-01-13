<table align="center">
    <tr>
        <td><img src="assets/logo.png" width="150" heigt="70"></td>
        <td>
            <center>
                <font size="5">KOTA NEWYORK</font><BR>
                <font size="6">MAJU MUNDUR HIGH SCHOOL</font><BR>
                <font size="3"><i><em>Jln. Sueperman Indah Newyork Barat 654321</em></i></font>
            </center>
            <center>
                <font size="3"><i><em>Telp. (0962) 516709 E-Mail: info@majumundurhs.sch.id</em></i></font>
            </center>
        </td>
    </tr>
    <tr>
        <td colspan="9">
            <hr>
        </td>
    </tr>
</table>

<table align="center">
    <tr>
        <td width="635">
            <center>
                <font size="4"><b><u>KETERANGAN DISPENSASI</u></b></font>
        </td>
        </center>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="justify">
            <font size="3"></br>Dengan ini siswa terlampir tidak dapat mengikuti kegiatan belajar mengajar terhitung pada tanggal 24 Agustus 2017 sebagaimana mestinya dikarenakan akan mengikuti Kegiatan Kegiatan Rohis Seminar Alisha di SMA Negeri 1 Cianjur. Adapun nama siswa tersebut adalah :</font>
        </td>
        </td>
    </tr>
    <table align="center">
        <td width="635">
            <center>
                <font size="4">
                    <tr>

                        <td>
                            <font size="3">No.</font>
                        </td>
                        <th>
                            <font size="3">NIS</font>
                        </th>
                        <th>
                            <font size="3">Nama Lengkap</font>
                        </th>
                        <th>
                            <font size="3">Kelas</font>
                        </th>
                        <th>
                            <font size="3">Jurusan</font>
                        </th>
                    </tr>
                    <tr>
                        <font size="3">
                            <?php
                            include('konek.php');
                            $query = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY NIS") or die('perintah sql salah');
                            if (mysqli_num_rows($query) == 0) {
                                echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
                            } else {
                                $no = 1;
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo '<tr>';
                                    echo "<td><center>$no.</center></td>";
                                    echo "<td>$data[nis]</td>";
                                    echo '<td>' . $data['nama'] . '</td>';
                                    echo '<td><center>' . $data['kelas'] . '</center></td>';
                                    echo '<td><center>' . $data['jurusan'] . '</center></td>';
                                    $no++;
                                }
                            }
                            ?>
                    </tr>
        </td>
        <BR></BR>
    </table>

    <table align="center">
        <td width="635">
            <center>
                <font size="4">
            </center>
        </td>
        </tr>
        <tr>
            <td colspan="2" align="justify">
                <font size="3"></br>Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya. Atas perhatian saudara, kami ucapkan terima kasih.</font>
            </td>
            </td><BR></BR>
        </tr>
    </table>
    <BR></BR>
    <table align="right">
        <td width="100">
            <font size="4">
        </td>
        </tr>
        <tr>
            <td>
                <center>Kepala Sekolah</center>
            </td>
        </tr>
        <tr>
            <td height="70"></td>
        </tr>
        <tr>
            <td>
                <center> <u> Dr. Asad Rifqi </u></center>
            </td>
        </tr>
        <tr>
            <td>
                <center>Nip. 192 69696969 001</center>
            </td>
        </tr>

        <script>

        </script>
        </body>

        </html>