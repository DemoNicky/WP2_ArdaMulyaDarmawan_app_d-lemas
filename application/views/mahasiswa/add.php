<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>TAMBAH DATA MAHASISWA</title>
</head>

<body>
    <?php echo form_open('mahasiswa/create'); ?>
    <table border=0 width="45%" cellpadding="5" cellspacing="0">
        <tr bgcolor="silver">
            <td Colspan="3" align="center">
                <H3>DATA MAHASISWA</H3>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo set_value('nama'); ?>" size="50"><?php echo form_error('nama'); ?></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis" value="<?php echo set_value('nis'); ?>" size="50"><?php echo form_error('nis'); ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value="<?php echo set_value('kelas'); ?>" size="50"><?php echo form_error('kelas'); ?></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir'); ?>" size="50"><?php echo form_error('tanggal_lahir'); ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" value="<?php echo set_value('tempat_lahir'); ?>" size="50"><?php echo form_error('tempat_lahir'); ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" rows="2" value="<?php echo set_value('alamat'); ?>" cols="52"></textarea><?php echo form_error('alamat'); ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenis_kelamin" checked value="PRIA">PRIA
                <input type="radio" name="jenis_kelamin" value="WANITA">WANITA
            </td><?php echo form_error('jenis_kelamin'); ?>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select class="form-control" id="agama" name="agama">
                    <option value="">-- Pilih Agama --</option>
                    <option value="Islam" <?php if (set_value('agama') == "Islam") : echo "selected";
                                                        endif; ?>>Islam</option>
                    <option value="Kristen"<?php if (set_value('agama') == "Kristen") : echo "selected";
                                                        endif; ?>>Kristen</option>
                    <option value="Katolik"<?php if (set_value('agama') == "Katolik") : echo "selected";
                                                        endif; ?>>Katolik</option>
                    <option value="Buddha"<?php if (set_value('agama') == "Buddha") : echo "selected";
                                                        endif; ?>>Buddha</option>
                    <option value="Hindu"<?php if (set_value('agama') == "Hindu") : echo "selected";
                                                        endif; ?>>Hindu</option>
                    <option value="Protestan"<?php if (set_value('agama') == "Protestan") : echo "selected";
                                                        endif; ?>>Protestan</option>
                    <option value="Konghucu"<?php if (set_value('agama') == "Konghucu") : echo "selected";
                                                        endif; ?>>Konghucu</option>
                </select>
            </form>
            </td><?php echo form_error('agama'); ?>
        </tr>


        <tr align="center">
            <td colspan="3">
                <input type="submit" value="TAMBAH">
                <input type="reset" value="BATAL">
                [<a href="<?php echo base_url(); ?>index.php/mahasiswa">Lihat Data Mahasiswa</a>]
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>

</body>

</html>