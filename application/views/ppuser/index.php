<div class="col-lg-12"> 
        
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
                

            </tr> <?php } ?> </tbody>
    </table>
</div>
