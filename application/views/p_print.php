<html>

<head><?php foreach ($peringatan as $u) { ?></head>


<body>
    <table align="center">

        <tr>
            <td>
                <img src="https://1.bp.blogspot.com/-Dz1fAVotyK8/X_XTxTxBTWI/AAAAAAAAANY/58lYcwZTTWMMqDfTHH4prlddwGh5GFYOwCLcBGAsYHQ/s134/logosurat.png" width="150" heigt="70" />
            </td>
            <td>
                <center>
                    <font size="5">KOTA NEWYORK</font><br>
                    <font size="6">MAJU MUNDUR HIGH SCHOOL</font><br>
                    <font size="3">
                        <i>
                            <em>Jln. Sueperman Indah Newyork Barat 654321</em>
                        </i>
                    </font>
                </center>
                <center>
                    <font size="3">
                        <i>
                            <em>Telp. (0962) 516709 E-Mail: info@majumundurhs.sch.id</em>
                        </i>
                    </font>
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
                    <font size="4"><b><u>SURAT PERINGATAN</u></b></font>
            </td>
            </center>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <font size="3"></br><?php echo $u->tanggalsurat ?>
                </font>
            </td>
        <tr>
        <tr>
            <td colspan="2" align="left">
                <font size="3"></br>Kepada
                </font>
            </td>
        <tr>
        <tr>
            <td colspan="2" align="left">
                <font size="3">Yth : Orang Tua dari <?php echo $u->nama ?>
                </font>
            </td>
        <tr>
            <td colspan="2" align="justify">
                <font size="3"></br>Sehubungan dengan berlakunya aturan di Maju Mundur High School, maka kami selaku Kepala Sekolah dari:
                </font>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="justify">
                <br></br>
                <name="id" value="<?php echo $u->id ?>">
                    Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $u->nama ?></br>
                    </br>
                    <name="id" value="<?php echo $u->id ?>">
                        NIS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $u->nis ?></br>
                        </br>
                        <name="id" value="<?php echo $u->id ?>">
                            Kelas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $u->kelas ?></br>
                            </br>
                            <name="id" value="<?php echo $u->id ?>">
                                Jurusan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $u->jurusan ?>

                                </form>
                            <?php } ?>
        </tr>
        <tr>
            <td colspan="2" align="justify">
                <font size="3"></br></br></br>Perlu diketahui oleh orang tuanya bahwa siswa tersebut <?php echo $u->keterangan ?>. Untuk itu kami selaku guru memberikan peringatan yang keras apabila tidak ada alasan dari orang tua mengenai kehadiranya, maka kami akan memberhentikan belajar siswa tersebut di Maju Mundur High School. Alasan dari orang tuanya dapat disampaikan langsung oleh orang tuanya kepada kami dengan mendatangi kami di Maju Mundur High School. Kami tunggu kedatangannya.</font>
            </td>
            </td>
            <br></br>
        </tr>

        <br></br>
        <tr>
            <td colspan="2" align="right">
                <br>
                <right>Kepala Sekolah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</right><br>
            </td>
        </tr>
        <tr>
            <td height="70"></td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <right> Dr. Asad Rifqi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</right>&nbsp;&nbsp;
            </td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <right>Nip. 192 69696969 001</right>
            </td>
        </tr>
        </tabel>

        <script>
            window.print();
        </script>
        </tabel>
</body>

</html>