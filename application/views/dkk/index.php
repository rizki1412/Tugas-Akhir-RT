<div class="col-lg-12"> 
        <a href="<?php echo base_url(); ?>index.php/dkk/create" class="btn btn-primary mb-3">
        <i class="fas fa-file-alt"></i> Tambah Data Surat Tanda Lapor Diri</a>
        
<table class="table table-hover">   
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kode kk</th>
            <th scope="col">ID KK</th>
            <th scope="col">Nama</th>
            <th scope="col">Status Perkawinan</th>
            <th scope="col">Status Hubungan Dalam Keluarga</th>
            <th scope="col">Kewarganegaraan</th>
            <th scope="col">Ayah</th>
            <th scope="col">Ibu</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody> <?php $a = 1;
            foreach ($dkk as $row) { ?> <tr>
                <th scope="row"><?= $a++; ?></th>
                <td><?= $row['kode_kk']; ?></td>    
                <td><?= $row['id_kk']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['status_perkawinan']; ?></td>
                <td><?= $row['status_hubungan_dalam_keluarga']; ?></td>
                <td><?= $row['kewarganegaraan']; ?></td>
                <td><?= $row['ayah']; ?></td>
                <td><?= $row['ibu']; ?></td>
                <td>    
                    <a href="<?= base_url('dkk/edit/') . $row['kode_kk']; ?>" class="badge badge-info">
                    <i class="fas fa-edit"></i> Ubah</a> 
                    <a href="<?= base_url('dkk/hapus/') . $row['kode_kk']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $row['kode_kk']; ?> ?');" class="badge badge-danger">
                    <i class="fas fa-trash"></i> Hapus</a> 
                </td>

            </tr> <?php } ?> </tbody>
    </table>
</div>
