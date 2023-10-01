<div class="col-lg-12"> 
        <a href="<?php echo base_url(); ?>index.php/ktp/create" class="btn btn-primary mb-3">
        <i class="fas fa-file-alt"></i> Tambah Data KTP</a>
        
<table class="table table-hover">   
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Agama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Status Perkawinan</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Kewarganegaraan</th>
            <th scope="col">Berlaku Hingga</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody> <?php $a = 1;
            foreach ($ktp as $row) { ?> <tr>
                <th scope="row"><?= $a++; ?></th>
                <td><?= $row['nik']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['tempat_lahir']; ?></td>
                <td><?= $row['tanggal_lahir']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['agama']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td><?= $row['status_perkawinan']; ?></td>
                <td><?= $row['pekerjaan']; ?></td>
                <td><?= $row['kewarganegaraan']; ?></td>
                <td><?= $row['berlaku_hingga']; ?></td>
                <td>    
                    <a href="<?= base_url('ktp/edit/') . $row['nik']; ?>" class="badge badge-info">
                    <i class="fas fa-edit"></i> Ubah</a> 
                    <a href="<?= base_url('ktp/hapus/') . $row['nik']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $row['nik']; ?> ?');" class="badge badge-danger">
                    <i class="fas fa-trash"></i> Hapus</a> 
                </td>

            </tr> <?php } ?> </tbody>
    </table>
</div>
