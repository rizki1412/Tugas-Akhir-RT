<div class="col-lg-12"> 
        <a href="<?php echo base_url(); ?>index.php/pp/create" class="btn btn-primary mb-3">
        <i class="fas fa-file-alt"></i> Tambah Data Pernyataan Pernikahan</a>
        
<table class="table table-hover">   
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID Pernikahan</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Nik</th>
            <th scope="col">Agama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Status Perkawinan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody> <?php $a = 1;
            foreach ($pp as $row) { ?> <tr>
                <th scope="row"><?= $a++; ?></th>
                <td><?= $row['id_pernikahan']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['tempat_lahir']; ?></td>
                <td><?= $row['tanggal_lahir']; ?></td>
                <td><?= $row['nik']; ?></td>
                <td><?= $row['agama']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td><?= $row['status_perkawinan']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td>    
                    <a href="<?= base_url('pp/edit/') . $row['id_pernikahan']; ?>" class="badge badge-info">
                    <i class="fas fa-edit"></i> Ubah</a> 
                    <a href="<?= base_url('pp/hapus/') . $row['id_pernikahan']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $row['id_pernikahan']; ?> ?');" class="badge badge-danger">
                    <i class="fas fa-trash"></i> Hapus</a> 
                </td>

            </tr> <?php } ?> </tbody>
    </table>
</div>
