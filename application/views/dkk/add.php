<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>TAMBAH DATA Detail Kartu Keluarga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container-fluid">
    <?php echo form_open('dkk/create'); ?>
    <table border=0 width="100%" cellpadding="10" cellspacing="0">
        <tr bgcolor="lightgrey">
            <td Colspan="3" align="center">
                <H3>DATA Detail Kartu Keluarga</H3>
            </td>
        </tr>
        <tr>
            <td>Kode KK</td>
            <td>:</td>
            <td><input type="text" name="kode_kk" value="<?php echo set_value('kode_kk'); ?>" size="50"><?php echo form_error('kode_kk'); ?></td>
        </tr>
        <tr>
            <td>ID KK</td>
            <td>:</td>
            <td><select  name="id_kk" >
                <?php foreach ($datadkk as $key): ?>
                    <option value="<?php echo $key->id_kk ?>"><?php echo $key->id_kk?></option>
                    <?php echo form_error('id_kk'); ?>
                    <?php endforeach ?>
                </select>
            </td>    
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo set_value('nama'); ?>" size="50"><?php echo form_error('nama'); ?></td>
        </tr>
        <tr>
            <td>Status Perkawinan</td>
            <td>:</td>
            <td><input type="text" name="status_perkawinan" value="<?php echo set_value('status_perkawinan'); ?>" size="50"><?php echo form_error('status_perkawinan'); ?></td>
        </tr>
        <tr>
            <td>Status Hubungan Dalam Keluarga</td>
            <td>:</td>
            <td><input type="text" name="status_hubungan_dalam_keluarga" value="<?php echo set_value('status_hubungan_dalam_keluarga'); ?>" size="50"><?php echo form_error('status_hubungan_dalam_keluarga'); ?></td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td><input type="text" name="kewarganegaraan" value="<?php echo set_value('kewarganegaraan'); ?>" size="50"><?php echo form_error('kewarganegaraan'); ?></td>
        </tr>
        <tr>
            <td>Ayah</td>
            <td>:</td>
            <td><input type="text" name="ayah" value="<?php echo set_value('ayah'); ?>" size="50"><?php echo form_error('ayah'); ?></td>
        </tr>
        <tr>
            <td>Ibu</td>
            <td>:</td>
            <td><input type="text" name="ibu" value="<?php echo set_value('ibu'); ?>" size="50"><?php echo form_error('ibu'); ?></td>
        </tr>
        <tr align="center">
            <td colspan="3">
                <input type="submit" value="TAMBAH">
                <input type="reset" value="BATAL">
                <button><a href="<?php echo base_url(); ?>index.php/dkk">Lihat Data Detail Kartu Keluarga</a></button>
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>

</body>

</html>