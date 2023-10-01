<div class="col-lg-12"> 
        <a href="<?php echo base_url(); ?>index.php/stld/create" class="btn btn-primary mb-3">
        <i class="fas fa-file-alt"></i> Tambah Data Surat Tanda Lapor Diri</a>
        
<table class="table table-hover">   
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">No STLD</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Status Perkawinan</th>
            <th scope="col">Agama</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Nik</th>
            <th scope="col">Alamat</th>
            <th scope="col">Laporan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody> <?php $a = 1;
            foreach ($stld as $row) { ?> <tr>
                <th scope="row"><?= $a++; ?></th>
                <td><?= $row['no_stld']; ?></td>    
                <td><?= $row['nama']; ?></td>
                <td><?= $row['tempat_lahir']; ?></td>
                <td><?= $row['tanggal_lahir']; ?></td>
                <td><?= $row['status_perkawinan']; ?></td>
                <td><?= $row['agama']; ?></td>
                <td><?= $row['pekerjaan']; ?></td>
                <td><?= $row['nik']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['laporan']; ?></td>
                <td>    
                    <a href="<?= base_url('stld/edit/') . $row['no_stld']; ?>" class="badge badge-info">
                    <i class="fas fa-edit"></i> Ubah</a> 
                    <a href="<?= base_url('stld/hapus/') . $row['no_stld']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $row['no_stld']; ?> ?');" class="badge badge-danger">
                    <i class="fas fa-trash"></i> Hapus</a> 
                </td>

            </tr> <?php } ?> </tbody>
    </table>
</div>
