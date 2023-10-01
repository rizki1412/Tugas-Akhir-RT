<div class="col-lg-12"> 
        <a href="<?php echo base_url(); ?>index.php/skd/create" class="btn btn-primary mb-3">
        <i class="fas fa-file-alt"></i> Tambah Data Surat Keterangan Domisili</a>
        
<table class="table table-hover">   
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">No Skd</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">ID KK</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Alamat Sekarang</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody> <?php $a = 1;
            foreach ($skd as $row) { ?> <tr>
                <th scope="row"><?= $a++; ?></th>
                <td><?= $row['no_skd']; ?></td>  
                <td><?= $row['nama']; ?></td>
                <td><?= $row['tempat_lahir']; ?></td>
                <td><?= $row['tanggal_lahir']; ?></td>
                <td><?= $row['id_kk']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td><?= $row['pekerjaan']; ?></td>
                <td><?= $row['alamat_sekarang']; ?></td>
                <td>
                    <a href="<?= base_url('skd/edit/') . $row['no_skd']; ?>" class="badge badge-info">
                    <i class="fas fa-edit"></i> Ubah</a> 
                    <a href="<?= base_url('skd/hapus/') . $row['no_skd']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $row['no_skd']; ?> ?');" class="badge badge-danger">
                    <i class="fas fa-trash"></i> Hapus</a> 
                </td>
            </tr> <?php } ?> </tbody>
    </table>
</div>
