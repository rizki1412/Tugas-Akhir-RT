<div class="col-lg-12"> 
        <a href="<?php echo base_url(); ?>index.php/dpp/create" class="btn btn-primary mb-3">
        <i class="fas fa-file-alt"></i> Tambah Data Detail Pernyataan Pernikahan</a>
        
<table class="table table-hover">   
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">KD Pernikahan</th>
            <th scope="col">ID Pernikahan</th>
            <th scope="col">Nama Calon</th>
            <th scope="col">Tempat Lahir Calon</th>
            <th scope="col">Tanggal Lahir Calon</th>
            <th scope="col">Nik</th>
            <th scope="col">Agama Calon</th>
            <th scope="col">Jenis Kelamin Calon</th>
            <th scope="col">Status Perkawinan Calon</th>
            <th scope="col">Alamat Calon</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody> <?php $a = 1;
            foreach ($dpp as $row) { ?> <tr>
                <th scope="row"><?= $a++; ?></th>
                <td><?= $row['kd_pernikahan']; ?></td>
                <td><?= $row['id_pernikahan']; ?></td>
                <td><?= $row['nama_calon']; ?></td>
                <td><?= $row['tempat_lahir_calon']; ?></td>
                <td><?= $row['tanggal_lahir_calon']; ?></td>
                <td><?= $row['nik']; ?></td>
                <td><?= $row['agama_calon']; ?></td>
                <td><?= $row['jenis_kelamin_calon']; ?></td>
                <td><?= $row['status_perkawinan_calon']; ?></td>
                <td><?= $row['alamat_calon']; ?></td>
                <td>    
                    <a href="<?= base_url('dpp/edit/') . $row['kd_pernikahan']; ?>" class="badge badge-info">
                    <i class="fas fa-edit"></i> Ubah</a> 
                    <a href="<?= base_url('dpp/hapus/') . $row['kd_pernikahan']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $row['kd_pernikahan']; ?> ?');" class="badge badge-danger">
                    <i class="fas fa-trash"></i> Hapus</a> 
                </td>

            </tr> <?php } ?> </tbody>
    </table>
</div>
