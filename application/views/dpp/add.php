<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>TAMBAH DATA Pernyataan Pernikahan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container-fluid">
    <?php echo form_open('dpp/create'); ?>
    <table border=0 width="100%" cellpadding="10" cellspacing="0">
        <tr bgcolor="lightgrey">
            <td Colspan="3" align="center">
                <H3>DATA Detail Pernyataan Pernikahan</H3>
            </td>
        </tr>
        <tr>
            <td>KD Pernikahan</td>
            <td>:</td>
            <td><input type="text" name="kd_pernikahan" value="<?php echo set_value('kd_pernikahan'); ?>" size="50"><?php echo form_error('kd_pernikahan'); ?></td>
        </tr>
        <tr>
            <td>ID Pernikahan</td>
            <td>:</td>
            <td><select  name="id_pernikahan" >
                <?php foreach ($datadpp as $key): ?>
                    <option value="<?php echo $key->id_pernikahan ?>"><?php echo $key->id_pernikahan?></option>
                    <?php echo form_error('id_pernikahan'); ?>
                    <?php endforeach ?>
                </select>
            </td>    
        </tr>
        <tr>
            <td>Nama Calon</td>
            <td>:</td>
            <td><input type="text" name="nama_calon" value="<?php echo set_value('nama_calon'); ?>" size="50"><?php echo form_error('nama_calon'); ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir Calon</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir_calon" value="<?php echo set_value('tempat_lahir_calon'); ?>" size="50"><?php echo form_error('tempat_lahir_calon'); ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir Calon</td>
            <td>:</td>
            <td><input type="text" name="tanggal_lahir_calon" value="<?php echo set_value('tanggal_lahir_calon'); ?>" size="50"><?php echo form_error('tanggal_lahir_calon'); ?></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><select  name="nik" >
                <?php foreach ($datadpp as $key): ?>
                    <option value="<?php echo $key->nik ?>"><?php echo $key->nik?></option>
                    <?php echo form_error('nik'); ?>
                    <?php endforeach ?>
                </select>
            </td>    
        </tr>
        <tr>
            <td>Agama Calon</td>
            <td>:</td>
            <td><input type="text" name="agama_calon" value="<?php echo set_value('agama_calon'); ?>" size="50"><?php echo form_error('agama_calon'); ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin Calon</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin_calon" value="<?php echo set_value('jenis_kelamin_calon'); ?>" size="50"><?php echo form_error('jenis_kelamin_calon'); ?></td>
        </tr>
        <tr>
            <td>Status Perkawinan Calon</td>
            <td>:</td>
            <td><input type="text" name="status_perkawinan_calon" value="<?php echo set_value('status_perkawinan_calon'); ?>" size="50"><?php echo form_error('status_perkawinan_calon'); ?></td>
        </tr>
        <tr>
            <td>Alamat Calon</td>
            <td>:</td>
            <td><textarea name="alamat_calon" rows="2" value="<?php echo set_value('alamat_calon'); ?>" cols="52"></textarea><?php echo form_error('alamat_calon'); ?></td>
        </tr>
        <tr align="center">
            <td colspan="3">
                <input type="submit" value="TAMBAH">
                <input type="reset" value="BATAL">
                <button><a href="<?php echo base_url(); ?>index.php/dpp">Lihat Data Detail Pernyataan Pernikahan</a></button>
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>

</body>

</html>