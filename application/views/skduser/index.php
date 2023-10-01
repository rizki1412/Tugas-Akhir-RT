<div class="col-lg-12"> 
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
            </tr> <?php } ?> </tbody>
    </table>
</div>
