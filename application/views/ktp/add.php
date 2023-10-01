<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>TAMBAH DATA KTP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container-fluid">
    <?php echo form_open('ktp/create'); ?>
    <table border=0 width="100%" cellpadding="10" cellspacing="0">
        <tr bgcolor="lightgrey">
            <td Colspan="3" align="center">
                <H3>DATA KTP</H3>
            </td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><input type="text" name="nik" value="<?php echo set_value('nik'); ?>" size="50"><?php echo form_error('nik'); ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo set_value('nama'); ?>" size="50"><?php echo form_error('nama'); ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" value="<?php echo set_value('tempat_lahir'); ?>" size="50"><?php echo form_error('tempat_lahir'); ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir'); ?>" size="50"><?php echo form_error('tanggal_lahir'); ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" rows="2" value="<?php echo set_value('alamat'); ?>" cols="52"></textarea><?php echo form_error('alamat'); ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><input type="text" name="agama" value="<?php echo set_value('agama'); ?>" size="50"><?php echo form_error('agama'); ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo set_value('jenis_kelamin'); ?>" size="50"><?php echo form_error('jenis_kelamin'); ?></td>
        </tr>
        <tr>
            <td>Status Perkawinan</td>
            <td>:</td>
            <td><input type="text" name="status_perkawinan" value="<?php echo set_value('status_perkawinan'); ?>" size="50"><?php echo form_error('status_perkawinan'); ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type="text" name="pekerjaan" value="<?php echo set_value('pekerjaan'); ?>" size="50"><?php echo form_error('pekerjaan'); ?></td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td><input type="text" name="kewarganegaraan" value="<?php echo set_value('kewarganegaraan'); ?>" size="50"><?php echo form_error('kewarganegaraan'); ?></td>
        </tr>
        <tr>
            <td>Berlaku Hingga</td>
            <td>:</td>
            <td><input type="text" name="berlaku_hingga" value="<?php echo set_value('berlaku_hingga'); ?>" size="50"><?php echo form_error('berlaku_hingga'); ?></td>
        </tr>
        <tr align="center">
            <td colspan="3">
                <input type="submit" value="TAMBAH">
                <input type="reset" value="BATAL">
                <button><a href="<?php echo base_url(); ?>index.php/ktp">Lihat Data KTP</a></button>
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>

</body>

</html>