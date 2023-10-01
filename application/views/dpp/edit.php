
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>edit Data Detail Pernyataan Pernikahan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container-fluid">

    <?php echo form_open('dpp/update'); ?>
    <table border=0 width="100%" cellpadding="5" cellspacing="0">
        <tr bgcolor="lightgrey">
            <td Colspan="3" align="center">
                <H3>DATA Detail Pernyataan Pernikahan</H3>
            </td>
        </tr>
        <tr>
            <td><input type='hidden' name="kd_pernikahan" value="<?php echo $dpp['kd_pernikahan']; ?>" size="50" ><?php echo form_error('kd_pernikahan'); ?></td>
        </tr>
        <tr>
            <td>ID Pernikahan</td>
            <td>:</td>
            <td><input type="text" name="id_pernikahan" value="<?php echo $dpp['id_pernikahan']; ?>" size="50"><?php echo form_error('id_pernikahan'); ?></td>
        </tr>
        <tr>
            <td>Nama Calon</td>
            <td>:</td>
            <td><input type="text" name="nama_calon" value="<?php echo $dpp['nama_calon']; ?>" size="50"><?php echo form_error('nama_calon'); ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir Calon</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir_calon" value="<?php echo $dpp['tempat_lahir_calon']; ?>" size="50"><?php echo form_error('tempat_lahir_calon'); ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir Calon</td>
            <td>:</td>
            <td><input type="text" name="tanggal_lahir_calon" value="<?php echo $dpp['tanggal_lahir_calon']; ?>" size="50"><?php echo form_error('tanggal_lahir_calon'); ?></td>
        
        
        <td><input type="hidden" name="nik" value="<?php echo $dpp['nik']; ?>" size="50"><?php echo form_error('nik'); ?></td>
        
        
        <tr>
            <td>Agama Calon</td>
            <td>:</td>
            <td><input type="text" name="agama_calon" value="<?php echo $dpp['agama_calon']; ?>" size="50"><?php echo form_error('agama_calon'); ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin Calon</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin_calon" value="<?php echo $dpp['jenis_kelamin_calon']; ?>" size="50"><?php echo form_error('jenis_kelamin_calon'); ?></td>
        </tr>
        <tr>
            <td>Status Perkawinan Calon</td>
            <td>:</td>
            <td><input type="text" name="status_perkawinan_calon" value="<?php echo $dpp['status_perkawinan_calon']; ?>" size="50"><?php echo form_error('status_perkawinan_calon'); ?></td>
        </tr>
        <tr>
            <td>Alamat Calon</td>
            <td>:</td>
            <td><input type="text" name="alamat_calon" value="<?php echo $dpp['alamat_calon']; ?>" size="50"><?php echo form_error('alamat_calon'); ?></td>
        </tr>
        <tr align="center">
            <td colspan="3">
                <button type="submit" value="update" name="update">Update</button>
                <button><a href="<?php echo base_url(); ?>index.php/dpp">Lihat Data DPP</a></button>
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>

</body>

</html>