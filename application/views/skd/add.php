<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>TAMBAH DATA Surat Keterangan Domisili</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container-fluid">
    <?php echo form_open('skd/create'); ?>
    <table border=0 width="100%" cellpadding="10" cellspacing="0">
        <tr bgcolor="lightgrey">
            <td Colspan="3" align="center">
                <H3>DATA Surat Keterangan Domisili</H3>
            </td>
        </tr>
        <tr>
            <td>No SKD</td>
            <td>:</td>
            <td><input type="text" name="no_skd" value="<?php echo set_value('no_skd'); ?>" size="50"><?php echo form_error('no_skd'); ?></td>
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
            <td>ID KK</td>
            <td>:</td>
            <td><select  name="id_kk" >
                <?php foreach ($dataskd as $key): ?>
                    <option value="<?php echo $key->id_kk ?>"><?php echo $key->id_kk?></option>
                    <?php echo form_error('id_kk'); ?>
                    <?php endforeach ?>
                </select>
            </td>    
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo set_value('jenis_kelamin'); ?>" size="50"><?php echo form_error('jenis_kelamin'); ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type="text" name="pekerjaan" value="<?php echo set_value('pekerjaan'); ?>" size="50"><?php echo form_error('pekerjaan'); ?></td>
        </tr>
        
        <tr>
            <td>Alamat Sekarang</td>
            <td>:</td>
            <td><textarea name="alamat_sekarang" rows="2" value="<?php echo set_value('alamat_sekarang'); ?>" cols="52"></textarea><?php echo form_error('alamat_sekarang'); ?></td>
        </tr>
        <tr align="center">
            <td colspan="3">
                <input type="submit" value="TAMBAH">
                <input type="reset" value="BATAL">
                <button><a href="<?php echo base_url(); ?>index.php/skd">Lihat Data Detail Kartu Keluarga</a></button>
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>

</body>

</html>