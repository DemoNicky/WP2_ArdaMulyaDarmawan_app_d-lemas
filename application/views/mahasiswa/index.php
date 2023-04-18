<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Tampil Data Mahasiswa</title>
</head>

<body>

    <H3>Data Mahasiswa</H3>
    <table border=1 width=80% cellpadding=2 cellspacing=0>
        <tr bgcolor=silver align=center>
            <td>Nama</td>
            <td>Nis</td>
            <td>Kelas</td>
            <td>Tanggal Lahir</td>
            <td>Tempat Lahir</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
        </tr>
        <?php
        if ($jumlah_data > 0) {

            foreach ($mahasiswa as $row) { ?>
                <tr align=center>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['nis']; ?></td>
                    <td><?php echo $row['kelas']; ?></td>
                    <td><?php echo $row['tanggal_lahir']; ?></td>
                    <td><?php echo $row['tempat_lahir']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><?php echo $row['agama']; ?></td>
                </tr>
            <?php
            }
        } else { ?>
            <tr align='center'>
                <td colspan=7>Data Mahasiswa kosong</td>
            </tr>
        <?php } ?>

    </table>
    <p>Jumlah data : <?php echo $jumlah_data; ?> [<a href="<?php echo base_url(); ?>index.php/mahasiswa/create">Tambah Data</a>] </p>
</body>

</html>