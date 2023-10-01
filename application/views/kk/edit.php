
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>edit Data Kartu Keluarga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container-fluid">

    <?php echo form_open('kk/update'); ?>
    <table border=0 width="100%" cellpadding="5" cellspacing="0">
        <tr bgcolor="lightgrey">
            <td Colspan="3" align="center">
                <H3>DATA Kartu Keluarga</H3>
            </td>
        </tr>
        <tr>
            <td><input type='hidden' name="id_kk" value="<?php echo $kk['id_kk']; ?>" size="50" ><?php echo form_error('id_kk'); ?></td>
        </tr>
        <tr>
            <td>NO KK</td>
            <td>:</td>
            <td><input type="text" name="no_kk" value="<?php echo $kk['no_kk']; ?>" size="50"><?php echo form_error('no_kk'); ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $kk['nama']; ?>" size="50"><?php echo form_error('nama'); ?></td>
        </tr>
        
        <td><input type="hidden" name="nik" value="<?php echo $kk['nik']; ?>" size="50"><?php echo form_error('nik'); ?></td>
        
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $kk['jenis_kelamin']; ?>" size="50"><?php echo form_error('jenis_kelamin'); ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" value="<?php echo $kk['tempat_lahir']; ?>" size="50"><?php echo form_error('tempat_lahir'); ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="tanggal_lahir" value="<?php echo $kk['tanggal_lahir']; ?>" size="50"><?php echo form_error('tanggal_lahir'); ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><input type="text" name="agama" value="<?php echo $kk['agama']; ?>" size="50"><?php echo form_error('agama'); ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type="text" name="pekerjaan" value="<?php echo $kk['pekerjaan']; ?>" size="50"><?php echo form_error('pekerjaan'); ?></td>
        </tr>
        <tr align="center">
            <td colspan="3">
                <button type="submit" value="update" name="update">Update</button>
                <button><a href="<?php echo base_url(); ?>index.php/kk">Lihat Data kk</a></button>
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>

</body>

</html>