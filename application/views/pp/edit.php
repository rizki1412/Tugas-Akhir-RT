
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>edit Data Pernyataan Pernikahan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container-fluid">

    <?php echo form_open('pp/update'); ?>
    <table border=0 width="100%" cellpadding="5" cellspacing="0">
        <tr bgcolor="lightgrey">
            <td Colspan="3" align="center">
                <H3>DATA Pernyataan Pernikahan</H3>
            </td>
        </tr>
        <tr>
            <td><input type='hidden' name="id_pernikahan" value="<?php echo $pp['id_pernikahan']; ?>" size="50" ><?php echo form_error('id_pernikahan'); ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $pp['nama']; ?>" size="50"><?php echo form_error('nama'); ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" value="<?php echo $pp['tempat_lahir']; ?>" size="50"><?php echo form_error('tempat_lahir'); ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="tanggal_lahir" value="<?php echo $pp['tanggal_lahir']; ?>" size="50"><?php echo form_error('tanggal_lahir'); ?></td>
        
        
        <td><input type="hidden" name="nik" value="<?php echo $pp['nik']; ?>" size="50"><?php echo form_error('nik'); ?></td>
        
        
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><input type="text" name="agama" value="<?php echo $pp['agama']; ?>" size="50"><?php echo form_error('agama'); ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $pp['jenis_kelamin']; ?>" size="50"><?php echo form_error('jenis_kelamin'); ?></td>
        </tr>
        <tr>
            <td>Status Perkawinan</td>
            <td>:</td>
            <td><input type="text" name="status_perkawinan" value="<?php echo $pp['status_perkawinan']; ?>" size="50"><?php echo form_error('status_perkawinan'); ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $pp['alamat']; ?>" size="50"><?php echo form_error('alamat'); ?></td>
        </tr>
        <tr align="center">
            <td colspan="3">
                <button type="submit" value="update" name="update">Update</button>
                <button><a href="<?php echo base_url(); ?>index.php/pp">Lihat Data PP</a></button>
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>

</body>

</html>