<div class="col-lg-12"> 
        <a href="<?php echo base_url(); ?>index.php/kk/create" class="btn btn-primary mb-3">
        <i class="fas fa-file-alt"></i> Tambah Data Kartu Keluarga</a>
        
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id KK</th>
            <th scope="col">No KK</th>
            <th scope="col">Nama</th>
            <th scope="col">Nik</th>
            
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            
            <th scope="col">Pekerjaan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody> <?php $a = 1;
            foreach ($kk as $row) { ?> <tr>
                <th scope="row"><?= $a++; ?></th>
                <td><?= $row['id_kk']; ?></td>
                <td><?= $row['no_kk']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nik']; ?></td>
                
                <td><?= $row['tempat_lahir']; ?></td>
                <td><?= $row['tanggal_lahir']; ?></td>
                
                <td><?= $row['pekerjaan']; ?></td>
                <td>    
                    <a href="<?= base_url('kk/edit/') . $row['id_kk']; ?>" class="badge badge-info">
                    <i class="fas fa-edit"></i> Ubah</a> 
                    <a href="<?= base_url('kk/hapus/') . $row['id_kk']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $row['id_kk']; ?> ?');" class="badge badge-danger">
                    <i class="fas fa-trash"></i> Hapus</a> 
                </td>

            </tr> <?php } ?> </tbody>
    </table>
</div>
