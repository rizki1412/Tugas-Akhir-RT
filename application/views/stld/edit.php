
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>edit Data Surat Tanda Lapor Diri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container-fluid">

    <?php echo form_open('stld/update'); ?>
    <table border=0 width="100%" cellpadding="5" cellspacing="0">
        <tr bgcolor="lightgrey">
            <td Colspan="3" align="center">
                <H3>DATA STLD</H3>
            </td>
        </tr>
        <tr>
            <td><input type='hidden' name="no_stld" value="<?php echo $stld['no_stld']; ?>" size="50" ><?php echo form_error('no_stld'); ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $stld['nama']; ?>" size="50"><?php echo form_error('nama'); ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" value="<?php echo $stld['tempat_lahir']; ?>" size="50"><?php echo form_error('tempat_lahir'); ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="tanggal_lahir" value="<?php echo $stld['tanggal_lahir']; ?>" size="50"><?php echo form_error('tanggal_lahir'); ?></td>
        </tr>
        <tr>
            <td>Status Perkawinan</td>
            <td>:</td>
            <td><input type="text" name="status_perkawinan" value="<?php echo $stld['status_perkawinan']; ?>" size="50"><?php echo form_error('status_perkawinan'); ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><input type="text" name="agama" value="<?php echo $stld['agama']; ?>" size="50"><?php echo form_error('agama'); ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><input type="text" name="pekerjaan" value="<?php echo $stld['pekerjaan']; ?>" size="50"><?php echo form_error('pekerjaan'); ?></td>
        </tr>
            
        <td><input type="hidden" name="nik" value="<?php echo $stld['nik']; ?>" size="50"><?php echo form_error('nik'); ?></td>
        
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $stld['alamat']; ?>" size="50"><?php echo form_error('alamat'); ?></td>
        </tr>
         <tr>
            <td>laporan</td>
            <td>:</td>
            <td><input type="text" name="laporan" value="<?php echo $stld['laporan']; ?>" size="50"><?php echo form_error('laporan'); ?></td>
        </tr>
        <tr align="center">
            <td colspan="3">
                <button type="submit" value="update" name="update">Update</button>
                <button><a href="<?php echo base_url(); ?>index.php/stld">Lihat Data STLD</a></button>
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>

</body>

</html>